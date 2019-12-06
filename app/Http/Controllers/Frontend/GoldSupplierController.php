<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Users;
use App\Models\Companies;
use App\Models\Customer;
use App\Models\SupplierPackageDescription;
use App\Models\SupplierPackage;
use App\Models\SupplierInfo;
use App\Http\Requests\LoginFormRequest;
use Carbon\Carbon;
use App\Http\Controllers\TempUser;
use App\Models\PagesPrefix;
use App\Models\PagesSeo;
use App\Models\TradeshowDescription;
use DB;
use view;
use Sentinel;
use Validator;
use Input;
use Redirect;
use Mail;
use Route;
use App\Models\Role_user;
use Session;
use Stripe;
/** Paypal Details classes **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;

class GoldSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $api_context;
/** 
    ** We declare the Api context as above and initialize it in the contructor
    **/
    public function __construct()
    {
        $this->api_context = new ApiContext(
            new OAuthTokenCredential(config('paypal.client_id'), config('paypal.secret'))
        );
        $this->api_context->setConfig(config('paypal.settings'));
    }
    public function index()
    {
        //
        /*$golds=BdtdcCompany::with(['country','users','customers'])->get();
         //return $golds->country;
        $suppliers=BdtdcSupplierPackage::with('descriptions')->get();
        //return $suppliers;
        return view('goldsupplier.success',['golds'=>$golds,'suppliers'=>$suppliers]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($form_id)
    {
        //
        if(Sentinel::check())
        {
            $user_id =Sentinel::getUser()->id;
            $company =Companies::where('user_id',$user_id)->first(['id']);
            $id=$company->id;
            $today =Carbon::now();
            $membership_info=SupplierInfo::where('end_date','>=',$today)->where('company_id',$id)->latest()->first();
            // dd($membership_info->membership_pakacge_id);
            if($membership_info){
                if(($membership_info->membership_pakacge_id) ==1)
                {
                    session()->flash('up_msg', 'You already gold member!!!');
                    return redirect()->route('dashboard')->withFlashMessage('You already gold member.');
                    }
                
                else if(($membership_info->membership_pakacge_id) ==2 || 3){
                    session()->flash('up_msg', 'Upgrade it to superior!!!');
                }   
                }       
                $golds=Companies::with(['country','users','customers'])->where('id', $id)->first();
            // dd($golds);
            $suppliers=SupplierPackage::with('descriptions')->get();
            //return $suppliers;
            $supplier_memberships=SupplierPackage::with('descriptions')->get();

            return view('frontend.supplier.goldsupplier-create',['golds'=>$golds,'suppliers'=>$suppliers,'form_id'=>$form_id,'supplier_memberships'=>$supplier_memberships,'company_id'=>$id]);  
            
        }
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!Sentinel::getUser()){
            return 0;
        }else if(Sentinel::getUser()){
            return 1;
        }else{
            
        }

        // $input = $request->only(['first_name', 'last_name','email','name','city','region','zip_code','telephone','fax']);
        //dd($input);
        // $first_name=$input['first_name'];
        //dd($first_name);

        // $suppliers=$request->only('supplier_package_name');
        
        //dd($input,$suppliers);
         //return $suppliers;

        // $user=User::where('first_name',$first_name)->first();
        //return $user;
        // $user_id=$user->id;
        
        // $supp=BdtdcSupplierPackageDescription::where('id',$suppliers)->first();
        //return $supp;
        //return $user_id;
        //return $suppliers;
       
        // $update=DB::table('bdtdc_suppliers')
        //        ->where('user_id',$user_id)
        //        ->update(array('supplier_package_id' => $request->supplier_package_name));
        
       
        // $update1=DB::table('users')
        //         ->where('id',$user_id)
        //         ->update(array('first_name' => $request->first_name,'last_name' => $request->last_name));

        // $update2=DB::table('bdtdc_companies')
        //         ->where('user_id',$user_id)
        //         ->update(array('city'=>$request->city,'region'=>$request->region,'zip_code'=>$request->zip_code));

        // $update3=DB::table('bdtdc_customer')
        //         ->where('user_id',$user_id)
        //         ->update(array('telephone'=>$request->telephone,'fax'=>$request->fax));

        

        // return view('goldsupplier.success',compact('user','supp'));
    }
    public function store_data(Request $request)
    {
        if(!Sentinel::getUser()){
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }

        $rules = array(
            'payment_method'         => 'required',
            'membership_duration'    => 'required',                       
            'company_id'             => 'required',    
            'supplier_package_name'  => 'required',
            'membership_id'          => 'required',
            'amount'          => 'required'           
        );
        // dd($rules);
        $validator = Validator::make($request->all(), $rules);
        // dd($validator);
        if ($validator->fails()) {
            return 2;
                        
        }
        $amount=$request->input('amount');
        //dd($amount);
        if($request->input('payment_method')=='VISA'){
            $tokensource = $request->stripeToken;
            $payment = $this->StripePayment($tokensource,$amount);
        }
        // $year = $request->input('membership_duration');
        // $bdtdc_suppliers_info_insert = array(
        //     'company_id' => $request->input('company_id'),
        //     'member_id' => $request->input('membership_id'),
        //     'membership_pakacge_id' => $request->input('supplier_package_name'),
        //     'membership_year' => $request->input('membership_duration'),
        //     'start_date' => date("Y-m-d H:i:s"),
        //     'end_date' => date('Y-m-d H:i:s', strtotime('+'.$year.' year')),
        //     );
        // if(DB::table('bdtdc_suppliers_info')->insert($bdtdc_suppliers_info_insert))
        // {
        //     return 1;
        // }else{
            return 0;
        
    }
    public function paypalpayment($amount)
    {
        // Amount received as request is validated here.
        $pay_amount = $amount;
// We create the payer and set payment method, could be any of "credit_card", "bank", "paypal", "pay_upon_invoice", "carrier", "alternate_payment". 
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
// Create and setup items being paid for.. Could multiple items like: 'item1, item2 etc'.
        $item = new Item();
        $item->setName('Paypal Payment')->setCurrency('EUR')->setQuantity(1)->setPrice($pay_amount);
// Create item list and set array of items for the item list.
        $itemList = new ItemList();
        $itemList->setItems(array($item));
// Create and setup the total amount.
        $amount = new Amount();
        $amount->setCurrency('EUR')->setTotal($pay_amount);
// Create a transaction and amount and description.
        $transaction = new Transaction();
        $transaction->setAmount($amount)->setItemList($itemList)
        ->setDescription('Laravel Paypal Payment Tutorial');
        //You can set custom data with '->setCustom($data)' or put it in a session.
// Create a redirect urls, cancel url brings us back to current page, return url takes us to confirm payment.
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('confirm-payment'))
        ->setCancelUrl(url()->current());
// We set up the payment with the payer, urls and transactions.
        // Note: you can have different itemLists, then different transactions for it.
        $payment = new Payment();
        $payment->setIntent('Sale')->setPayer($payer)->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
// Put the payment creation in try and catch in case of exceptions.
        try {
            $payment->create($this->api_context);
        } catch (PayPalConnectionException $ex){
            return back()->withError('Some error occur, sorry for inconvenient');
        } catch (Exception $ex) {
            return back()->withError('Some error occur, sorry for inconvenient');
        }
// We get 'approval_url' a paypal url to go to for payments.
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
// You can set a custom data in a session
        // $request->session()->put('key', 'value');;
// We redirect to paypal tp make payment
        if(isset($redirect_url)) {
            return redirect($redirect_url);
        }
// If we don't have redirect url, we have unknown error.
        return redirect()->back()->withError('Unknown error occurred');
    }
/**
    ** This method confirms if payment with paypal was processed successful and then execute the payment, 
    ** we have 'paymentId, PayerID and token' in query string.
    **/
    public function confirmPayment(Request $request)
    {
        // If query data not available... no payments was made.
        if (empty($request->query('paymentId')) || empty($request->query('PayerID')) || empty($request->query('token')))
            return redirect('/checkout')->withError('Payment was not successful.');
// We retrieve the payment from the paymentId.
        $payment = Payment::get($request->query('paymentId'), $this->api_context);
// We create a payment execution with the PayerId
        $execution = new PaymentExecution();
        $execution->setPayerId($request->query('PayerID'));
// Then we execute the payment.
        $result = $payment->execute($execution, $this->api_context);
// Get value store in array and verified data integrity
        // $value = $request->session()->pull('key', 'default');
// Check if payment is approved
        if ($result->getState() != 'approved')
            return redirect('/checkout')->withError('Payment was not successful.');
return redirect('/checkout')->withSuccess('Payment made successfully');
    }

    public function StripePayment($tokensource,$amount){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $tokensource,
                "description" => "Test payment from buyerseller.asia." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

   public function executive()
   {
        return view('frontend.suppliers.executive');

   }
    public function application_received()
   {
        return view('frontend.suppliers.application-received');

   }
    public function trading_agent_bdtdc()
   {
        $header=PagesSeo::where('page_id',210)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        // $users=DB::table('users')->offset(62)->take(100)->get();
        // dd($users);
        $users=Role_user::with('user')->where('role_id',5)->get();
        // dd($users);
        // return $users->user->company->companymainmarket->main_market->name;
        // dd($users->user->company->companymainmarket->main_market->name);
        return view('frontend.contents-view.trading-agent',$data,compact('users'));

   }
    public function trading_agent_details($company_name, $company_id)
   {   
    // dd($company_id);
    // $company_id=$company->id;
    // dd($company_id);

    $agent_user=Role_user::with('user')->where('role_id',5)->get();
    // $users=Role_user::with('user')->where('company_id',$company_id)->first();
    // dd($users);
    $users=Companies::with('users','bdtdc_main_market')->where('id',$company_id)->first();
    // dd($users->bdtdc_main_market->company_main_market->name);
    return view('frontend.contents-view.trading-agent-details',compact('users','agent_user'));

   }
   public function individual_product()
   {
        return view('frontend.contents-view.market-individual-product');

   }
    public function extra_inquiries()
   {
        return view('frontend.contents-view.extra-inquiries');

   }
   public function bdtdc_agencies()
   {
    //return 232;
    $data['pages']=PagesPrefix::all();
        $data['title']='Largest Bangladeshi Suppliers, Manufacturers, Exporters &amp Director';
        $data['keyword']="Find the Latest Reliable Apparel, Textiles &amp; Accessories Manufacturers, Suppliers, Exporters, Importers, Buyers, Wholesalers, Products and Trade Leads from Bangladesh";
        $data['description']="Suggestion: Bangladesh Manufacturers, Exporters, Importers, Products, Trade Leads, Suppliers, Manufacturer, Exporter, Importer, suppliers directory, Bangladeshi Suppliers, Marketplace Bangladesh, business e-commerce, business listings, business website, business marketplace, companies business listings, directory of Bangladeshi companies, exporter importer directory, exporters business directory, online business directory, manufacturers directory";
        return view('errors.bdtdc-agencies',$data);

   }

   public function trade()
   {
        $header=PagesSeo::where('page_id',206)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view('details.trade',$data);

   }

   public function show_list($id){
       $suppliers = DB::table('users as u')
            ->join('suppliers as s','s.user_id','=','u.id')
            ->join('supplier_products as sp','sp.supplier_id','=','u.id','left')
            ->join('product_description as pd','pd.product_id','=','sp.product_id','left')
            ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
            ->join('companies as c','c.user_id','=','u.id','left')
            ->join('company_descriptions as c_description','c_description.company_id','=','c.id','left')
            ->join('country_list as country','country.id','=','c.location_of_reg','left')
            ->join('company_trade_info as ti','ti.company_id','=','c.id','left')
            ->join('form_values as fv','fv.id','=','ti.anual_sales_volume','left')
            ->groupby('pi.product_id')
            ->where('country.id',18)         
            ->orderby('u.id','ASC')
            ->take(200)
            ->get(['u.id','u.email','u.first_name','u.last_name','sp.product_id','c.id as company_id','c_description.name as company_name',
                'country.name as country','fv.value as anual_sales_volume',
                'pd.name as product_name','pi.image',
            ]);
        $supplier_arr = [];
        $i=0;
        foreach($suppliers as $s){
            $next_id = (isset($suppliers[$i+1])) ? $suppliers[$i+1]->id : "0" ;
            if($next_id != $s->id){
                $supplier_arr[$i]['id']             = $s->id;
                $supplier_arr[$i]['name']           = $s->first_name;
                $supplier_arr[$i]['company_id']     = $s->company_id;
                $supplier_arr[$i]['company_name']   = $s->company_name;
                $supplier_arr[$i]['country']        = $s->country;
                $supplier_arr[$i]['revanue']        = $s->anual_sales_volume;
                $j = 0;
                $product_arr = [];
                $main_market =[];
                foreach($suppliers as $sp){
                    if($s->id == $sp->id){
                        if($sp->product_id !== null){
                            $product_arr[$j]['product_id']      = $sp->product_id;
                            $product_arr[$j]['product_name']    = $sp->product_name;
                            $product_arr[$j]['product_image']   = $sp->image;
                        }
                        $j++;
                    }
                }
                $supplier_arr[$i]['product'] = $product_arr;
            }
            $i++;
        }
            $search_str = 'key';
            $searched_on = 'key';
            $main_market_status = $this->main_market_status();
            //dd($main_market_status);
            $revanue = $this->revanue();
            $total_employe = $this->total_employe();
            $header=PagesSeo::where('page_id',173)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;

            return View::make('frontend.supplier.bangladesh_supplier',$data,compact('supplier_arr','main_market_status','revanue','total_employe','searched_on','search_str'));
       
        //return View::make('',['supplier_arr'=>$supplier_arr]);

        //  $suppliers =[];
        // $i=0;
        // foreach($supplier_arr as $r){
        //     $suppliers[$i]['id']             = $r->user_id;
        //     $suppliers[$i]['name']           = $r->supplier_name;
        //     $suppliers[$i]['company_id']     = $r->company_id;
        //     $suppliers[$i]['company_name']   = $r->company_name;
        //     $suppliers[$i]['country']        = $r->country;
        //     $suppliers[$i]['revanue']        = $r->anual_sales_volume;
        //     $p_arr = DB::table('bdtdc_supplier_products as sp')
        //         ->join('bdtdc_product_description as pd','pd.product_id','=','sp.product_id','left')
        //         ->join('bdtdc_product_image as pi','pi.product_id','=','pd.product_id','left')
        //         ->where('sp.supplier_id',$r->user_id)
        //         ->groupBy('pi.product_id')
        //         ->take(3)
        //         ->get(['pd.name as product_name','pi.image','pd.product_id']);
        //     $j = 0;
        //     $product_arr =[];
        //     foreach($p_arr as $sp){
        //         $product_arr[$j]['product_id']      = $sp->product_id;
        //         $product_arr[$j]['product_name']    = $sp->product_name;
        //         $product_arr[$j]['product_image']   = $sp->image;
        //         $j++;
        //     }
        //     $suppliers[$i]['product']        = $product_arr;
        //     $i++;
        // }

        // return $suppliers;

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userguide()
    {
           $header=PagesSeo::where('page_id',161)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;

        return View::make('frontend.contents-view.buyer_guide',$data);
    }

    public function main_market_status()
    {
        return  DB::select(DB::raw(
            "SELECT main_market.main_market_zone as main_market_zone_id,
                            count(main_market.main_market_zone) as number_of_used_by_company,
                            fv.value as market_name
                    FROM `bdtdc_company_main_markets` as main_market
                    JOIN `bdtdc_form_values` as fv on fv.id=main_market.main_market_zone
                    GROUP BY main_market.main_market_zone"
        ));
    }
    public function revanue()
    {
        return  DB::select(DB::raw(
            "SELECT ti.anual_sales_volume as revanue_id,
                        count(ti.anual_sales_volume) as number_of_used,
                        fv.value revanue_name
                    FROM `company_trade_info` as ti
                    JOIN `form_values` as fv ON fv.id = ti.anual_sales_volume
                    GROUP BY ti.anual_sales_volume"
        ));
    }
    public function total_employe()
    {
        return DB::select(DB::raw(
            "SELECT c.total_employe as total_employe_id,fv.value as total_employe,count(c.total_employe) as number_of_use
            FROM `companies` as c
            JOIN `form_values` as fv ON fv.id = c.total_employe
            WHERE c.total_employe >0
            GROUP BY c.total_employe"
        ));
    }

    public function buyer_supplier_info()
    {
        $header=PagesSeo::where('page_id',174)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        return view::make('frontend.buyer.buyer-supplier-info',$data);
    }
    public function wholesale_bdtdc_user_guide()
    {
        $header=PagesSeo::where('page_id',171)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.contents-view.wholesale-user-guide',$data);
    }
    public function buyer_protection()
    {
        return view::make('frontend.contents-view.globalmarket-buyer-protection');
    }
    public function overseasstock_product()
    {
        return view::make('frontend.contents_view.stock-product');
    }
    public function company_home()
    {
        return view::make('frontend.contents_view.company-home');
    }
    public function wholesale_bdtdc($id)
    {
        $products = DB::table('product_to_category as cat')
            ->join('products as p','p.id','=','cat.product_id')
            ->join('product_description as pd','pd.product_id','=','p.id')
            ->join('supplier_products as sp','sp.product_id','=','p.id')
            ->join('users as u','u.id','=','sp.supplier_id')
            ->join('categories as cat_name','cat_name.id','=','cat.category_id')
            ->join('companies as company','company.user_id','=','u.id')
            ->join('company_descriptions as company_description','company_description.company_id','=','company.id')
            ->join('customer as cus','cus.user_id','=','u.id')
            ->join('suppliers as s','s.user_id','=','u.id')
            ->join('product_image as p_image','p_image.product_id','=','p.id','left')
            ->join('country_list as country','country.id','=','company.location_of_reg','left')
            ->join('busines_types as busines_type','busines_type.id','=','s.busines_type_id')
            ->join('company_trade_info as trade','trade.company_id','=','company.id','left')
            ->join('form_values as key_word','key_word.id','=','trade.anual_sales_volume','left')
            ->join('product_unit as unit','unit.id','=','p.unit_type_id')
            ->join('product_prices as bdprice','bdprice.product_id','=','p.id','left')
            ->join('country_list as origin','origin.id','=','p.location','left')
            ->where('cat.category_id',$id)
             //->orWhere('cat_name.parent_id',$id)
             ->groupBy('p_image.product_id')
            ->get([
                'p.id','pd.name as product_name','p_image.image as images','sp.supplier_id','cat_name.name as cattegory_name',
                'u.first_name','company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date'
                ,'country.name as country_name','unit.name as unit_name','origin.name as p_origin','p.brandname as brandname','bdprice.product_MOQ','bdprice.product_FOB'
            ]);

           //dd($products);
           
        //return view::make('contents_view.wholesale_bdtdc');
    }
    public function contact_message()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        return view::make('frontend.contents-view.contact_message',$data);
    }
    public function contact_message_store(Request $r)
    {
        $rules = array(
            'name'              => 'required',                       
            'email'             => 'required|email',    
            'subject'           => 'required',
            'message'           => 'required'          
        );
        $validator = Validator::make($r->all(), $rules);
        if ($validator->fails()) {
            return redirect('contact_message_form')
                        ->withErrors($validator);
                        
        }else{
            $input = $r->only('name','email','subject','message');
            //dd($input);

            $data=array();
            $data = array
            (
                'name'=>$input['name'],
                'email'=> $input['email'],
                'subject'=> $input['subject'],
                'message'=> $input['message'],
                
            ); 
           
          
           
           
            $ww=Mail::send('email.welcome', ['data'=>$data], function($message) use ($data) {
            $message->to('info@buyerseller.asia')
                    ->from($data['email'])
                    ->subject($data['subject']);
            });
            //return 11;
            return view::make('frontend.contents_view.contact_message_success');
            
        }    
    }    
}
