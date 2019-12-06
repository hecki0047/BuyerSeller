<?php

namespace App\Http\Controllers\Frontend;



use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Skcategory;
use App\Models\Country;
use DB;
use Input;
use View;
use App\Models\SpecialPage;
use App\Models\ProductToCategory;
use App\Models\ProductToWholesaleCategory;
use App\Models\PagesSeo;
use App\Models\Sitemap;
use App\Models\ProductDescription;
use App\Models\Products;
use App\Models\CompanyDescription;
use App\Models\WholesaleCategoryDescription;
use App\Models\Supplier;
use App\Models\SupplierMainProduct;
use App\Models\Companies;
use App\Models\SupplierInfo;
use App\Models\Tradeshow;
use App\Models\User;
use App\Models\Customer;
use App\Models\SupplierProduct;
use App\Models\CompanyMainMarket;
use App\Models\LogisticInfo;
use App\Models\Role_user;
use Jenssegers\Agent\Agent;
use App\Models\BangladeshGarment;
use App\Models\SelectedSupplier;
use App\Models\PagesPrefix;
use App\Models\Footer;



class SpecialPageController extends Controller
{
    

    public function showall($name, $id=null){
        $data['title']='Kids Fashion - Best Kids fashion products at bdtdc.com';
        $data['keyword']='kids fashion products, wholesale kids fashion, kids fashion suppliers, kids fashion factory, quality kids fashion products, global kids fashion suppliers , kids fashion factory, kids fashion importers, kids fashion exporters, kids fashion wholesalers, source kids fashion, buy kids fashion, best kids fashion products, kids fashion suppliers directory, cheap kids fashion products';
        $data['description']='Top kids fashion manufacturers at bdtdc.com brings you trendy Kids fashion products. Stay connected with verified kids fashion suppliers to try out modern kids fashion.';
        $data['specials']=SpecialPage::with(['bdtdcCategory','cat_product','cat_product.select_product_images','cat_product.select_product_image','cat_product.pro_name_string','cat_product.pro_to_cat','cat_product.pro_to_cat.bdtdcCategory','cat_product.cat_pro_price','bdtdcCategory','selected_copmany','BdtdcSelectedSupplier_products','pro_name_string'])->where('page_id',101)->groupBy('category_id')->get();
        //dd($categories);
        return View::make('contents_view.special-product-page',$data);

    }

    // public function rmg(){
    //     $data['title']='Bangladesh RMG - Top Bangladesh RMG manufacturers at bdtdc.com';
    //     $data['keyword']='Bangladesh rmg, Bangladesh readymade garments, Bangladesh rmg suppliers, Bangladesh rmg manufacturers, Bangladesh rmg exporters, Bangladesh rmg importers, Bangladesh rmg wholesalers, wholesale bangladesh rmg, source Bangladesh rmg, quality bangladesh rmg, Bangladesh rmg suppliers directory, Bangladesh rmg products, Bangladesh rmg factory';
    //     $data['description']='Bangladesh RMG are nowadays widely available. Get renowned Bangladesh RMG manufacturers at bdtdc.com. Wear top designed Bangladesh ready-made garments today.';
    //     $data['categories']=BdtdcSpecialPage::where('page_id',102)->groupBy('category_id')->get();
    //     $data['specials']=BdtdcSpecialPage::with(['bdtdcCategory','selected_copmany','BdtdcSelectedSupplier_products','pro_name_string'])->where('page_id',102)->whereHas('cat_product',function($qq){
    //     	$qq->where('page_id',102);
    //     })->groupBy('category_id')->get();
    //     //dd($categories);
    // return View::make('contents_view.special-product-page',$data);

    // }
    public function clothing(){
        $id='';
        $bg_image='bg-clothing';
        $products_arry=$garment_products=BangladeshGarment::query();
        $products_arry->whereHas('cat_product',function($offerQuery) use ($id){
            $offerQuery->groupBy('cat_id')->where('parent_cat_id',1);
        });
        $products_arry->whereHas('cat_product',function($offerQuery) use ($id){
            $offerQuery->groupBy('cat_id')->where('parent_cat_id',1);
        });
            
        $data['products']=$products_arry->get();
        $data['suppliers']=$products_arry->whereHas('col_copmany',function($offerQuery) use ($id){
            $offerQuery->where('is_gold',1)->where('location_of_reg',18);
        })->where('parent_cat_id',1)->groupBy('company_id')->get();

        $data['cats']=BangladeshGarment::with('per_cat_product')->groupBy('cat_id')->where('parent_cat_id',1)->get();

        $supplier=BangladeshGarment::with(['bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                    ->where('parent_cat_id',1)->groupBy('company_id')->get();
        $cat_products=BangladeshGarment::with(['category_name','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                    ->where('parent_cat_id',1)->groupBy('cat_id')->get();

       $garment_products=BangladeshGarment::with(['category_name','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                  ->where('parent_cat_id',1)
                  ->orderby('product_id','desc')
                  ->paginate(40);
      
        $data['title']='Bangladesh Clothing Manufacturers and Bangladesh textile industry';
        $data['keyword']='Bangladesh clothing, Bangladesh clothing manufacturers, top clothing brands in bangladesh, clothing factories in bangladesh, bangladesh textile industry, clothing manufacturers in bangladesh, made in bangladesh clothing, readymade garments in bangladesh, bangladesh fashion, bangladesh textile, bangladesh t shirt manufacturers';
        $data['description']='Find top clothing brands in Bangladesh from Bangladesh clothing manufacturers, textile industry of Bangladesh at bdtdc.com';
        $agent = new Agent();
        
        $device = $agent->device();
        if($agent->isPhone())
        {
            return View::make('frontend.buyer.sourcing-consumer',$data,compact('supplier','cat_products','garment_products'));
        }
        if($agent->isDestop())
        {
            return View::make('frontend.buyer.sourcing-consumer',$data,compact('supplier','cat_products','garment_products'));
        }

        if($agent->isTab())
        {
            return View::make('frontend.buyer.sourcing-consumer',$data,compact('supplier','garment_products','cat_products'));
        }
        else{
            return View::make('frontend.buyer.sourcing-consumer',$data,compact('supplier','cat_products','garment_products'));
        }
    }
    //   public function rmg(){
    //     //dd($name);
    //     $id='';
    //     $bg_image='bg-rmg';
    //     $products_arry=$garment_products=BdtdcBangladeshGarment::query();
    //         $products_arry->whereHas('cat_product',function($offerQuery) use ($id){
    //                 $offerQuery->groupBy('cat_id')->where('parent_cat_id',1);
    //         });
    //         $products_arry->whereHas('cat_product',function($offerQuery) use ($id){
    //                 $offerQuery->groupBy('cat_id')->where('parent_cat_id',1);
    //         });
            
    //         $data['products']=$products_arry->get();
    //          $data['suppliers']=$products_arry->whereHas('col_copmany',function($offerQuery) use ($id){
    //                 $offerQuery->where('is_gold',1)->where('location_of_reg',18);
    //         })->where('parent_cat_id',1)->groupBy('company_id')->get();
    //         // dd($supplierss);


    //         $data['cats']=$products_arry->with('per_cat_product')->groupBy('cat_id')->where('parent_cat_id',1)->get();
    //         // return $products->cat_product;

    //   $supplier=BdtdcBangladeshGarment::with(['bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
    //               ->where('parent_cat_id',1)->groupBy('company_id')->get();
    //               // dd($supplier);
    //               $cat_products=BdtdcBangladeshGarment::with(['category_name','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
    //               ->where('parent_cat_id',1)->groupBy('cat_id')->get();

                 

    //    $garment_products=BdtdcBangladeshGarment::with(['category_name','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
    //               ->where('parent_cat_id',1)
    //               ->orderby('product_id','desc')
    //               ->paginate(40);
      
    //               //dd($garment_products);

    //   $data['title']='Bangladesh RMG - Top Bangladesh RMG manufacturers at bdtdc.com';
    //     $data['keyword']='Bangladesh rmg, Bangladesh readymade garments, Bangladesh rmg suppliers, Bangladesh rmg manufacturers, Bangladesh rmg exporters, Bangladesh rmg importers, Bangladesh rmg wholesalers, wholesale bangladesh rmg, source Bangladesh rmg, quality bangladesh rmg, Bangladesh rmg suppliers directory, Bangladesh rmg products, Bangladesh rmg factory';
    //     $data['description']='Bangladesh RMG are nowadays widely available. Get renowned Bangladesh RMG manufacturers at bdtdc.com. Wear top designed Bangladesh ready-made garments today.';
    //    //return View::make('mobile-view.country-product.bangladesh-garment-m',$data,compact('supplier','tradeshow'));
    //    $agent = new Agent();
        
    //     $device = $agent->device();
    //   if($agent->isPhone())
    //     {
     

    //        return View::make('mobile-view.country-product.bangladesh-garment-m',$data,compact('supplier','cat_products','garment_products'));
    //     }
    //     if($agent->isDestop())
    //     {
    //       return View::make('fontend.buyer.sourcing-consumer',$data,compact('supplier','cat_products','garment_products'));
    //     }

    //     if($agent->isTab())
    //     {
    //       return View::make('bangladeshi_garments.bangladeshi_garments',$data,compact('supplier','garment_products'));
    //     }
    //     else{
          
    //       return View::make('fontend.buyer.sourcing-consumer',$data,compact('supplier','cat_products','garment_products'));
    //     }
    // }

    public function footware(){
        $c_id=18;
        $data['bg_images']='assets/frontend/images/country-images/top-slider-img.jpg';
        $data['page_name']='Bangladesh Footware';
        $data['product_categorys']=Skcategory::with(['parent_cat_pro','parent_cat_pro.category_product_name','parent_cat_pro.pro_images_new','parent_cat_pro.cat_pro_price','parent_cat_pro.bdtdcProduct.ProductUnit','parent_cat_pro'=>function($q) use($c_id){
                                $q->orderBy('product_id','DSC')
                                ->where('country_id',$c_id);
                            }])
                            ->where('parent_id',4)
                            ->get();

        $country=Countries::with(['country_for_image','country_image_one'])->where('id',$c_id)->first();
        $header=PagesSeo::where('page_id',305)->first();
        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }

        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 
        $parent_name=Skcategory::where('id',4)->first();

        $agent = new Agent();        
        $device = $agent->device();

        if($agent->isPhone())
        {
            return view::make('frontend.mobile-view.bangladesh-footware',$data,compact(['country','header','cat_name_array','parent_name']));
        }
        if($agent->isDestop())
        {
            return view::make('frontend.category-product-view',$data,compact(['section','country','header','cat_name_array','parent_name']));
        }

        if($agent->isTab())
        {
            return view::make('frontend.category-product-view',$data,compact(['section','country','header','cat_name_array','parent_name']));
        }
        else{
            return view::make('frontend.category-product-view',$data,compact(['country','header','cat_name_array','parent_name']));
        }
    }
    public function frozen_food(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;

        $data['bg_image']='frozen';
   
        $c_id=18;
        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->groupBy('id')->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->orderBy('name','asc')
                                                        //->where('single_image',1)
                                                        ->get();
                                                    },'supp_pro_company'])
                                                ->whereIn('category_id',[69,86,81,76,83,494])
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

        $data['categorys']=$products_arry->whereIn('category_id',[69,86,81,76,83,494])
                                        ->whereNotIn('parent_id',[0])
                                        ->groupBy('category_id')
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['primium']=$products_arry->whereIn('category_id',[69,86,81,76,83,494])
                                        ->whereNotIn('parent_id',[0])
                                        ->take(5)
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['page_name']='Bangladesh Frozen Food and Beverage';
        $data['categoryid']=303;
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',303)->first();

        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
        
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 

        $agent = new Agent();
        
        $device = $agent->device();
          
        if($agent->isPhone())
        {
            return view('frontend.mobile-view.buyer-choise-product',$data,compact(['header','cat_name_array']));
        }
        if($agent->isDestop())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }

        if($agent->isTab())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }
        else{
            return view('frontend.buyer.buyer-choise',$data,compact(['header','cat_name_array']));
        }
    }
    public function tea_coffee(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;
        $data['bg_image']='tea';
        $c_id=18;

        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->groupBy('id')->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->orderBy('name','asc')
                                                        //->where('single_image',1)
                                                        ->get();
                                                    },'supp_pro_company'])
                                                ->whereIn('category_id',[85,75])
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

        $data['categorys']=$products_arry->whereIn('category_id',[85,75])
                                        ->whereNotIn('parent_id',[0])
                                        ->groupBy('category_id')
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['primium']=$products_arry->whereIn('category_id',[85,75])
                                        ->whereNotIn('parent_id',[0])
                                        ->take(5)
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['page_name']='Bangladesh Tea, Coffee and Beverage';
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['categoryid']=85;
        $country=
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PageSeo::where('page_id',309)->first();

        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
        
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 

        return view('frontend.buyer.buyer-choise',$data,compact(['country','header','cat_name_array']));
    }

    public function furniture(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;
        $data['page_name']='Bangladesh Furniture';
        $data['bg_image']='furniture';
        $c_id=18;

        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->groupBy('id')->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->orderBy('name','asc')
                                                        //->where('single_image',1)
                                                        ->get();
                                                    },'supp_pro_company'])
                                                ->where('parent_id',7)
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

                  $data['categorys']=$products_arry->where('parent_id',7)
                                                ->whereNotIn('parent_id',[0])
                                                ->orderByRaw("RAND()")
                                                ->groupBy('category_id')
                                                ->get();

                $data['primium']=$products_arry->where('parent_id',7)
                                                ->whereNotIn('parent_id',[0])
                                                ->take(5)
                                                ->orderByRaw("RAND()")
                                                ->get();

        $data['page_name']='Bangladesh Furniture';
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['categoryid']=7;
       
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',308)->first();

        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 

        return view('frontend.buyer.buyer-choise',$data,compact(['header','cat_name_array']));
    }

    public function jute(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;

        $data['bg_image']='jute';
        
        $c_id=18;
        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->groupBy('id')->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->orderBy('name','asc')
                                                        //->where('single_image',1)
                                                        ->get();
                                                    },'supp_pro_company'])
                                                ->whereIn('category_id',[473,475])
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

        $data['categorys']=$products_arry->whereIn('category_id',[473,475])
                                        ->whereNotIn('parent_id',[0])
                                        ->groupBy('category_id')
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['primium']=$products_arry->whereIn('category_id',[473,475])
                                        ->whereNotIn('parent_id',[0])
                                        ->take(5)
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['page_name']='Bangladesh Jute';
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['categoryid']=1;
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',306)->first();

        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 
        $agent = new Agent();
        
        $device = $agent->device();
        if($agent->isPhone())
        {
            return view('frontend.mobile-view.buyer-choise-product',$data,compact(['header','cat_name_array']));
        }
        if($agent->isDestop())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }

        if($agent->isTab())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }
        else{
            return view('frontend.buyer.buyer-choise',$data,compact(['header','cat_name_array']));
        }
    }

    public function rmg(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;

        $data['bg_image']='rmg';
       
        $c_id=18;
        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')
                                                        //->take(5)
                                                        ->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->groupBy('id')->get();
                                                    },'supp_pro_company'])
                                                ->whereIn('parent_id',[1])
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

        $data['categorys']=$products_arry->whereIn('parent_id',[1])
                                        ->whereNotIn('parent_id',[0])
                                       ->groupBy('category_id')
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['primium']=$products_arry->whereIn('parent_id',[1])
                                        ->whereNotIn('parent_id',[0])
                                        ->take(5)
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['page_name']='Bangladesh RMG';
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['categoryid']=1;
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',300)->first();
        if($header){
            $name_combination=$header->name;

            $cat_name_array = explode(',', $header->meta_keyword);
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $agent = new Agent();
        
        $device = $agent->device();
        if($agent->isPhone())
        {
            return view('frontend.mobile-view.buyer-choise-product',$data,compact(['section','country','header','cat_name_array']));
        }
        if($agent->isDestop())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }

        if($agent->isTab())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }
        else{
            return view('frontend.buyer.buyer-choise',$data,compact(['header','cat_name_array']));
        } 
    }

    public function leather(){
        $categoryid = 0;
        $data['countryid'] = 0;
        $data['buyer_protection'] = false;
        $data['gold_supplier'] = false;
        $data['assessed_supplier'] = false;
        $data['bg_image']='leather';
        $c_id=18;
        $products_arry=ProductToCategory::query();
        $products_arry->with(['bdtdcCategory','pro_to_cat_name','pro_images_new','supp_pro_company_name','bdtdcProduct','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit']);
        $data['products']=$products_arry->with(['most_view_category','pro_images','pro_images_new','parent_product'=>function($pp)
                                                    {
                                                        $pp->groupBy('company_id')->get();
                                                    },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                                    $q->groupBy('id')->get();
                                                    },'category_product_id','pro_parent'=>function($q){
                                                        $q->orderBy('name','asc')
                                                        //->where('single_image',1)
                                                        ->get();
                                                    },'supp_pro_company'])
                                                ->whereIn('parent_id',[2])
                                                ->whereNotIn('parent_id',[0])
                                                ->paginate(32);

        $data['categorys']=$products_arry->whereIn('parent_id',[2])
                            ->whereNotIn('parent_id',[0])
                            ->groupBy('category_id')
                            ->orderByRaw("RAND()")
                            ->get();

        $data['primium']=$products_arry->whereIn('parent_id',[2])
                                        ->whereNotIn('parent_id',[0])
                                        ->take(5)
                                        ->orderByRaw("RAND()")
                                        ->get();

        $data['page_name']='Bangladesh leather';
        $data['country']=Country::with('country_region')->where('region_id',1)->get();
        $data['categoryid']=2;
        $data['bdtdc_country_list']=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',307)->first();
        if($header){
            $name_combination=$header->name;
            $cat_name_array = explode(',', $header->meta_keyword);
        
            if(count($cat_name_array) > 0){
                foreach ($cat_name_array as $cat_name_value) {
                    if(trim($cat_name_value) == ''){
                    }
                    else{
                        if($cat_name_value == 's'){
                            $name_combination .= $cat_name_value;
                        }else{
                            $name_combination .= ''.$cat_name_value;
                        }
                    }
                }
            }
        }
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description; 
        $agent = new Agent();        
        $device = $agent->device();
        if($agent->isPhone())
        {
            return view('frontend.mobile-view.buyer-choise-product',$data,compact(['section','country','header','cat_name_array']));
        }
        if($agent->isDestop())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }

        if($agent->isTab())
        {
            return view('frontend.buyer.buyer-choise',$data,compact(['section','country','header','cat_name_array']));
        }
        else{
            return view('frontend.buyer.buyer-choise',$data,compact(['header','cat_name_array']));
        }
    }
}
