<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Categories;
use App\Models\PageTabs;
use App\Models\ProductDispute;
use App\Models\Users;
use DB;
use Input;
use View;
use Sentinel;
use URL;
use App\Models\ProductImage;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\PageContentCategory;
use App\Models\PageContentDescription;
use App\Models\PagesPrefix;
use App\Models\PagesSeo;
use App\Models\SupplierInquery;
use App\Models\Products;
use App\Models\ProductDescription;
use Illuminate\Support\Facades\Redirect;
use Jenssegers\Agent\Agent;
use App\Models\Footer;

class ServiceChannelController extends Controller
{
    public function index(){
        //        
    }

    public function gethome(){
        $data['categorys'] = array();
        $categorys = DB::table('categories')->where('parent_id', '0')->get();
        foreach ($categorys as $category)
        {
            $category_children_data = array();
            $category_childrens = DB::table('categories')->where('parent_id', $category->id)->get();
            foreach ($category_childrens as $category_children)
            {
                $category_children_data[] = array(
                    'category_id' => $category_children->id,
                    'child_name' => $category_children->name
                );
            }
            $data['categorys'][] = array(
                'category_id' => $category->id,
                'name' => $category->name,
                'category_childrens' => $category_children_data
            );
        }
        return View::make('frontend.desktop-view.service-home', $data);
    }

    public function suppliers_help($id){
        $data['page_content_categorys'] = array();
        $page_content_categorys = DB::table('page_content_categories')->where('parent_id', '0')->where('page_id', $id)->get();
        dd($page_content_categorys);
        foreach ($page_content_categorys as $page_content_category)
        {
            $content_children_data = array();
            $content_childrens = DB::table('page_content_categories')->where('parent_id', $page_content_category->id)
                ->get();
            foreach ($content_childrens as $content_children)
            {
                $content_children_data[] = array(
                    'child_id' => $content_children->id,
                    'child_name' => $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                'content_id' => $page_content_category->id,
                'name' => $page_content_category->name,
                'sort_name' => $page_content_category->sort_name,
                'prefix' => $page_content_category->prefix,
                'content_childrens' => $content_children_data
            );
        }
        $bdtdc_pages_data = DB::table('pages_prefix')->where('parent_id', $id)->get();

        $tab_menus = PageTabs::where('page_id', $id)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'BuyerChannel')->get();
        $link_for_suppliers = PagesPrefix::where('active', 1)->where('prefix', 'SupplierChannel')->get();
        $page_content_title = "Buyer Channel";

        return View::make('frontend.supplier_help', $data, ['page_content_title' => $page_content_title, 'tab_menus' => $tab_menus, 'link_for_buyers' => $link_for_buyers, 'link_for_suppliers' => $link_for_suppliers, 'bdtdc_pages_data' => $bdtdc_pages_data]);
    }

    public function help_center_supplier_data($id){
        $bdtdc_pages_data = DB::table('pages_prefix')->where('parent_id', $id)->get();
        print_r($bdtdc_pages_data);
    }

    public function for_supplier_help($id){
        $supplier_help_qa = DB::table('page_content_descriptions')->where('page_id', $id)->get();

        $bdtdc_pages_parent_id = DB::table('pages_prefix')->where('sort_name', 'for_supplier')->get();
        $bdtdc_pages_data = DB::table('pages_prefix')->where('parent_id', $bdtdc_pages_parent_id[0]->id)->get();

        $data['page_content_categorys'] = array();
        $page_content_categorys = DB::table('page_content_categories')->where('parent_id', '0')
            ->where('page_id', $bdtdc_pages_parent_id[0]->id)->get();
        foreach ($page_content_categorys as $page_content_category)
        {
            $content_children_data = array();

            $content_childrens = DB::table('page_content_categories')->where('parent_id', $page_content_category->id)->get();
            foreach ($content_childrens as $content_children)
            {
                $content_children_data[] = array(
                    'child_id' => $content_children->id,
                    'child_name' => $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                'content_id' => $page_content_category->id,
                'name' => $page_content_category->name,
                'sort_name' => $page_content_category->sort_name,
                'prefix' => $page_content_category->prefix,
                'content_childrens' => $content_children_data
            );
        }

        $tab_menus = PageTabs::where('page_id', $bdtdc_pages_parent_id[0]->id)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'BuyerChannel')->get();
        $link_for_suppliers = PagesPrefix::where('active', 1)->where('prefix', 'SupplierChannel')->get();
        $page_content_title = "Buyer Channel";

        return View::make('frontend.supplier_help', $data, ['page_content_title' => $page_content_title, 'tab_menus' => $tab_menus, 'link_for_buyers' => $link_for_buyers, 'link_for_suppliers' => $link_for_suppliers, 'bdtdc_pages_data' => $bdtdc_pages_data, 'supplier_help_qa' => $supplier_help_qa]);
    }

    public function for_buyer($id){
        $data['page_content_categorys'] = array();
        $page_content_categorys = DB::table('page_content_categories')->where('parent_id', '0')->where('page_id', $id)->get();
        foreach ($page_content_categorys as $page_content_category)
        {
            $content_children_data = array();

            $content_childrens = DB::table('page_content_categories')->where('parent_id', $page_content_category->id)->get();
            foreach ($content_childrens as $content_children)
            {
                $content_children_data[] = array(
                    'child_id' => $content_children->id,
                    'child_name' => $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                'content_id' => $page_content_category->id,
                'name' => $page_content_category->name,
                'sort_name' => $page_content_category->sort_name,
                'prefix' => $page_content_category->prefix,
                'content_childrens' => $content_children_data
            );
        }
        $bdtdc_pages_data = DB::table('pages_prefix')->where('parent_id', $id)->get();
        $header = PagesSeo::where('page_id', 151)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;
        $tab_menus = PageTabs::where('page_id', $id)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'BuyerChannel')->get();
        $link_for_suppliers = PagesPrefix::where('active', 1)->where('prefix', 'SupplierChannel')->get();
        $page_content_title = "Buyer Channel";

        return View::make('frontend.contents-view-home', $data, ['page_content_title' => $page_content_title, 'tab_menus' => $tab_menus, 'link_for_buyers' => $link_for_buyers, 'link_for_suppliers' => $link_for_suppliers, 'bdtdc_pages_data' => $bdtdc_pages_data]);
    }

    public function bdtdc_faq_question(){
        $parent_cat_name = PageContentCategory::where('parent_id', 0)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'BuyerChannel')->get();
        return View::make('frontend.faq', compact('parent_cat_name', 'link_for_buyers'));
    }

    public function bdtdc_faq_supplier(){
        $parent_cat_name = PageContentCategory::where('parent_id', 0)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'SupplierChannel')->get();
        return View::make('frontend.faq-supplier', compact('parent_cat_name', 'link_for_buyers'));
    }

    public function faq_category_search(Request $request){
        $parent_category_id = $request->input('parent_category_id');
        $parent_cat_name = PageContentCategory::where('parent_id', 0)->get();
        $parent_cat = PageContentCategory::with('content_parent_cat')->where('parent_id', $parent_category_id)->get();
        return View::make('frontend.faq_category_search', compact('parent_cat', 'parent_cat_name'));
    }

    public function faq_detail($id){
        $parent_cat_name = PageContentCategory::where('parent_id', 0)->get();
        $faq_detail = PageContentCategory::with('bdtdc_content_desc')->where('id', $id)->first();
        return View::make('frontend.faq_detail', compact('parent_cat_name', 'faq_detail'));
    }

    public function category_search(Request $request){
        $category_name = $request->input('category_name');
        $parent_cat_name = PageContentCategory::where('parent_id', 0)->get();
        $parent_cat = PageContentCategory::where('name', 'LIKE', '%' . $category_name . '%')->get();
        return View::make('frontend.category_search', compact('parent_cat', 'parent_cat_name'));
    }

    public function for_supplier($id){
        $data['page_content_categorys'] = array();
        $page_content_categorys = DB::table('page_content_categories')->where('parent_id', '0')->where('page_id', $id)->get();
        foreach ($page_content_categorys as $page_content_category)
        {
            $content_children_data = array();

            $content_childrens = DB::table('page_content_categories')->where('parent_id', $page_content_category->id)->get();
            foreach ($content_childrens as $content_children)
            {
                $content_children_data[] = array(
                    'child_id' => $content_children->id,
                    'child_name' => $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                'content_id' => $page_content_category->id,
                'name' => $page_content_category->name,
                'sort_name' => $page_content_category->sort_name,
                'prefix' => $page_content_category->prefix,
                'content_childrens' => $content_children_data
            );
        }
        $bdtdc_pages_data = DB::table('pages_prefix')->where('parent_id', $id)->get();
        $tab_menus = PageTabs::where('page_id', $id)->get();
        $link_for_buyers = PagesPrefix::where('active', 1)->where('prefix', 'BuyerChannel')->get();
        $link_for_suppliers = PagesPrefix::where('active', 1)->where('prefix', 'SupplierChannel')->get();
        $page_content_title = "Buyer Channel";

        return View::make('frontend.contents-view-home', $data, ['page_content_title' => $page_content_title, 'tab_menus' => $tab_menus, 'link_for_buyers' => $link_for_buyers, 'link_for_suppliers' => $link_for_suppliers, 'bdtdc_pages_data' => $bdtdc_pages_data]);
    }

    public function for_new_user($id){
        $header = PagesSeo::where('page_id', 113)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;
        $agent = new Agent();
        $device = $agent->device();
        if ($agent->isPhone())
        {
            return View::make('frontend.mobile-view.new_user_guide_m', $data);
        }
        if ($agent->isDestop())
        {
            return View::make('frontend.new_user_guide', $data);
        }

        if ($agent->isTab())
        {
            return View::make('frontend.new_user_guide', $data);
        }
        else
        {
            return View::make('frontend.new_user_guide', $data);
        }
    }

    public function submit_a_dispute($id){
        if (Sentinel::check())
        {
            $header = PagesSeo::where('page_id', 176)->first();
            $data['title'] = $header->title;
            $data['keyword'] = $header->meta_keyword;
            $data['description'] = $header->meta_description;

            $page_content_title = 'Submit a Dispute';
            return View::make('frontend.dispute-home', $data, compact('page_content_title'));
        }
        else return Redirect::to('ServiceLogin?continue=' . URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login before accessing this page.');
    }

    public function bdtdc_service(){

        $header = PagesSeo::where('page_id', 176)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;

        $agent = new Agent();

        $device = $agent->device();

        if ($agent->isPhone())
        {
            return View::make('frontend.mobile-view.service_m', $data);
        }
        if ($agent->isDestop())
        {
            return view::make('frontend.service', $data);
        }
        if ($agent->isTab())
        {
            return View::make('frontend.mobile-view.service_m', $data);
        }
        else
        {
            return view::make('frontend.service', $data);
        }
    }

    public function report(){
        if (Sentinel::check())
        {
        }
        else
        {
            return Redirect::to('ServiceLogin?continue=' . URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login before accessing this page.');
        }
        $header = PagesSeo::where('page_id', 177)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;
        $data['user'] = Users::where('id', Sentinel::getUser()->id)->first();
        $page_content_title = 'Submit Report';
        return view('frontend.dispute-report', $data, compact('page_content_title'));
    }

    public function report_store(Request $r){
        if (Sentinel::check())
        {
            $input = $r->only('reason', 'url', 'description');
            $rules = array(
                'reason' => 'required',
                'url' => 'required',
                'description' => 'required',
            );
            $validator = Validator::make($r->all() , $rules);
            if ($validator->fails())
            {
                return redirect('submit_report')->withErrors($validator);
            }
            else $user_id = Sentinel::getUser()->id;
            $insert_data = array();
            $insert_data = array(
                'reason' => $input['reason'],
                'url' => $input['url'],
                'description' => $input['description'],
                'user_id' => $user_id
            );

            $bdtdc = DB::table('product_disputes')->insert($insert_data);
            if ($bdtdc)
            {
                return redirect('submit_report')->with('success', 'Report submitted successfully. Report will be reviewed very soon.');
            }
            else
            {
                return redirect('submit_report')->with('error', 'Error submitting report');
            }
        }
        else
        {
            return Redirect::to('ServiceLogin?continue=' . URL::to($_SERVER['HTTP_REFERER']))->withFlashMessage('You must first login before accessing this page.');
        }
    }

    /*public function file_upload($file)
    {
    
    $rules=array('file'=>'file');
       
        $validate=Validator::make(array("productfile"=>$file),$rules);
        $path="uploads";
        if($validate)
        {
            $fileOriginalName=$Image->getClientOriginalName();
            $basename = substr($fileOriginalName, 0, strrpos($fileOriginalName, "."));
            $basename=str_replace(" ", "", $basename);
            $extension =$file->getClientOriginalExtension();
            $fileName=$basename.date("YmdHis").'.'.$extension;
            $fileMoved=$file->move($path, $fileName);
            if($fileMoved)
            {
                $filePath=$path.'/'.$fileName;
                return $filePath;
            }
        }   
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(){
        //
    }
    public function third_page($id){
        $data['page_content_categorys'] = array();
        $page_content_categorys = DB::table('page_content_categories')->where('page_id', $id)->get();
        foreach ($page_content_categorys as $page_content_category)
        {
            $content_children_data = array();

            $content_childrens = DB::table('page_content_categories')->where('parent_id', $page_content_category->id)->get();
            foreach ($content_childrens as $content_children)
            {
                $content_children_data[] = array(
                    'child_id' => $content_children->id,
                    'child_name' => $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                //'name'=>$category->category_name,
                'content_id' => $page_content_category->id,
                'name' => $page_content_category->name,
                'content_childrens' => $content_children_data
            );
        }
        $tab_menus = PagesTabs::where('page_id', $id)->get();
        $page_content_title = "Service Channel";
        return View::make('frontend.contents-view-home', $data, ['page_content_title' => $page_content_title, 'tab_menus' => $tab_menus]);
    }
    public function store(){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update($id){
        //
    }

    public function destroy($id){
        //
    }

    public function verified_suppliers_info(){
        $header = PagesSeo::where('page_id', 163)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;
        $page_content_title = '';
        return View::make('frontend.contents-view-verified', $data);
    }

    public function sourcing_requests_info_buyer(){
        $categorys = DB::table('supllier_inqueries as inq')->join('bdtdc_product_to_category as pc', 'pc.product_id', '=', 'inq.product_id')
            ->join('categories as c', 'c.id', '=', 'pc.category_id')
            ->groupBy('c.id')
            ->get(['c.name as cat_name', 'c.id as cat_id']);
        $header = PagesSeo::where('page_id', 205)->first();
        $data['title'] = $header->title;
        $data['keyword'] = $header->meta_keyword;
        $data['description'] = $header->meta_description;
        $page_content_title = '';

        return View::make('frontend.sourcing_requests_info_buyer', $data, compact('categorys'));
    }

    public function sourcing_view($id){
        $query = SupplierInquery::query();
        $quotations = $query->with(['inq_docs', 'inq_docs_one', 'inq_message', 'inq_products_images', 'inq_products_images_all', 'inq_products_description', 'p_price', 'inq_unit_id', 'bdtdc_product_attribute', 'bdtdc_product_attribute.bdtdcAttribute', 'sender_company', 'sender_company.country'])->where('id', $id)->first();
        $product_id = 0;
        if ($quotations)
        {
            if ($quotations->product_id != 0 && $quotations->product_id != '' && $quotations->product_id != NULL)
            {
                $product_id = $quotations->product_id;
            }
        }
        else
        {
            return '<div style="margin:0 auto;width:23%;margin-top:10%;border:1px double rebeccapurple;"><h1 style="text-align:center;color:forestgreen;">Requested Product Not Found!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="/">Go to home page</a></p></div>';
        }

        $quotations_no = $quotations->inq_message->count();

        $supplier_count = 0;
        if ($product_id != 0)
        {
            $product_category = ProductToCategory::where('product_id', $product_id)->first();
            $supplier_count = ProductToCategory::where('category_id', $product_category->category_id)->distinct('company_id')->count('company_id');
        }
        else
        {
            $str_array = explode(' ', $quotations->inquery_title);
            foreach ($str_array as $single_val)
            {
                $supplier_count += ProductDescription::where('name', 'LIKE', '%' . $single_val . '%')->count();
            }
        }

        if ($quotations->inq_products_description)
        {
            $data['title'] = $quotations->inq_products_description->name . ' sourcing- matching buyers and suppliers | BuyerSeller';
            $data['description'] = 'Get all the trendy & hot ' . $quotations->inq_products_description->name . ' obtained from the matching Buyers and Suppliers as you add them to the Buying request while the Suppliers send their quotations.';
        }
        else
        {
            $data['title'] = $quotations->inquery_title . ' sourcing- matching buyers and suppliers | BuyerSeller';
            $data['description'] = 'Get all the trendy & hot ' . $quotations->inquery_title . ' obtained from the matching Buyers and Suppliers as you add them to the Buying request while the Suppliers send their quotations.';
        }
        $data['keyword'] = 'trendy product, product sourcing, hot products, matching buyers';

        $agent = new Agent();

        $device = $agent->device();

        if ($agent->isPhone())
        {
            return View::make('frontend.mobile-view.source-view', $data, compact(['quotations', 'images', 'product_attribute_name_value', 'quotations_no', 'supplier_count', 'suppliers', 'categorys']));
        }
        if ($agent->isDestop())
        {
            return View::make('frontend.sourcing_view', $data, compact(['quotations', 'images', 'product_attribute_name_value', 'quotations_no', 'supplier_count', 'suppliers', 'categorys']));
        }
        if ($agent->isTab())
        {
            return View::make('frontend.sourcing_view', $data, compact(['quotations', 'images', 'product_attribute_name_value', 'quotations_no', 'supplier_count', 'suppliers', 'categorys']));
        }
        else
        {
            return View::make('frontend.sourcing_view', $data, compact(['quotations', 'quotations_no', 'supplier_count']));
        }
    }

    public function sourcing_view_with_catid($id, $category_id){
        if ($category_id == "all")
        {
            $quotations = SupplierInquery::with(['inq_products_category.BdtdcCategoryDescription', 'inq_products_category.pro_parent_cat', 'inq_products_category.bdtdcCategory', 'p_price', 'inq_products_description', 'inq_unit_id'])->orderByRaw("RAND()")
                ->take(10)
                ->get();

        }
        else
        {
            $quotations = SupplierInquery::whereHas('inq_products_category', function ($var) use ($category_id)
            {
                $var->where('category_id', $category_id);
            })->with(['inq_products_category.BdtdcCategoryDescription', 'inq_products_category.pro_parent_cat', 'inq_products_category.bdtdcCategory', 'p_price', 'inq_products_description', 'inq_unit_id'])
                ->orderByRaw("RAND()")
                ->take(10)
                ->get();

        }

        $returned_data = '';

        if (count($quotations) > 0)
        {
            foreach ($quotations as $cat)
            {
                if ($cat->inq_products_category)
                {
                    if ($cat->inq_products_category->BdtdcCategoryDescription)
                    {
                        $returned_data .= '<div class="col-sm-2 cate-product-view padding_0 slidebox-item" style="padding-bottom:20px; margin-bottom:5px;">';
                        $returned_data .= '<a href="' . URL::to('product-sourcing/view') . '/' . $cat->id . '" class="" style="border:0 none;">';

                        if ($cat->inq_products_images)
                        {
                            if ($cat->inq_products_category->pro_parent_cat && $cat->inq_products_category->bdtdcCategory)
                            {
                                $returned_data .= '<img style="height:260px;width:100%;padding: 10px 5px;" class="img-responsive" src="' . URL::to('' . $cat->inq_products_images->image) . '">';
                            }
                            else
                            {
                                $returned_data .= '<img style="height:260px;width:100%;padding: 10px 5px;" class="img-responsive" src="' . URL::to('uploads') . '/no-image.jpg">';
                            }
                        }
                        else
                        {
                            $returned_data .= '<img style="height:260px;width:100%;padding: 10px 5px;" class="img-responsive" src="' . URL::to('uploads') . '/no-image.jpg">';
                        }
                        $returned_data .= '<div class="brand-year" style="padding:0;">';
                        $returned_data .= '<p style="overflow:hidden;height: auto; text-overflow: ellipsis; white-space: nowrap;" class="name-p" title="' . $cat->inq_products_description->name . '">' . substr($cat->inq_products_description->name, 0, 40) . '</p>';
                        $returned_data .= '</div>';
                        if ($cat->p_price)
                        {
                            if (trim($cat->p_price->product_FOB) != '' && trim($cat->p_price->product_FOB) != '0' && $cat->p_price->product_FOB != null)
                            {
                                $returned_data .= '<div class="dollar-price" style="padding-left:15px; padding:10px 5px 10px 15px;">FOB ';
                                if ($cat->p_price)
                                {
                                    if (trim($cat->p_price->currency) != '')
                                    {
                                        $returned_data .= $cat->p_price->currency;
                                    }
                                    else
                                    {
                                        $returned_data .= 'USD';
                                    }
                                }
                                else
                                {
                                    $returned_data .= 'USD';
                                }
                                $returned_data .= '<span class="dollar" style="font-size:12px;"> ' . $cat->p_price->product_FOB . '</span> / ';
                                if ($cat->inq_unit_id)
                                {
                                    $returned_data .= $cat->inq_unit_id->name . '</div>';
                                }
                                else
                                {
                                    $returned_data .= 'pieces</div>';
                                }
                            }
                        }
                        $returned_data .= '<a href="' . URL::to('product-sourcing/view') . '/' . $cat->id . '" type="button" class="btn btn-primary" style="border-radius:5px !important; margin-left: 50px;">View Detail</a>';
                        $returned_data .= '</a></div>';
                    }
                }
            }
        }
        return $returned_data;
    }
}
