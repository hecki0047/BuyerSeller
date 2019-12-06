<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Models\Categories;
use App\Models\PagesPrefix;
use App\Models\Footer;
use App\Models\Companies;
use App\Models\SupplierProduct;
use App\Models\SupplierMainProduct;
use App\Models\SupplierProductGroups;
use App\Models\TemplateSetting;
use App\Models\SupplierQuery;
use App\Models\Module;
use Route;
use Sentinel;

class AppServiceProvider extends ServiceProvider
{

     /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
        View::composer(array('frontend.layouts.all-category-list','frontend.category.allcategory','frontend.layouts.home-page.sidebar-home'),function($view){

            $data['categorys']=Categories::with('sub_cat')->where('parent_id','0')->orderBy('sort_order', 'ASC')->where('status',1)->get();
            $view->with($data);
        });

        View::composer(array('frontend.layouts.home-page.header-dashboard','frontend.layouts.topbar','frontend.layouts.topbar-home','mobile-view.layout.topbar_m','mobile-view.admin-panel.user-login','frontend.supplier.dashboard','frontend.supplier.product_create','frontend.template.layout_dynamic','frontend.template.templete_layout'),function($view){

            $data['pages']=PagesPrefix::where('active',1)->get();
            $view->with($data);

        });

        View::composer(array('frontend.layouts.footer'),function($view){
            $data['footers']=Footer::with('sub_pages')->where('parent_id',0)->take(5)->get();
            $view->with($data);
        });

        // View::composer(array('protected.admin.admin_dashboard','protected.admin.layouts.sidebar', 'protected.admin.layouts.access'),function($view){
        View::composer(array('protected.admin.admin_dashboard','protected.admin.layouts.sidebar'),function($view){
            //if(Sentry::check()){ // Sentry Check is not essential here, because it's already checked before getting the URL.
            $data['modules'] = Module::with(['childrens'])->where('parent_id','0')->get();

            $view->with($data);
        });

        View::composer(['frontend.template.header_information','frontend.template.templete_layout','frontend.template.product_list','frontend.template.layout_dynamic'],function($view){
            //$profile_id = Route::current()->parameters()['profile_id'];
            $id = Route::current()->parameters()['profile_id'];
            $company = Companies::with('company_description')
                ->where('id',$id)
                ->first();

            $products = SupplierProduct::with(['products', 'products.product_name'])
                                            ->where('supplier_id',$id)
                                            ->get();

            $main_products = SupplierMainProduct::where('supplier_id',$id)->get(['product_name']);
            $nav_menus=PagesPrefix::where('prefix','Templete')->get();
            
            $product_groups=SupplierProductGroups::where('company_id',$id)->get();

            $template_setting_data = TemplateSetting::with('template_section')
                                                        ->where('company_id',$id)
                                                        ->get();

            $customer=Companies::with('customers','supplier_info','name_string')->where('id',$id)->first();

            $company_no_name = ($customer?($customer->name_string?(trim($customer->name_string->name)!=''?$customer->name_string->name:'not available'):'not available'):'not available');

            $pages=PagesPrefix::where('active',1)->get();
            $view->with(compact(['template_setting_data','products','company','main_products','id','nav_menus','product_groups','pages','customer','company_no_name']));
        });

        View::composer(array('frontend.supplier.dashboard'),function($view){

            $data['rejected_buying_request']=SupplierQuery::where('product_owner_id', Sentinel::getUser()->id)->where('status', 3)->count();
            $view->with($data);
        });
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

   
}
