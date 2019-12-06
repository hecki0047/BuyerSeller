<?php

namespace App\Http\Controllers\frontend;


use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use DB;
use URL;
use Input;
use View;
use App\Models\ProductToCategory;
use Sentinel;
use Redirect;
use App\Models\Role_user;
use App\Models\SupplierQuery;
use App\Models\InqueryMessage;
use App\Models\SupplierInquery;
use App\Models\PagesSeo;
use App\Models\InqueryDocs;
use App\Models\Ticket\Tickets;
use App\Models\Ticket\Ticket_Thread;
use App\Models\Ticket\TicketToken;
use Jenssegers\Agent\Agent;
use App\Models\PagesPrefix;
use App\Models\Footer;
use App\Models\Country;
use App\Models\HomeProduct;

class QuotationController extends Controller
{   

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            //

        }
        public function postBuyRequest($id)
        {
            $quotations=SupplierInquery::where('id',$id)->with(['inq_products_description','inq_products_image','inq_products_images','inq_products_category','inq_docs_one'])->first();
            if(!$quotations){
                return '<h2 style="text-align:center;color:red">Requested Quotation Not Available</h2>';
            }
            $suppliers=DB::table('categories as cat')
                            ->join('product_to_category as cp','cp.category_id','=','cat.id')                 
                            ->join('supplier_products as sp','sp.product_id','=','cp.product_id')
                            ->join('users as u','u.id','=','sp.supplier_id')                                               
                            ->where('cat.parent_id',$quotations->cat_id)
                            ->groupBy('sp.supplier_id')
                            ->get([
                                'sp.supplier_id as supplier_id'
                            ]);

            $units=DB::table('product_unit')->get(['name','id']);
            $data['title']='Buying request form of '.$quotations->product_name.' | BDTDC';
            $data['description']='Complete your Purchase request form of '.$quotations->product_name.' its Quantity and  Specification while Suppliers can pass on their quotations along with its price.';
            $agent = new Agent();
            
            $device = $agent->device();
             
            if($agent->isPhone())
            {
                return View::make('frontend.mobile-view.post-buying-request',$data,compact(['quotations','units','suppliers','id']));
            }
            if($agent->isDestop())
            {
                return View::make('frontend.qoute-request.buy_request',$data,compact(['quotations','units','suppliers','id']));
            }
            if($agent->isTab())
            {
                return View::make('frontend.qoute-request.buy_request',$data,compact(['quotations','units','suppliers','id']));
            }
            else{
                return View::make('frontend.qoute-request.buy_request',$data,compact(['quotations','units','suppliers','id']));
            }
        }

        public function storeBuyRequest(Request $r)
        {
            if(!Sentinel::getUser()){
                return redirect('login')->withFlashMessage('Please sign in first.');
            }

            ini_set('date.timezone', 'UTC');

            $user_id = Sentinel::getUser()->id;
            $role = Role_user::where('user_id',$user_id)->first();
            $column = ($role->role_id == 3) ? "product_owner_id" : "buyer_id";

            $validator = Validator::make($r->all(), [
                'product_name' => 'required|max:1000',
                'quantity' => 'required|integer|max:9999999999999',
                'unit' => 'required|integer|max:9999999999999',
                'details' => 'required|max:200000',
                'attachments.*' => 'required|mimes:jpeg,bmp,png,jpg|max:50000',
                'fob' => 'max:3',
                'unit_price' => 'max:1000000000|numeric',
                'currency' => 'max:3',
                'port' => 'max:100',
                'payment_terms' => 'max:100',
                /*'agreement' => 'required|Accepted',
                'rules' => 'required|Accepted',*/
            ]);

            if ($validator->fails()) {
                return redirect('postBuyRequest/productId='.$r->get('pid'))
                            ->withErrors($validator)
                            ->withInput();
            }else{
                $input_arr = [
                'inquery_title' => $r->get('product_name'),
                'unit_id' => $r->get('unit'),
                'quantity' => $r->get('quantity'),
                'message' => $r->get('details'),
                'payment_type' => 'FOB',
                'sender' => $user_id,
                'is_RFQ' => 1,
            ];

                $inserted_inq_id = SupplierInquery::insertGetId($input_arr);
                if($inserted_inq_id){

                    $attachments = $r->file('attachments');
                    $input_arr = array();
                    if($attachments){
                        foreach ($attachments as $key => $value) {
                            $attachments_name = 'buying_request_docs_'.uniqid().'_'.uniqid().'.'.$attachments[$key]->getClientOriginalExtension();
                            $attachments[$key]->move('buying-request-docs', $attachments_name);
                            $input_arr[] = array(
                                'inquery_id' => $inserted_inq_id,
                                'docs' => $attachments_name,
                            );
                        }
                        
                        InqueryDocs::insert($input_arr);
                    }

                    $previous_ticket_val = Tickets::orderBy('id','dese')->first()->ticket_number;
                    $ticket_val_array = explode('-', $previous_ticket_val);
                    $ticket_digit = $ticket_val_array[1].$ticket_val_array[2];
                    if($ticket_digit <99999999999){
                        $ticket_digit++;
                        $ticket_digit = str_pad($ticket_digit, 11, "0", STR_PAD_LEFT);
                        $ticket_digit_1 = substr($ticket_digit, 0,4);
                        $ticket_digit_2 = substr($ticket_digit, 4);
                        $ticket_number = $ticket_val_array[0].'-'.$ticket_digit_1.'-'.$ticket_digit_2;
                    }else{
                        $ticket_str = $ticket_val_array[0];
                        $ticket_str++;
                        $ticket_number = $ticket_str.'-'.$ticket_val_array[1].'-'.$ticket_val_array[2];
                    }

                    $ticket_insert_array = [
                                            'ticket_number'=>$ticket_number,
                                            'inquiry_id'=>$inserted_inq_id,
                                            'user_id'=>$user_id,
                                            'dept_id'=>1,
                                            'priority_id'=>3,
                                            'sla'=>2,
                                            'help_topic_id'=>1,
                                            'status'=>1,
                                            'source'=>1,
                                            'created_at'=>date("Y-m-d H:i:s"),
                                            'updated_at'=>date("Y-m-d H:i:s"),
                                        ];
                    $ticket_id = Tickets::insertGetId($ticket_insert_array);

                    $ticket_thread_array = [
                                            'ticket_id'=>$ticket_id,
                                            'user_id'=>$user_id,
                                            'poster'=>'support',
                                            'title'=>$r->get('product_name'),
                                            'body'=>$r->get('details'),
                                            'created_at'=>date("Y-m-d H:i:s"),
                                            'updated_at'=>date("Y-m-d H:i:s"),
                                        ];
                    $ticket_thread_id = Ticket_Thread::insertGetId($ticket_thread_array);

                    $ticket_token_array = [
                                        'ticket_id'=>$ticket_id,
                                        'token'=>$r->get('_token'),
                                        'created_at'=>date("Y-m-d H:i:s"),
                                        'updated_at'=>date("Y-m-d H:i:s"),
                                        ];
                    $ticket_token_id = TicketToken::insertGetId($ticket_token_array);
                }else{
                    return redirect('postBuyRequest/productId='.$r->get('pid'))
                            ->withErrors("Query Couldn't Sent")
                            ->withInput();
                }
                return Redirect::to('success');
            }
        }

       /* public function test()

        {
            return View::make('fontend.Quotation.success');

        }  */
        public function sourcing_requests_info($category_id = null)
        {
            $header=PagesSeo::where('page_id',110)->first();
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;
            
            $categoryid = 0;
            $countryid = 0;
            $key = '';
            $order = 0;
            
            if($category_id){
                if(preg_match('/^\d+$/',$category_id)) {
                  $categoryid = $category_id;
                } else {
                  $search_array = explode('+..+', $category_id);
                  $categoryid = explode('==',$search_array[0])[1];
                  $countryid = explode('==',$search_array[1])[1];
                  $key = explode('==',$search_array[2])[1];
                  $order = explode('==',$search_array[3])[1];
                }
            }

            $data['categories'] = DB::table('supllier_inqueries as inq')
                                ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                ->join('categories as c','c.id','=','pc.category_id')
                                ->groupBy('c.id')
                                ->get(['c.name as cat_name','c.id as cat_id']);

            if($category_id == null){
                $query = BdtdcSupplierInquery::query();
                // $query->where('is_RFQ',1);
                $data['quotations'] = $query->orderBy('id', 'desc')->paginate(16);
            }else if(preg_match('/^\d+$/',$category_id)){
                $query = SupplierInquery::query();
                $data['quotations'] = $query->WhereHas('bdtdc_product', function($offerQuery) {
                    
                  })
                ->WhereHas('inq_products_category', function($offerQuery) use ($categoryid) {
                    $offerQuery->where('category_id', '=', $categoryid);
                  })
                // ->where('is_RFQ',1)
                ->paginate(16);
            }else{
                $query = SupplierInquery::query();


                if($key != ''){
                    $query->where('inquery_title','LIKE', '%'.$key.'%');
                }
                if($categoryid != 0){
                $query->WhereHas('inq_products_category', function($offerQuery) use ($categoryid) {
                    $offerQuery->where('category_id', '=', $categoryid);
                  });
                }
                if($countryid != 0){
                $query->WhereHas('sender_company', function($offerQuery) use ($countryid) {
                    
                    $offerQuery->where('location_of_reg', '=', $countryid);
                    
                  });
                }
                if($order != 0){
                    $query->where('quantity', '<=', $order);
                }
                // $query->where('is_RFQ',1);
                $data['quotations'] = $query->orderBy('id', 'desc')->where('active',1)->paginate(16);
                // dd($quotations);
            }

            $data['country'] = Country::where('status',1)->get();
            $data['categoryid'] = $categoryid;
            $data['countryid'] = $countryid;
            $data['key'] = $key;
            $data['order'] = $order;

            $agent = new Agent();        
            $device = $agent->device();
            // return View::make('fontend.Quotation.quote_list',$data);
                if($agent->isPhone())
                {
                   return View::make('frontend.mobile-view.quote_list',$data);

                }

                if($agent->isDestop())
                {
                   return View::make('frontend.qoute-request.quote_list',$data);
                }

                if($agent->isTab())
                {
                  return View::make('frontend.qoute-request.quote_list',$data);
                }
                else{
                  
                  return View::make('frontend.qoute-request.quote_list',$data);
                }

            
        }

        public function sourcing_requests_info_search($category_id,$country_id)
        {

            if($category_id == 'info'){
                if($country_id == 0){
                    $quotations=DB::table('bdtdc_supllier_inqueries as inq')
                                    ->join('products as p','p.id','=','inq.product_id')
                                    ->join('product_description as pd','pd.product_id','=','p.id')
                                    ->join('product_image as p_image','p_image.product_id','=','p.id')
                                    ->join('product_prices as p_price','p_price.product_id','=','p.id')
                                    ->join('product_unit as p_unit','p_unit.id','=','inq.unit_id')
                                    ->join('country_list as country','country.id','=','p.location')
                                    ->join('companies as bc','bc.user_id','=','inq.sender')
                                    // ->where('bc.location_of_reg',$country_id)
                                    ->groupBy('p_image.product_id')
                                    ->get(['inq.id','inq.quantity as pro_quantity','p.id as product_id','p_image.image','pd.name as product_name','p_unit.name as unit','country.name as country_name','p_price.product_MOQ as moq','p_price.product_FOB as fob'
                                        ]);
                }else{
                    $quotations=DB::table('supllier_inqueries as inq')
                                    ->join('products as p','p.id','=','inq.product_id')
                                    ->join('product_description as pd','pd.product_id','=','p.id')
                                    ->join('product_image as p_image','p_image.product_id','=','p.id')
                                    ->join('product_prices as p_price','p_price.product_id','=','p.id')
                                    ->join('product_unit as p_unit','p_unit.id','=','inq.unit_id')
                                    ->join('country_list as country','country.id','=','p.location')
                                    ->join('companies as bc','bc.user_id','=','inq.sender')
                                    ->where('bc.location_of_reg',$country_id)
                                    ->groupBy('p_image.product_id')
                                    ->get(['inq.id','inq.quantity as pro_quantity','p.id as product_id','p_image.image','pd.name as product_name','p_unit.name as unit','country.name as country_name','p_price.product_MOQ as moq','p_price.product_FOB as fob'
                                        ]);
                }
                
            }else{
                if($country_id == 0){
                    $quotations=DB::table('supllier_inqueries as inq')
                                    ->join('products as p','p.id','=','inq.product_id')
                                    ->join('product_description as pd','pd.product_id','=','p.id')
                                    ->join('product_image as p_image','p_image.product_id','=','p.id')
                                    ->join('product_prices as p_price','p_price.product_id','=','p.id')
                                    ->join('product_unit as p_unit','p_unit.id','=','inq.unit_id')
                                    ->join('country_list as country','country.id','=','p.location')
                                    ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                    ->join('category as c','c.id','=','pc.category_id')
                                    ->join('companies as bc','bc.user_id','=','inq.sender')
                                    // ->where('bc.location_of_reg',$country_id)
                                    ->where('c.id',$category_id)
                                    ->groupBy('p_image.product_id')
                                    ->get(['inq.id','inq.quantity as pro_quantity','p.id as product_id','p_image.image','pd.name as product_name','p_unit.name as unit','country.name as country_name','p_price.product_MOQ as moq','p_price.product_FOB as fob'
                                        ]);
                }else{
                    $quotations=DB::table('supllier_inqueries as inq')
                                    ->join('products as p','p.id','=','inq.product_id')
                                    ->join('product_description as pd','pd.product_id','=','p.id')
                                    ->join('product_image as p_image','p_image.product_id','=','p.id')
                                    ->join('product_prices as p_price','p_price.product_id','=','p.id')
                                    ->join('product_unit as p_unit','p_unit.id','=','inq.unit_id')
                                    ->join('country_list as country','country.id','=','p.location')
                                    ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                    ->join('categories as c','c.id','=','pc.category_id')
                                    ->join('companies as bc','bc.user_id','=','inq.sender')
                                    ->where('bc.location_of_reg',$country_id)
                                    ->where('c.id',$category_id)
                                    ->groupBy('p_image.product_id')
                                    ->get(['inq.id','inq.quantity as pro_quantity','p.id as product_id','p_image.image','pd.name as product_name','p_unit.name as unit','country.name as country_name','p_price.product_MOQ as moq','p_price.product_FOB as fob'
                                        ]);
                }
                
            }

            $returned_data = '';
            foreach ($quotations as $quotation) {
                $returned_data .= '<div class="col-sm-3 padding_0 product-hover" style="padding-top:10px; padding-left:10px;">';
                $returned_data .= '<a href="http://www.bdtdc.com/sourceing/view/'.$quotation->id.'" class="slidebox-item-list" style="box-shadow: none;">';
                $returned_data .= '<img style="height:260px;width:100%" class="img-responsive " src="http://www.bdtdc.com/uploads/'.$quotation->image.'" />';
                $returned_data .= '<div class="brand-logo" style="top: 230px;">';
                $returned_data .= '<img style="width: 72px;height: 45px;padding-left: 12%;" src="http://www.bdtdc.com/resources/assets/product/Details_bdtdc_logo.svg.png" />';
                $returned_data .= '</div>';
                $returned_data .= '<div class="quotation-head-cont">';
                $returned_data .= '<div class="brand-year" style="padding-left:10px;padding-right:10px;padding-top: 18px;height:58px;">';
                $returned_data .= '<a href="http://www.bdtdc.com/sourceing/view/'.$quotation->id.'"  class="brand-year16">'. substr($quotation->product_name, 0, 40) .'...</a></div>';
                $returned_data .= '<p class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3; height:32px;">';
                $returned_data .= '<span class="doller-quotation-price">$'. $quotation->fob .' </span>/ '. $quotation->unit .'</p>';
                $returned_data .= '<p class="brand-favorable" style="text-align:left;margin-left:10px; padding-top:0; padding-bottom:0;">MOQ: <span style="color:#333;">'. $quotation->moq .' '. $quotation->unit .'</span>';
                $returned_data .= '</p></div></a></div>';
            }
            echo $returned_data;
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function qutation_list(Request $request)
   {
        /*
        Status list
        ------------
            0 = all status
            1 = Pending
            2 = Approved
            3 = Rejected
            4 = Completed
            5 = Closed
        */

        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        InqueryMessage::where('status',0)->update(['status'=>1]);
        if(Sentinel::check())
        {
            $user_id = Sentinel::getUser()->id;
            $current_status = 0;
            $unread = false;
            $search_str = '';
            $search_date = 0;
            if($request->status){
                $current_status = $request->status;
            }
            if($request->unread){
                $unread = $request->unread;
            }
            if($request->search){
                $search_str = $request->search;
            }
            if($request->d){
                $search_date = $request->d;
            }

            // $bdtdc_supllier_inqueries_maker = BdtdcSupplierQuery::query();
            $bdtdc_supllier_inqueries_maker = InqueryMessage::query();
            if($unread == 'true'){
                if($unread){
                    $bdtdc_supllier_inqueries_maker->whereHas('all_quote_messages',function($subQuery) use ($user_id){
                        $subQuery->where('is_view', 0);
                        $subQuery->where('sender', '!=' , $user_id);
                    });
                }else{
                    // $bdtdc_supllier_inqueries_maker->where('is_view', 1);
                }
            }
            if($current_status){
                $bdtdc_supllier_inqueries_maker->where('status', $current_status);
            }
            if($search_str != ''){
                $bdtdc_supllier_inqueries_maker->where(function($subQ) use ($search_str){
                    $subQ->whereHas('bdtdcInquery',function($subQuery) use ($search_str){
                            $subQuery->where('inquery_title', 'LIKE','%'.$search_str.'%');
                            $subQuery->orWhereHas('inq_products_description',function($subQuery2) use ($search_str){
                                $subQuery2->where('name', 'LIKE','%'.$search_str.'%');
                            });
                    });
                    $subQ->orWhereHas('bdtdcInqueryMessageUser',function($subQuery) use ($search_str){
                        $subQuery->where(function($subQuery2) use ($search_str){
                            $subQuery2->where('first_name', 'LIKE','%'.$search_str.'%');
                            $subQuery2->orWhere('last_name', 'LIKE','%'.$search_str.'%');
                            $subQuery2->orWhereHas('companies',function($subQuery3) use ($search_str){
                                $subQuery3->WhereHas('name_string', function($subQuery4) use ($search_str){
                                    $subQuery4->where('name', 'LIKE','%'.$search_str.'%');
                                });
                            });
                        });
                    });
                });
            }
            if($search_date != 0){
                $to = date("Y/m/d");
                $from = date('Y/m/d',strtotime($to . "-$search_date days"));
                $bdtdc_supllier_inqueries_maker->whereBetween('created_at', [$from, $to]);
            }
            $bdtdc_supllier_inqueries_maker->where('sender',$user_id)->where('quote_id',0)->orderBy('id', 'desc');
            $bdtdc_supllier_inqueries = $bdtdc_supllier_inqueries_maker->paginate(15);
            $data['bdtdc_inquery_messages'] = $bdtdc_supllier_inqueries->appends(Input::except('page'));

            $quotations = SupplierQuery::with(['SupplierQueryProduct','SupplierQueryProductImage','SupplierQueryProductUnit'])->take(4)->get();

            return View::make('frontend.qoute-request.qutation-list',$data,compact('quotations','current_status','unread','search_str','search_date'));
        }
        else
        {
         return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['SCRIPT_URL']))->withFlashMessage('You must first login before accessing this page.');
        }
   }

    public function my_buyer(){
        if(Sentinel::check())
        {}
        else
        {
            return Redirect::to('login')->withFlashMessage('Please sign in first.');
        }
        $user_id = Sentinel::getUser()->id;
        // echo $user_id;
        $bdtdc_inquery_messages = InqueryMessage::where('is_quote',1)->where('sender',$user_id)->paginate(10);
        return View::make('frontend.qoute-request.my_buyer',compact('bdtdc_inquery_messages'));
   }
   public function popular_product_brand($id)
   {  
       
        $data['quotations']=DB::table('supllier_inqueries as inq')
                                ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                ->join('categories as cat','cat.id','=','pc.category_id')
                                ->join('products as p','p.id','=','inq.product_id')
                                ->join('product_description as pd','pd.product_id','=','p.id')
                                ->join('product_image as p_image','p_image.product_id','=','p.id')
                                ->join('product_prices as p_price','p_price.product_id','=','p.id')
                                ->join('product_unit as p_unit','p_unit.id','=','inq.unit_id')
                                ->join('country_list as country','country.id','=','p.location')
                                ->join('companies as c','c.user_id','=','inq.sender')
                                ->where('c.location_of_reg',$id)
                                ->groupBy('pc.category_id')
                                ->groupBy('p_image.product_id')
                                ->get(['cat.name as cat_name','cat.id as cat_id','inq.id','inq.quantity as pro_quantity','p.id as product_id','p_image.image','pd.name as product_name','p_unit.name as unit','country.name as country_name','p_price.product_MOQ as moq','p_price.product_FOB as fob'
                                    ]);
        return View::make('frontend.qoute-request.popular-product',$data);
   }
   public function extra_inquery(){
        return View::make('frontend.qoute-request.extra_inquery');
   }
    public function test()
    {
        return View::make('frontend.qoute-request.success');

    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function quote_view($id){

        if(!Sentinel::check()){
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login before accessing this page.');
        }

        $user_id = Sentinel::getUser()->id;
        $quotes = InqueryMessage::with(['bdtdcInquery','bdtdcInquery.inq_products_description','bdtdcInquery.inq_docs_one','bdtdcInquery.inq_docs','bdtdcInquery.inq_products_images_all','bdtdcInquery.p_price','bdtdcInquery.inq_unit_id','bdtdcInquery.bdtdc_product_attribute','bdtdcInquery.bdtdc_product_attribute.bdtdcAttribute','bdtdcInqueryMessageDocs','all_quote_messages'])->where('id',$id)->first();
        // dd($quotes);

        if(!$quotes){
            return '<div style="margin:0 auto;width:40%;margin-top:10%;border:1px double rebeccapurple;"><h1 style="text-align:center;color:forestgreen;">Requested product not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="/">Go to home page</a></p></div>';
        }

        if($quotes->sender == $user_id){}else{
            Sentinel::logout();
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login before accessing this page.');
        }

        $all_messages = InqueryMessage::where('inquery_id',$quotes->inquery_id)->where('product_owner_id',$user_id)->where('is_msg',1)->get();
        // dd($all_messages);
        $product_homes =HomeProduct::with(['homeProduct','homeProduct.product_name','homeProduct.product_image_new','homeProduct.product_prices','homeProduct.ProductUnit'])->where('hot_product',1)->orderByRaw('RAND()')->get();

        return view('frontend.qoute-request.quote_view',compact('quotes','all_messages','product_homes'));
   }

    
}
