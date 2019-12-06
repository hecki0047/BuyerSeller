<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Model\Categories;
use App\Model\PageTabs;
use DB;
use Input;
use View;
use Sentinel;
use Redirect;
use App\Models\PageContentDescription;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\PageContentCategory;
use App\Models\SupplierPackage;
use App\Models\Users;
use App\Models\Language;
use App\Models\PagesPrefix;
use App\Models\PagesSeo;
use Excel;
use Jenssegers\Agent\Agent;


class FooterPageController extends Controller
{
     public function Business_Identity($id)
      {
            $page_content_title ='';
            return View::make('frontend.footer.business_identity',['page_content_title'=>$page_content_title]);
      }
      
       public function Inspection_Service($id)
      {
            $page_content_title ='';
           // return 12;
            return View::make('frontend.footer.inspec',['page_content_title'=>$page_content_title]);
      }
      
      public function Help_Center($id)
      {
         return Redirect::to('help-center');
      }
      public function Contact_Us(){
              $header=PagesSeo::where('page_id',124)->first();
              $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;
            $page_content_title ='';
            return View::make('frontend.contents_view.contact',$data,['page_content_title'=>$page_content_title]);
      }
      public function Submit_Complaint($id)
      {
            if(Sentinel::check()){
            
        $page_content_title='Submit a Dispute';
        return View::make('frontend.dispute-home',compact('page_content_title'));
            
        }
        else
         return redirect()->route('login');
      }
      public function Policies_Rules()
      {
           $header=PagesSeo::where('page_id',114)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title ='';
            $data['parent_cat_name']=PageContentCategory::where('parent_id',23)->take(4)->get();
         $data['parent_cat_nam']=PageContentCategory::where('parent_id',29)->take(4)->get();
            return View::make('frontend.footer.policies_rules',$data,['page_content_title'=>$page_content_title]);
      }
      public function Policies_Rules_data()
      {
          $header=PagesSeo::where('page_id',187)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title ='';
            return View::make('frontend.footer.policies_rules',$data,['page_content_title'=>$page_content_title]);
      }

      public function sourcing_easier()
      { 
            $header=PagesSeo::where('page_id',204)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title ='';
            $agent = new Agent();
           $device = $agent->device();

          // return View::make('mobile-view.content-view-mobile.bdtdc-sourcing-easier-m',$data);
             if($agent->isPhone())
        {

           return View::make('frontend.mobile-view.sourcing-easier-m',$data);
        }
        if($agent->isDestop())
        {
             return View::make('frontend.footer.sourcing-easier-m',$data);
        }

        if($agent->isTab())
        {
            return View::make('frontend.footer.sourcing-easier-m',$data);
        }
        else{
          
           return View::make('frontend.footer.sourcing-easier-m',$data);
        }
      }
      public function buyer_guide()
      { 
            $header=PagesSeo::where('page_id',206)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title ='';
           $agent = new Agent();
           $device = $agent->device();
       //return View::make('mobile-view.content-view-mobile.bdsource_buyer_guide_m',$data);
         
        if($agent->isPhone())
        {

           return View::make('frontend.mobile-view.source_buyer_guide_m',$data);
        }
        if($agent->isDestop())
        {
            return View::make('frontend.footer.source-buyer-guide',$data);
        }

        if($agent->isTab())
        {
           return View::make('frontend.mobile-view.source_buyer_guide_m',$data);
        }
        else{
          
           return View::make('frontend.footer.source-buyer-guide',$data);
        }
                    
   }
       public function trade_show_info()
      {
            $page_content_title ='';
            return View::make('frontend.footer.tradeshow-info-details');
      }
      public function Intellectual()
      {  
         $header=PagesSeo::where('page_id',190)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title ='';
          return view::make('frontend.footer.intellectual',$data,['page_content_title'=>$page_content_title]);
      }
      public function About_Bdtdc($id)
      {
             $page_content_title ='';
            return Redirect::away('http://aboutus.bdtdc.com/en/#home');
      }
      public function About_Bdtdc_group($id)
      {
            $page_content_title ='';
            return Redirect::to('research');
      }
      
      public function Sitemap($id)
      {
            $page_content_title="Buyer Channel";
        return View::make('frontend.contents_view.sustainable_manufacturing',['page_content_title'=>$page_content_title]);
      }

      public function entrepreneurday(){

        return Redirect::to('entrepreneur/day');
      }
      public function Rules_center(){
         $header=PagesSeo::where('page_id',114)->first();
          $data['title']=$header->title;
          $data['keyword']=$header->meta_keyword;
          $data['description']=$header->meta_description;
         $page_content_title="Buyer Channel";
         $data['parent_cat_name']=PageContentCategory::where('parent_id',23)->take(4)->get();
         $data['parent_cat_nam']=PageContentCategory::where('parent_id',29)->take(4)->get();
        return View::make('frontend.footer.policies_rules',$data,['page_content_title'=>$page_content_title]);
      }
      public function By_Category($id)
      {
            $page_content_title ='';
            return Redirect::to('Marketplace');
      }
      public function Get_Quotations($id)
      {
            $page_content_title ='';
            return Redirect::to('get-quotations');
      }
      public function Wholesale($id)
      {
            $page_content_title ='';
            return Redirect::to('wholesale/');
      }
       public function supplemental_service()
      {
              $header=PagesSeo::where('page_id',189)->first();
             $data['title']=$header->title;
             $data['keyword']=$header->meta_keyword;
             $data['description']=$header->meta_description;
             $page_content_title ='';
            return View::make('frontend.footer.supplemental-service',$data);
      }
      public function displaying_prohibited()
      {
             $header=PagesSeo::where('page_id',191)->first();
             $data['title']=$header->title;
             $data['keyword']=$header->meta_keyword;
             $data['description']=$header->meta_description;
            $page_content_title ='';
            return View::make('frontend.footer.displaying-prohibited',$data);
      }
      public function popular_product_brand()
   {  
      
      return Redirect::to('Bdsource-home-page');
   }
       public function Supplier_Memberships($id)
      {
          $data['page_content_categorys']=array();
        $page_content_categorys=DB::table('page_content_categories')
            ->where('parent_id','0')->where('page_id', $id)
            ->get();
        //dd($page_content_categorys);
        foreach ($page_content_categorys as $page_content_category) {

            $content_children_data = array();


            $content_childrens = DB::table('page_content_categories')
                ->where('parent_id',$page_content_category->id)
                ->get();       
            
            foreach ($content_childrens as $content_children) {
                # code...
                $content_children_data[] = array(
                    'child_id'  => $content_children->id,
                    'child_name'=>  $content_children->name
                );
            }
            $data['page_content_categorys'][] = array(
                //'name'=>$category->category_name,
                'content_id'     => $page_content_category->id,
                'name'=>$page_content_category->name,
                'content_childrens' => $content_children_data

            );

        }    
        $supplier_memberships=SupplierPackage::with('descriptions')->get();
       
        $tab_menus = PageTabs::where('page_id', $id)->get();
        $page_content_title="Buyer Channel";

        return View::make('frontend.contents_view.membership',$data,['page_content_title'=>$page_content_title, 'tab_menus'=>$tab_menus  , 'supplier_memberships'=>$supplier_memberships]); 
     
      }
      
      public function Trade_Assurance($id)
      {
           $header=PagesSeo::where('page_id',160)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title='';
            return View::make('frontend.footer.tradeassurance',$data,['page_content_title'=>$page_content_title]);
      }
      
      public function Training_Center()
      {
            $page_content_title='';
            $countries=DB::table('country_list')->get();
            //dd($countries);
            return View::make('frontend.footer.training',['page_content_title'=>$page_content_title,'countries'=>$countries]);
      }
      public function Learning_Center()
      {
        echo "string";die();
            $header=PagesSeo::where('page_id',101)->first();
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;
            $page_content_title='';
            return View::make('frontend.footer.learning',$data,['page_content_title'=>$page_content_title]);
      }
      
      public function Popular_Product_Trends()
      {
            return Redirect::to('Bdsource-home-page');
      }
      
      public function Secure_Payment()
      {
          $header=PagesSeo::where('page_id',164)->first();
          $data['title']=$header->title;
          $data['keyword']=$header->meta_keyword;
          $data['description']=$header->meta_description;
          $page_content_title='';
           $data['parent_cat_name']=PageContentCategory::where('parent_id',8)->take(4)->get();
          $agent = new Agent();
        
          $device = $agent->device();
            //return View::make('mobile-view.bdtdc_service.secure_payment',$data);
          if($agent->isPhone())
          {
              return View::make('frontend.mobile-view.secure_payment',$data,['page_content_title'=>$page_content_title]);
          }
          if($agent->isDestop())
          {
              return view::make('frontend.contents_view.secure',$data,['page_content_title'=>$page_content_title]);
          }
          if($agent->isTab())
          {
              return View::make('frontend.mobile-view.secure_payment',$data,['page_content_title'=>$page_content_title]);
          }
          else{          
              return view::make('frontend.contents_view.secure',$data,['page_content_title'=>$page_content_title]);
          }

          return view::make('frontend.contents_view.secure',$data,['page_content_title'=>$page_content_title]);
      }
      public function gold_supplier()
      {
            $header=PagesSeo::where('page_id',169)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title='';
             return view::make('frontend.contents_view.gold-supplier',$data);
      }
      /*public function offer_board()
      {
          $header=PagesSeo::where('page_id',101)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title=''; 
        return view('protected.admin.layouts.offer_board',$data);
      }*/
    
   public function buyer_training()
      {
          $header=PagesSeo::where('page_id',181)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title='';
            return View::make('frontend.footer.international-buyer-training',$data);
      }
    public function online_buy_selling()
      {
           $header=PagesSeo::where('page_id',186)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title='';
            return View::make('frontend.footer.buy-selling',$data);
      }
    public function product_ranking()
      {
            $header=PagesSeo::where('page_id',196)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
            $page_content_title='';
            return View::make('frontend.footer.product-rank',$data);
      }
       public function training_course()
      {
           $header=PagesSeo::where('page_id',182)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
          return View::make('frontend.footer.training_course',$data);
      }
       public function company_profile()
      {
          $header=PagesSeoPagesSeoPagesSeo::where('page_id',180)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
           
            return View::make('frontend.footer.company-profile',$data);
      }
       public function quality_posting()
      {
           $header=PagesSeoPagesSeoPagesSeo::where('page_id',194)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
            return View::make('frontend.footer.high-quality-posting',$data);
      }
      public function business_trend()
      {
           $header=PagesSeoPagesSeo::where('page_id',185)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
            return View::make('frontend.footer.business-trend',$data);
      }
    public function compliment_letter()
      {
          $header=PagesSeoPagesSeo::where('page_id',195)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
            return View::make('frontend.footer.compliment-letter',$data);
      }
      public function responds_buyer_inquiries()
      {
            $header=PagesSeo::where('page_id',199)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title='';     
            return View::make('frontend.footer.respond-buyer-inquiries',$data);
      }
       public function multi_language_posting()
      {
           $header=PagesSeo::where('page_id',193)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title=''; 
           return View::make('frontend.footer.multi-language',$data);
      }
       public function how_to_deal()
      {
           $header=PagesSeo::where('page_id',198)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title='';
            return View::make('frontend.footer.bdtdc-deal',$data);
      }
       public function buy_product()
      {
           $header=PagesSeo::where('page_id',101)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title='';
            return View::make('frontend.footer.product-buy-bdtdc',$data);
      }
      public function how_to_join()
      {
           $header=PagesSeo::where('page_id',101)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $page_content_title='';
            return View::make('frontend.footer.learn-join-bdtdc',$data);
      }
        
      
      public function get_excel($name)
      {
        if(Sentinel::check()){
            if($name=="buyer")
          $data =DB::table('users as u')
                          ->join('companies as c','c.user_id','=','u.id')
                          ->join('users as bc','bc.user_id','=','u.id')
                          ->join('company_descriptions as cd','cd.company_id','=','c.id')
                          ->join('country_list as country','country.id','=','c.location_of_reg','left')
                          ->where('bc.role_id',4)
                          ->get(['u.first_name','u.last_name','u.email','cd.name as company_name','country.name as countries']);
          else{
          $data =DB::table('users as u')
                          ->join('companies as c','c.user_id','=','u.id')
                          ->join('users as bc','bc.user_id','=','u.id')
                          ->join('company_descriptions as cd','cd.company_id','=','c.id')
                          ->join('country_list as country','country.id','=','c.location_of_reg','left')
                          ->where('bc.role_id',3)
                          ->get(['u.first_name','u.last_name','u.email','cd.name as company_name','country.name as countries']);
                          }
         
        $filename   = $name .date('d-m-Y').'_'.time();
        Excel::store($filename, function($excel) use($data) {

           
        
          $excel->sheet('Sheetname', function($sheet) use($data) {
        
                 foreach ($data as &$da) {
                $da = (array)$da;
            }

          $sheet->fromArray($data);

                
        
            });
        
        })->download('xlsx');
      }
    
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
        
      }
      
      public function get_form_post()
      {
     
        return View::make('frontend.contents-view.get_form');
       
      }
      public function getFile()
        {
            // Import a user provided file
         if(Input::hasfile('report')){
             
         $files=Input::file('report');
         $file=fopen($files,"r");
         
           // dd($file);
            while(($data=fgetcsv($file, 10000,",")) !== FALSE)
            {
            // $filename = $this->doSomethingLikeUpload($file);
    
            // Return it's location
             //return $filename;
             foreach($data as $dat){
              $result=BdtdcLanguage::create(array(
                  'name'=>$dat[0]
                  ));
             }
             dd($result->toArray());
            }
            
            
         }
        }
        public function buying_request(){
               $header=PagesSeo::where('page_id',119)->first();
               $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;


            return View::make('frontend.footer.buying-request',$data);

        }
        public function product_listing_policy(){
             $header=PagesSeo::where('page_id',192)->first();
               $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;
            return View::make('frontend.footer.product_listing_policy',$data);

        }
         public function terms_of_use()
        {
              $header=PagesSeo::where('page_id',188)->first();
               $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;
          return view::make('frontend.footer.terms_of_use',$data);
        }
         public function user_agreement()
        {
              $header=PagesSeo::where('page_id',172)->first();
               $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;
          return view::make('frontend.footer.bdtdc-user-agreement',$data);
        }

        public function what_is_bdsource()
        {
          return Redirect::to('Bdtdc/source');
        }
        public function bdsource_for_supplier()
        {

          return Redirect::to('bdtdc/sourcing/list');
        }
         public function bdsource_for_buyer()
        {

          return Redirect::to('Bdsource-home-page');
        }
         public function branding_email()
        {

          return Redirect::to('emails.branding-email');
        }
}
