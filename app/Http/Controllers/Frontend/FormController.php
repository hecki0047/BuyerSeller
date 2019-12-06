<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use view;
use Sentinel;
use Validator;
use Input;
use Redirect;
use Mail;
use App\Models\Sitemap;
use App\Models\ProductDescription;
use App\Models\ProductToCategory;
use App\Models\Products;
use App\Models\CompanyDescription;
use App\Models\WholesaleCategoryDescription;
use App\Models\Supplier;
use App\Models\SupplierMainProduct;
use App\Models\PagesSeo;
use App\Models\Companies;
use App\Models\SupplierInfo;
use App\Models\Tradeshow;
use App\Models\Users;
use App\Models\Customer;
use App\Models\SupplierProduct;
use App\Models\Country;
use App\Models\CompanyMainMarket;
use App\Models\LogisticInfo;
use App\Models\Role_user;
use Jenssegers\Agent\Agent;
use App\Models\BangladeshGarment;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

 
    public function manage_verification_phones()
    {
      return view('frontend.account.manage_verification_phones');
    }
    

    
    public function av_guide()
    {
      return view('frontend.account.av_guide');
    }

    public function verification()
    {
      $user_id =Sentinel::getUser()->id;
      $manage=Users::with('companies','customers')->where('id',$user_id)->first();
      return view('frontend.account.manage_verification_insert',compact('manage'));
    }

    public function verification_update(Request $request,$user_id)
    {
      $user_id =Sentinel::getUser()->id;
      $company=Companies::where('user_id',$user_id)->first(['id']);
      $company_id=$company->id;

      $update_data = array
      (
          'first_name'=>$request->first_name, 
          'last_name'=>$request->last_name,
          'department'=>$request->department,
          'email'=>$request->email,
      );
      $update_data1 = array
      (
          'city'=>$request->city,
          'region'=>$request->region,
          'company_website'=>$request->company_website,
      );

      $update_data2 = array
      (
          'telephone'=>$request->telephone,
      );

        // dd($update_data);
      DB::table('users')->where('id', $user_id)->update($update_data);
      DB::table('companies')->where('user_id', $user_id)->update($update_data1);
      DB::table('customer')->where('user_id', $user_id)->update($update_data2);
        // $manage=User::with('companies','customers')->where('id',$user_id)->update($update_data);
        // dd($manage);
      return Redirect::back();
    }

    public function manage_verification()
    {
      $user_id =Sentinel::getUser()->id;
      $manage=Users::with('companies','customers')->where('id',$user_id)->first();
      // dd($manage);
      // return $manage->companies->name_string->name;
      return view('frontend.account.application-received',compact('manage'));
    }

    public function manage_verification_insert(Request $request)
    {
      $input = $request->only(['certificate_1','certificate_2','certificate_3']);
      // dd($input);
      $user_id =Sentinel::getUser()->id;
      $company=Company::where('user_id',$user_id)->first(['id']);
      $company_id=$company->id;
      $image = $request->file('certificate_1');
              if($image){
              $destinationPath = 'test-zeo';
                  $image_name = 'test-zeo_'.uniqid().'_'.$image->getClientOriginalName();
                  $image->move($destinationPath,$image_name);
              }else{
                  $image_name = '';
              }
              // dd($image);
      
      $image1 = $request->file('certificate_2');
      if($image1){
      $destinationPath = 'test-zeo';
          $image_name1 = 'test-zeo_'.uniqid().'_'.$image1->getClientOriginalName();
          $image1->move($destinationPath,$image_name1);
      }else{
          $image_name1 = '';
      }
      // dd($image1);
     
      $image2 = $request->file('certificate_3');
      if($image2){
      $destinationPath = 'test-zeo';
          $image_name2 = 'test-zeo_'.uniqid().'_'.$image2->getClientOriginalName();
          $image2->move($destinationPath,$image_name2);
      }else{
          $image_name2 = '';
      }
      // dd($image2);
        $insert_data=array();
        $insert_data = array
        (
            'certificate_1'=>$image_name, 
            'certificate_2'=>$image_name1,
            'certificate_3'=>$image_name2,
            'company_id'=> $company_id,
        );
        // dd($insert_data);
        $manage= DB::table('company_verified')->insert($insert_data);
       return Redirect::back();
    }

    public function bangladeshi_garments()
    {   
      $tradeshow=Tradeshow::with('description')->take(2)->latest()->get();
      $supplier=BangladeshGarment::with(['bdtdcCategory','pro_name_string','cat_pro_price','BdtdcSelectedSupplier_products','BdtdcSelectedSupplier_products.ProductUnit','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                  ->where('parent_cat_id',1)->groupBy('company_id')->take(15)->get();
                  // dd($supplier);
                  $cat_products=BangladeshGarment::with(['category_name','pro_name_string','cat_pro_price','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                  ->where('parent_cat_id',1)->groupBy('cat_id')->get();
                 
       $garment_products=BangladeshGarment::with(['category_name','pro_name_string','cat_pro_price','BdtdcSelectedSupplier_products','BdtdcSelectedSupplier_products.ProductUnit','bdtdcCategory','selected_copmany','selected_copmany_name','select_product_image','select_product_images'])
                  ->where('parent_cat_id',1)
                  ->orderby('product_id','desc')
                  ->paginate(32);
      

       $header=PagesSeo::where('page_id',301)->first();

      $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description; 
       
       $agent = new Agent();
        
        $device = $agent->device();
      if($agent->isPhone())
        {
     
         return View::make('frontend.mobile-view.bangladesh-garment-m',$data,compact('supplier','tradeshow','cat_products','garment_products'));
          
        }
        if($agent->isDestop())
        {
          return View::make('bangladeshi_garments.bangladeshi_garments',$data,compact('supplier','tradeshow','cat_products','garment_products'));
        }

        if($agent->isTab())
        {
          return View::make('bangladeshi_garments.bangladeshi_garments',$data,compact('supplier','tradeshow','garment_products'));
        }
        else{
          
          return View::make('bangladeshi_garments.bangladeshi_garments',$data,compact('supplier','tradeshow','cat_products','garment_products'));
        }

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view::make('form.create');
    }

   public function bdtdc_sitemap()
    {
        $sitemap=BdtdcSitemap::with('sub_category')->where('parent_id',0)->get();
       
        /****For showroom section brand name****/
          $brand= BdtdcProduct::take(90)->get();
          // dd($brand);
          $new_brand=[];
          foreach($brand as $data)
          {
            if(in_array(trim($data->brandname),$new_brand)){
            }
            else
                {   if(trim($data->brandname)!="" && trim($data->brandname)!="N/A" && trim($data->brandname)!="0" && trim($data->brandname)!="NO" && trim($data->brandname)!="NA" && trim($data->brandname)!="n\a" && trim($data->brandname)!="SS" && trim($data->brandname)!="ss" && trim($data->brandname)!="n/a"){
                        array_push($new_brand, trim($data->brandname));
                    }
                }
            }
            $po=$new_brand;
            //dd($po);
        /****For showroom section brand name****/

        /****For supplier section main product****/
            $main_product=BdtdcSupplier::with('main_products')->offset(10)->orderby('id','DESC')->take(30)->get();
            // dd($main_product);
            $main=[];
          foreach($main_product as $data)
          {
            if($data->main_products){
            if(in_array(trim($data->main_products->product_name_1),$main)){
            }
            else
                {   if(trim($data->main_products->product_name_1)!=""){
                        array_push($main,$data->main_products->product_name_1);
                    }
                }
            }
         }
            // $main=$main_products;
            //dd($main);


            $m=BdtdcSupplier::offset(2)->take(3)->get();
            // dd($m);
            $m1=BdtdcSupplierMainProduct::take(3)->orderby('id','DESC')->get();
            // dd($m1);


        /****For supplier section main product****/

        /***For wholesale section main product****/
        $wholesale= BdtdcWholesaleCategoryDescription::take(30)->get();
        // dd($wholesale);
        /***For wholesale section main product****/
            

           $header=BdtdcPageSeo::where('page_id',101)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
        return View::make('sitemap.sitemap',$data,compact('sitemap','po','main','wholesale'));
    }

    public function bdtdc_sitemap_search(Request $r)
    {
        // $keyword = $r->keyword;

        // $search= BdtdcProductDescription::where("name", "LIKE","$keyword%")->get();
        // dd($search);
        // return View::make('sitemap.sitemap_search',compact('search'));

    } 

    public function sitemap_search($type,$keyword)
    {
        if($type=="showroom")
        {
            $keyword=$keyword;
            $search= BdtdcProductDescription::where("name", "LIKE",$keyword."%")->paginate(100);
            //dd($search);
            $brand= BdtdcProduct::all();
            return View::make('sitemap.sitemap_search',compact('search','keyword','brand'));
        }

        else if($type=="supplier")
        {
            $keyword=$keyword;
            $search= BdtdcCompanyDescription::where("name", "LIKE",$keyword."%")->paginate(100);
             //$search= BdtdcProductDescription::where("name", "LIKE",$keyword."%")->paginate(100);
            //dd($search);
            //return $search->product_name_category->supplier_info->name_string->name;
            return View::make('sitemap.supplier_sitemap',compact('search','keyword'));
        }

        else if($type=="wholesale")
        {
            $keyword=$keyword;
            $search= BdtdcWholesaleCategoryDescription::where("name", "LIKE",$keyword."%")->paginate(100);
            //dd($search);
            return View::make('sitemap.wholesale_sitemap',compact('search','keyword'));
        }


    }

    public function product_details($type,$key)
    {

         if($type=="showroom")
        {
          return "showroom";
        }
        else if($type=="supplier")
        {
              return "supplier";
        }

        else if($type=="wholesale")
        {
          return "wholesale";
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
}
