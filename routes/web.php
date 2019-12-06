<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function is_secured(){
    return true;
}
/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@destroy']);

//users can login through this route.
Route::get('login', 'UserController@login')->name('custom-login');
Route::get('login', 'UserController@login')->name('login');


//Route::get('login', 'UserController@login')->name('login');
Route::resource('login', 'UserController' , ['only' => ['create','store','destroy']]);

Route::group(['middleware' => 'guest'], function()
{
//users can register new account.

Route::get('join', 'UserController@join')->name('custom-register');
Route::get('registration/email/{email}', [
        'as' => 'registration.email',
        'uses' => 'RegisterationController@send_mail'
]);
Route::get('gratings','UserController@gratings');
Route::post('registration/store', ['as' => 'registration.store', 'uses' => 'RegisterationController@store']);
Route::get('check_existing_user/{email}','RegisterationController@check_user_by_email');
Route::post('save_company_info','RegisterationController@save_company_info');
Route::get('register/verify/{confirmationCode}', [
        'as' => 'confirmation_path',
        'uses' => 'RegisterationController@confirm'
]);
Route::get('email/verification_by_key/{key}','RegisterationController@veryfication_by_key');
Route::get('country_suggesion/{term}','RegisterationController@country_suggesion');
Route::post('check_captcha','RegisterationController@check_captcha');
});


# E-mail change route
Route::get('subscript/change-email', 'SessionsController@changeEmail');

Route::post('subscript/confirm-email', 'SessionsController@postchangeEmail');

Route::post('subscript/change-email', 'SessionsController@postchangeEmail');

Route::post('subscription/mail-change','SessionsController@verification_by_key');

Route::post('subscript/change-email/complete', 'SessionsController@completechangeEmail');


Route::group(['middleware' => 'supplier'], function()
{
Route::post('supplier/product_update/{id}','Frontend/SupplierController@post_product_update');

Route::get('dashboard/{section}','Frontend/CompanyController@rander_dashboard_section');

Route::get('company/dashboard',['as'=>'dashboard','uses'=>'Frontend\CompanyController@index']);

Route::post('company/post_supplier_info',['as'=>'company.post_supplier_info','uses'=>'Frontend\SupplierController@store']);

Route::post('company/post_shipping_address','Frontend/CompanyController@post_shipping_address');

Route::get('company/get-verified',['as'=>'company.dashboard','uses'=>'Frontend\CompanyController@get_verified']);

Route::post('company/post_supplier_personal_info','Frontend\SupplierController@post_personal_info');

Route::get('supplier/product_create','Frontend\SupplierController@product_create');

Route::get('supplier/product_edit/{id}','Frontend\SupplierController@product_edit');

Route::post('supplier/product_create','Frontend\SupplierController@post_product_create');

Route::get('get_sub_category/{id}','Frontend\CategoriesController@get_sub_cat');

Route::get('add_product_group/{group_name}','Frontend\SupplierController@add_product_group');

Route::get('supplier/wholesale_product_create','Frontend\SupplierController@wholesale_product_create');
    
Route::post('supplier/wholesale_product_create','Frontend\SupplierController@post_wholesale_product_create');

//unable to found function in mean controller 
//Route::get('supplier/get_section_data','Frontend\SupplierController@get_section_data');

Route::post('supplier/section_create','Frontend\SupplierController@post_section_create');

Route::get('supplier/section_delete/{id}','Frontend\SupplierController@post_section_delete');

Route::post('supplier/section_update/{id}','Frontend\SupplierController@post_section_update');


Route::get('quotation/management',['as'=>'Qutation.management','uses'=>'Frontend\QuotationController@qutation_list']);

Route::get('quotation/quote/{id}',['as'=>'Qutation.quote','uses'=>'Frontend\QuotationController@quote_view']);

Route::get('my-buyer',['as'=>'Qutation.my-buyer','uses'=>'Frontend\QuotationController@my_buyer']);
  
Route::get('extra-inquery',['as'=>'Qutation.extra-inquery','uses'=>'Frontend\QuotationController@extra_inquery']);

Route::get('user/upgrade/{id}',['as'=>'user/upgrade', 'uses'=>'Frontend\SupplierController@create']);

Route::post('user/upgrade_data', ['as'=>'user.upgrade.store_data', 'uses'=>'Frontend\SupplierController@store_data']);

Route::get('get_tab_content_form/{page}','StandardUserController@get_tab_content');

Route::post('user/post_company_info','UsersController@post_company_info');

Route::post('user/company_logo','UsersController@post_company_logo');

Route::post('user/company_logo/delete','UsersController@delete_company_logo');
Route::post('user/company_photo','UsersController@post_company_photo');
Route::post('user/company_photo/delete/{id}','UsersController@delete_company_photo');
Route::post('user/post_certification_info','UsersController@post_certification_info');
Route::get('user/get_name_by_type/{id}','UsersController@get_name_by_type');
Route::post('user/all_certification_image','UsersController@all_certification_image');
Route::get('user/delete_image/{id}/{modal}','UsersController@delete_image');

Route::get('change_product_image/{id}/{action}','Frontend\ProductController@change_product_image');
Route::post('dashboard/banar_upload','UsersController@banar_upload');
    
Route::post('dashboard/update_banar','UsersController@update_banar');
Route::post('upload_p_image','Frontend\ProductController@upload_p_image');
    
Route::get('delete_p_image/{img_name}','Frontend\ProductController@delete_p_image');
    
Route::get('change_live_status/{current_status}/{id}','Frontend\ProductController@change_live_status_product');

// product group

Route::get('product/manage_product_group',['as'=>'product.manage_product_group','uses'=>'Frontend\SupplierController@product_manage_roup']);

Route::post('product/manage_product_group',['as'=>'product.manage_product_group','uses'=>'Frontend\SupplierController@product_manage_roup_insert']);
   
Route::get('product/manage_product_group_edit/{id}', ['as' => 'edit-group', 'uses' => 'Frontend\SupplierController@edit_group']);

Route::post('product/manage_product_group_update/{id}', ['as'=>'group-update', 'uses'=>'Frontend\SupplierController@update_group']);

Route::get('product/group_delete/{id}', ['as' => 'delete-group', 'uses' => 'Frontend\SupplierController@delete_group']);
Route::post('x_product/{id}','Frontend\ProductController@x_product');

});


Route::group(['middleware' => 'buyer'], function()
{
Route::get('buyer/dashbord', ['as' => 'buyer.dashbord', 'uses' => 'Frontend\BuyerController@index']);
Route::get('dashboard/{section}','Frontend\BuyerController@rander_dashboard_section');
});



Route::group(['middleware' => 'supplier','buyer'], function()
{
// payment proccess
Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'Frontend/AddMoneyController@payWithPaypal'));

Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'Frontend/AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'Frontend/AddMoneyController@getPaymentStatus',));
Route::view('/checkout', 'checkout-page');
Route::post('/checkout', 'Frontend/PaymentController@createPayment')->name('create-payment');
Route::get('/confirm', 'Frontend/PaymentController@confirmPayment')->name('confirm-payment');
// stripe payment system
Route::get('stripe', 'Frontend/StripePaymentController@stripe');
Route::post('stripe', 'Frontend/StripePaymentController@stripePost')->name('stripe.post');

Route::post('payment-success', 'Frontend/PaymentController@success')->name('payment.success');
//order payment

Route::post('order-payment', 'Frontend/StripePaymentController@orderpayment')->name('order.payment.post');
Route::post('/pay-order-payment', 'Frontend/PaymentController@orderPayment')->name('pay-order-payment');
Route::get('membership/invoice/{id}',['as'=>'product.invoice','uses'=>'Frontend/SupplierChannelController@product_invoice']);

// Live chat route
Route::get('default/chat/{id}','Frontend\MessageController@default_chat');
Route::get('default/message','Frontend\MessageController@default_message');
Route::get('get-message-data/{data}','Frontend\MessageController@get_message_data');
Route::get('default/mark-action','Frontend\MessageController@mark_action');
Route::post('default/manage-folder','Frontend\MessageController@manage_folder');
Route::get('default/get-total-new-inq','Frontend\MessageController@get_total_new_inq');
Route::post('default/chat','Frontend\MessageController@post_default_chat');
Route::post('default/get-chat-data','Frontend\MessageController@get_chat_data');
Route::post('default/get-contact-data','Frontend\MessageController@get_contact_data');
Route::post('default/ajax-chat-data','Frontend\MessageController@ajax_chat_data');
Route::post('default/get-scrolled-chat','Frontend\MessageController@get_scrolled_chat');
// End Live chat route


//order management route
Route::get('order-list',['as' => 'order-list.customer.store', 'uses' => 'Frontend\OrderController@showall']);
Route::get('send-order-list',['as' => 'send-order-list.customer.store', 'uses' => 'Frontend\OrderController@sendshowall']);
Route::get('order-details/{id}',['as' => 'order.details', 'uses' => 'Frontend\OrderController@order_details']);
Route::get('order-edit/{id}',['as' => 'order.edit', 'uses' => 'Frontend\OrderController@order_edit']);
Route::post('order-edit/{id}',['as' => 'order.edit', 'uses' => 'Frontend\OrderController@post_order_edit']);
Route::get('order-delete/{id}',['as' => 'order.delete', 'uses' => 'Frontend\OrderController@order_delete']);
Route::get('order-confirm/{id}',['as' => 'order.confirm', 'uses' => 'Frontend\OrderController@order_confirm']);
Route::get('order-postpone/{id}',['as' => 'order.postpone', 'uses' => 'Frontend\OrderController@order_postpone']);
Route::get('order-active/{id}',['as' => 'order.active', 'uses' => 'Frontend\OrderController@order_active']);
Route::get('order-drop-ship/{id}',['as' => 'order.drop.ship', 'uses' => 'Frontend\OrderController@order_drop_ship']);
Route::get('confirm-order-received/{id}',['as' => 'order.active', 'uses' => 'Frontend\OrderController@order_confirm_received']);


// make fav
Route::get('Trade/alert','Frontend\BuyerChannelController@trade_alert');

Route::post('make-favorite','Frontend\ProductController@make_favorite');
Route::post('remove-favorite','Frontend\ProductController@remove_favorite');
Route::get('favorite-product','Frontend\ProductController@favorite_product');
Route::get('favorite-supplier','Frontend\ProductController@favorite_supplier');
Route::post('remove-favorite-supplier','Frontend\ProductController@remove_favorite_supplier');

    //Route::get('Mybuy','Frontend\SettingController@index');

Route::get('order/invoice/{id}',['as' => 'order.orderinvoice', 'uses' => 'Frontend\OrderController@order_invoice']);

Route::get('order-details','Frontend\ProductCreateController@index');

// password reset
Route::post('user/password-reset','Frontend\SupplierController@password_reset');

Route::get('Mybuying-Request','Frontend\BuyingRequestController@get_buying_request');
Route::get('my-supplier','Frontend\BuyingRequestController@my_supplier');

Route::get('mysource/inq/{id}','Frontend\BuyingRequestController@mysource');
Route::get('mysource/edit-add/{id}','Frontend\BuyingRequestController@edit_add');
Route::post('mysource/edit-add/{id}','Frontend\BuyingRequestController@post_edit_add');
Route::get('mysource/add-details/{id}','Frontend\BuyingRequestController@add_details');
Route::post('mysource/update-details','Frontend\BuyingRequestController@update_details');
Route::get('mysource_quotations/inq/{id}','Frontend\BuyingRequestController@mysource_quotations');
Route::get('mysource/online-order/{inq}/{id}','Frontend\BuyingRequestController@online_order');
Route::post('mysource/post-online-order/{quote_id}','Frontend\BuyingRequestController@post_online_order');


Route::get('view/request-sample/{id}',['as'=>'view-request.sample','uses'=>'Frontend\BuyingRequestController@view_request_sample']);
Route::post('view/request-sample/success',['as'=>'view-request.sample.success','uses'=>'Frontend\BuyingRequestController@view_request_sample_success']);
Route::get('list/view/requested/sample',['as'=>'list.requested_sample','uses'=>'Frontend\BuyingRequestController@requested_sample']);
Route::get('list/view/requested/sample/buyer','Frontend\BuyingRequestController@sample_buyer');
Route::get('list/view/requested/sample/buyer/{id}','Frontend\BuyingRequestController@sample_buyer_details');

//found no function 
//Route::get('quotations','Frontend\BuyerChannelController@quote_form');

// message conversion
Route::post('post_conversation','Frontend\BuyerController@post_conversation');

Route::get('get_inquires_by_filter/{group}','Frontend\SupplierController@get_inquires_by_filter');

Route::get('inquery_action/{action}/{inquery_id}','Frontend\SupplierController@inquery_action');
    
Route::get('reverse-action-on-inquery/{id}','Frontend\SupplierController@reverse_action_on_inquery');
//Route::get('inquery_action/{action}/{inquery_id}','dashboard\SupplierController@inquery_action');

Route::get('country/products',['as'=>'country.products','uses'=>'Frontend\CategoriesController@country_productList']);

//Route::get('category/products',['as'=>'category.products','uses'=>'Frontend\CategoriesController@category_productList']);
    
Route::get('conversation/{id}/{quotation_type}','Frontend\BuyerController@get_conversation');

Route::get('conversation/change-inq-view','Frontend\BuyerController@change_inq_view');
    
Route::post('product_details',['as'=>'product.details','uses'=>'Frontend\ProductController@message']);

Route::post('all-action/{name}',['as'=>'all.action','uses'=>'Frontend\AllActionController@manage_action']);

});


Route::get('byer/contact_supplier/{supplier_id}/{product_id}','Frontend\BuyerController@get_contact_with_supplier');

Route::get('contact_supplier/{supplier_id}','Frontend\BuyerController@contact_supplier');
Route::post('buyer/contact_supplier','Frontend\BuyerController@post_contact_with_supplier');


Route::get('country/region','Frontend\limitedController@country_region');

Route::get('submit_report', ['as'=>'submit.report', 'uses'=>'Frontend\ServiceChannelController@report']);
Route::post('submit_report', ['as'=>'submit.report.store', 'uses'=>'Frontend\ServiceChannelController@report_store']);



// special page
Route::get('online-marketplace',['as'=>'online.marketplace.show','uses'=>'Frontend\CategoriesController@showall']);
Route::get('kids-fashion',['as'=>'Home.Contract.Textiles','uses'=>'Frontend\SpecialPageController@showall']);
Route::get('bangladesh-rmg',['as'=>'Home.bangladesh.rmg','uses'=>'Frontend\SpecialPageController@rmg']);
Route::get('bangladesh-clothing',['as'=>'Home.bangladesh.clothing','uses'=>'Frontend\SpecialPageController@clothing']);
Route::get('bangladesh-footwear',['as'=>'Home.bangladesh.footware','uses'=>'Frontend\SpecialPageController@footware']);
Route::get('bangladesh-frozen-foods',['as'=>'Home.bangladesh.frozen.food','uses'=>'Frontend\SpecialPageController@frozen_food']);
Route::get('bangladesh-tea',['as'=>'Home.bangladesh.tea.coffee','uses'=>'Frontend\SpecialPageController@tea_coffee']);
Route::get('bangladesh-furniture',['as'=>'Home.bangladesh.furniture','uses'=>'Frontend\SpecialPageController@furniture']);
Route::get('bangladesh-jute-products',['as'=>'Home.bangladesh.jute','uses'=>'Frontend\SpecialPageController@jute']);
Route::get('bangladesh-leather',['as'=>'Home.bangladesh.jute','uses'=>'Frontend\SpecialPageController@leather']);



// Helpcenter pages
Route::get('user/guide',['as'=>'user.guide', 'uses'=>'Frontend\GoldSupplierController@userguide']);
Route::get('select/suppliers','Frontend\GoldSupplierController@buyer_supplier_info');
Route::get('executive','Frontend\GoldSupplierController@executive');
Route::get('application/received/info','Frontend\GoldSupplierController@application_received');
Route::get('trade','Frontend\GoldSupplierController@trade');
Route::get('trading-agent','Frontend\GoldSupplierController@trading_agent_bdtdc');
Route::get('trading-agent/details/{company_name}/{company_id}','Frontend\GoldSupplierController@trading_agent_details');
Route::get('market/individual','Frontend\GoldSupplierController@individual_product');
Route::get('extra-inquiries','Frontend\GoldSupplierController@extra_inquiries');
Route::get('vvgratings','Frontend\GoldSupplierController@bdtdc_agencies');
Route::get('company/home','Frontend\GoldSupplierController@company_home');
Route::get('contact_message_form','Frontend\GoldSupplierController@contact_message');
Route::post('contact/message/form_success',['as'=>'contact_message_form_success','uses'=>'Frontend\GoldSupplierController@contact_message_store']);
Route::post('user/upgrade', ['as'=>'user.upgrade.store', 'uses'=>'Frontend\GoldSupplierController@store']);

//about us

Route::get('about-us',['as'=>'about.us','uses'=>'Frontend\AboutusController@about_bdtdc']);

Route::get('buyer/contactsupplier',['as'=>'buyer.contactsupplier','uses'=>'Frontend\AboutusController@buyer_contact_supplier']);
Route::get('business/matching',['as'=>'business.matching','uses'=>'Frontend\AboutusController@businessmatching']);
Route::get('media/room',['as'=>'media.room','uses'=>'Frontend\AboutusController@bdtdcmediaroom']);
Route::get('media-news',['as'=>'media.news','uses'=>'Frontend\AboutusController@bdtdcmedianews']);
Route::get('sme-center',['as'=>'bdtdc.smecenter','uses'=>'Frontend\AboutusController@smecenter']);

Route::get('portal/support-program',['as'=>'portal.program','uses'=>'Frontend\AboutusController@support_portal_program']);
Route::get('marketing/executive',['as'=>'marketing.executive','uses'=>'Frontend\AboutusController@marketing_executive']);
Route::get('web-developer/laravel',['as'=>'webdeveloper.laravel','uses'=>'Frontend\AboutusController@web_developer']);
Route::get('National-marketing-executive/b2b',['as'=>'National-marketing-executive.b2b','uses'=>'Front\AboutusController@national_marketing']);
Route::get('content/writer',['as'=>'content.writer','uses'=>'Frontend\AboutusController@content_writer']);
Route::get('jobs/interns',['as'=>'content.writer','uses'=>'Frontend\AboutusController@interns']);
Route::get('about-us',['as'=>'about.us','uses'=>'Frontend\AboutusController@about_bdtdc']);
Route::get('about-us-demo',['as'=>'about.us.demo','uses'=>'Frontend\AboutusController@about_bdtdc_demo']);
Route::get('entrepreneur/day',['as'=>'entrepreneur.day','uses'=>'Frontend\AboutusController@entrepreneur_day']);
Route::get('world-sme/expo',['as'=>'worldsme.expo','uses'=>'Frontend\AboutusController@sme_expo']);
Route::get('business/advisory',['as'=>'business.advisory','uses'=>'Frontend\AboutusController@business_advisory']);
Route::get('start/programe',['as'=>'start.programe','uses'=>'Frontend\AboutusController@start_programe']);
Route::get('database-listing',['as'=>'bdtdc.databaselisting','uses'=>'Frontend\AboutusController@database_listing']);
Route::get('promoting/bangladesh',['as'=>'promoting.bangladesh','uses'=>'Frontend\AboutusController@promoting_bangladesh']);
Route::get('promoting/bangladesh/product',['as'=>'promoting.bangladesh','uses'=>'Frontend\AboutusController@promoting_bangladesh_product']);
Route::get('marketing/bangladesh',['as'=>'marketing.bangladesh','uses'=>'Frontend\AboutusController@marketing_bangladesh']);
Route::get('global/partnership',['as'=>'global.partnership','uses'=>'Frontend\AboutusController@global_partnership']);
Route::get('sustainable/business-case',['as'=>'sustainable.manufacturing','uses'=>'Frontend\AboutusController@sustainable_manufacturing']);
Route::get('how-to/business-bangladesh',['as'=>'howto.businessbangladesh','uses'=>'Frontend\AboutusController@how_to_business_bd']);
Route::get('bangladesh/advantage',['as'=>'bangladesh.advantage','uses'=>'Frontend\AboutusController@bangladesh_advantage']);

Route::get('success/stories',['as'=>'success.stories','uses'=>'Frontend\AboutusController@success_stories']);
Route::get('Entrepreneurs/globalleader',['as'=>'success.stories','uses'=>'Frontend\AboutusController@global_leader']);
Route::get('prease-release/the-daily-star',['as'=>'prease-release.the-daily-star','uses'=>'Frontend\AboutusController@press_release']);
Route::get('tv-news',['as'=>'bdtdc.ekattor-tv','uses'=>'Frontend\AboutusController@bdtdc_tv_news']);
Route::get('media-news',['as'=>'bdtdc.media-news','uses'=>'Frontend\AboutusController@bdtdc_media_news_channel9']);
Route::get('prease-release/proverty-&-pollution',['as'=>'prease-release.proverty-&-pollution','uses'=>'Frontend\AboutusController@poverty_pollution']);
Route::get('Kazi-Ahamed/marchant-of-rainbows',['as'=>'Kazi-Ahamed.marchant-of-rainbows','uses'=>'Frontend\AboutusController@marchant_of_rainbows']);
Route::get('A-TALE-OF-PATENTS-AND-PERSISTENCE',['as'=>'A-TALE-OF-PATENTS-AND-PERSISTENCE','uses'=>'Frontend\AboutusController@patents_persistance']);
Route::get('buyerseller-group',['as'=>'Bdtdc-group','uses'=>'Frontend\AboutusController@Bdtdc_Bangladesh_group']);
Route::get('company-overview',['as'=>'Bdtdc-group','uses'=>'Frontend\AboutusController@company_overview']);
Route::get('culture/values',['as'=>'Bdtdc-group','uses'=>'Frontend\AboutusController@culture_and_values']);
Route::get('all-business-info',['as'=>'Bdtdc-group','uses'=>'Frontend\AboutusController@all_business_info']);
Route::get('history/milestone-of-company',['as'=>'Bdtdc-group','uses'=>'Frontend\AboutusController@history_and_milestone']);
Route::get('about/leadership',['as'=>'bdtdc.about.leadership','uses'=>'Frontend\AboutusController@bdtdc_leadership']);
Route::get('Integrity/Compliance',['as'=>'bdtdc.Integrity.Compliance','uses'=>'Frontend\AboutusController@interigrity_compliments']);
Route::get('investor/relation/home',['as'=>'bdtdc.investor.relation','uses'=>'Frontend\AboutusController@investor_relation']);
Route::get('office',['as'=>'bdtdc.office','uses'=>'Frontend\AboutusController@our_office']);
Route::get('FAQs',['as'=>'bdtdc.office','uses'=>'Frontend\AboutusController@faq_answer']);
Route::get('email',['as'=>'bdtdc.email','uses'=>'Frontend\AboutusController@email_template']);
Route::get('branding-email',['as'=>'bdtdc.branding-email','uses'=>'Frontend\AboutusController@branding_email_template']);
Route::get('overseasstock',['as'=>'bdtdc.overseasstock','uses'=>'Frontend\UserEnd\WholesaleController@overseasstock_product']);
Route::get('suppliers-contest',['as'=>'supplier.contest','uses'=>'Frontend\AboutusController@supplier_contest']);
Route::get('bigbuyer',['as'=>'bdtdc.bigbuyer','uses'=>'Frontend\AboutusController@bigbuyer']);
Route::get('bdsource/trustpass',['as'=>'bdsource.trustpass','uses'=>'Frontend\AboutusController@bdsource_trustpass']);
Route::get('buyer/contactsupplier',['as'=>'buyer.contactsupplier','uses'=>'Frontend\AboutusController@buyer_contact_supplier']);

// about us end //

// trade answer
Route::get('trade/answers/{id}',['as'=>'trade.answers','uses'=>'Frontend\BuyerChannelController@trade_answer']);
Route::get('trade/answers-search',['as'=>'trade.answers','uses'=>'Frontend\BuyerChannelController@trade_answer_search']);
Route::post('trade/answers',['as'=>'trade.answers','uses'=>'Frontend\BuyerChannelController@trade_answers_insert']);
Route::post('trade/answers/success/page',['as'=>'trade.answers.success','uses'=>'Frontend\BuyerChannelController@trade_answers_store']);
Route::post('pages/trade-answers',['as'=>'pages.trade-answers','uses'=>'Frontend\BuyerChannelController@t_answers']);
Route::post('pages/category_submit/{category_id}',['as'=>'pages.category.submit','uses'=>'Frontend\BuyerChannelController@t_submit_answers']);
// buyer protection
Route::get('Trade/alert/{id}','Frontend\BuyerChannelController@trade_alert');
Route::get('order-protect','Frontend\BuyerChannelController@trade_protect');
Route::post('get-supplier/{email}','Frontend\BuyerChannelController@get_supplier');
Route::post('order-protect-post','Frontend\BuyerChannelController@trade_protect_post');



// Footer controller
//Route::get('tradeshow', ['as' => 'trade.show', 'uses' => 'Admin\TradeshowController@showall']);
Route::get('Gold-supplier','Frontend\FooterPageController@gold_supplier');
Route::get('get_file/{name}','Frontend\FooterPageController@get_excel');
Route::post('upload/excel','Frontend\FooterPageController@getFile');
Route::get('excel/upload','Frontend\FooterPageController@get_form_post');
Route::get('product-list/policy','Frontend\FooterPageController@product_list_Policies');
Route::get('sourcing-easier','Frontend\FooterPageController@sourcing_easier');
//Route::get('tradeshow/info-details/{id}','Admin\TradeshowController@trade_show_info');
Route::get('supplemental/service','Frontend\FooterPageController@supplemental_service');
Route::get('user/agreement','Frontend\FooterPageController@user_agreement');
Route::get('Buyer/Training','Frontend\FooterPageController@buyer_training');
Route::get('online/Buy_selleing','Frontend\FooterPageController@online_buy_selling');
Route::get('improve/product-ranking','Frontend\FooterPageController@product_ranking');
Route::get('Training-course','Frontend\FooterPageController@training_course');
Route::get('Company/profile','Frontend\FooterPageController@company_profile');
Route::get('Quality/posting-for-grab','Frontend\FooterPageController@quality_posting');
Route::get('Business/trend-in-Bangladesh','Frontend\FooterPageController@business_trend');
Route::get('complaint-letter','Frontend\FooterPageController@compliment_letter');
Route::get('How-to-respond-buyer-inquiries','Frontend\FooterPageController@responds_buyer_inquiries');
Route::get('multi-language-posting','Frontend\FooterPageController@multi_language_posting');
Route::get('how-to-deal','Frontend\FooterPageController@how_to_deal');
Route::get('how-to-buy','Frontend\FooterPageController@buy_product');
Route::get('how-to-join','Frontend\FooterPageController@how_to_join');

Route::get('buyer/guide-bdsource','Frontend\FooterPageController@buyer_guide');
route::get('Intellectual','Frontend\FooterPageController@Intellectual');
route::get('Policies_Rules','Frontend\FooterPageController@Policies_Rules_data');
route::get('terms_use','Frontend\FooterPageController@terms_of_use');

route::get('product_listing_policy','Frontend\FooterPageController@product_listing_policy');
route::get('displaying-prohibited','Frontend\FooterPageController@displaying_prohibited');
route::get('buying-request','Frontend\FooterPageController@buying_request');

Route::get('ServiceChannel/pages/for_buyer/35',function(){

    return Redirect::to('help-center');

});
// About us page


Route::get('my-favorite','Frontend\MobileViewController@my_favorite');
//sending mail
Route::get('Banglaesdhi/product','Frontend\MobileViewController@bangladeshi_product');
Route::get('country/name/product','Frontend\MobileViewController@country_product');
Route::get('product-category','Frontend\MobileViewController@product_category');
Route::get('company-profile/{id}','Frontend\MobileViewController@company_info');
Route::get('contact-supplier','Frontend\MobileViewController@contact_supp');
Route::get('sub-category/{name}/{id}','Frontend\MobileViewController@sub_category');
Route::get('subcategory-product-view/{id}','Frontend\MobileViewController@sub_category_pro_view');
Route::get('wholesale-subcategory/{name}/{id}','Frontend\MobileViewController@wholesale_subcategory');
Route::get('wholesale-subcategory-product-view/{id}','Frontend\MobileViewController@wholesale_sub_category_pro_view');
Route::get('product-of-month','Frontend\MobileViewController@product_of_month');
Route::get('product-by-country','Frontend\MobileViewController@product_by_region');
Route::get('selected-country-supplier','Frontend\MobileViewController@selected_country_supplier');
Route::get('wholesale/product','Frontend\MobileViewController@wholesale_product');
Route::get('bdsource/product','Frontend\MobileViewController@bdsource_product');
Route::get('bdsource-for-buyer','Frontend\MobileViewController@bdsource_buyer');
Route::get('quality-suppliers','Frontend\MobileViewController@quality_supplier');
Route::get('country/product/name/{category_id}/{country_id}','Frontend\MobileViewController@indiv_country_product');
Route::get('buyer-preference-product','Frontend\MobileViewController@buyer_preference');
Route::get('Messanger','Frontend\MobileViewController@messanger_chat');
Route::get('messages','Frontend\MobileViewController@inquiries_msg');
Route::get('all-buying-request','Frontend\MobileViewController@buying_request');
Route::get('Feedback/help-center','Frontend\MobileViewController@Feedback_center');
Route::get('warehouse/product','Frontend\MobileViewController@warehouse_product');
Route::get('cool/technology','Frontend\MobileViewController@cool_technology');
Route::get('company-product-template/{id}','MobileView\MobileViewController@company_profile');
Route::get('product-template','Frontend\MobileViewController@company_profile_product');
Route::get('company-profile-info','Frontend\MobileViewController@company_profile_info');
Route::get('company-contact-profile','Frontend\MobileViewController@company_contact');
Route::get('product/sourceing-view','Frontend\MobileViewController@product_sourceing');
Route::get('post/buying-request','Frontend\MobileViewController@post_buying_request');

Route::get('inquiry/details/{id}','Frontend\MessageController@inquiry_details');



route::get('Intellectual','Frontend\FooterPageController@Intellectual');
route::get('Policies_Rules','Frontend\FooterPageController@Policies_Rules_data');
route::get('terms_use','Frontend\FooterPageController@terms_of_use');
route::get('select/suppliers','Frontend@buyer_supplier_info');
route::get('product_listing_policy','Frontend\FooterPageController@product_listing_policy');
route::get('displaying-prohibited','Frontend\FooterPageController@displaying_prohibited');
route::get('buying-request','Frontend\FooterPageController@buying_request');

// Route::get('bangladesh/business',['as'=>'business.bangladesh','uses'=>'Front\AboutusController@bangladeshbusiness']);
Route::get('research','Frontend\limitedController@research');
Route::get('Future-market-of-Bangladesh','Frontend\limitedController@future_market_bd');


Route::get('help_center/suppliers_help/{id}','Frontend\ServiceChannelController@suppliers_help');

route::get('wholesale_bdtdc','Frontend\GoldSupplierController@wholesale_bdtdc');
route::get('success','Frontend\BuyerController@success');

route::get('wholesale-user-guide','Frontend\GoldSupplierController@wholesale_bdtdc_user_guide');

Route::get('global-market/buyer-protection','Frontend\BuyerChannelController@buyer_protection');
Route::get('buyerHome','Frontend\BuyerChannelController@bdtdc_buyer_home');
Route::get('VIP-buyer/One-stop-service','Frontend\BuyerChannelController@one_stop_service');
Route::get('sourceing-event','Frontend\BuyerChannelController@sourceing_event');
Route::get('source','Frontend\BuyerChannel\BuyerChannelController@bdtdc_sourceing');
Route::get('sourceing-season','Frontend\BuyerChannelController@sourceing_season');
Route::get('apply-sourceing-meeting','Frontend\BuyerChannelController@application_sourceing_meet');
Route::post('apply-sourceing-meeting_store',['as'=>'apply_sourcing_meeting_store','uses'=>'Frontend\BuyerChannelController@application_sourceing_meet_store']);




// account settings
Route::get('account-settings','Frontend\SettingController@account_settings');
Route::get('my-profile','Frontend\SettingController@my_profile');
Route::get('edit-my-profile','Frontend\SettingController@edit_my_profile');
Route::post('edit-my-profile/{user_id}','Frontend\SettingController@update_my_profile');
Route::get('member-profile','Frontend\SettingController@member_profile');
Route::get('upload-photo','Frontend\SettingController@upload_photo');
Route::get('sample-photo','Frontend\SettingController@sample_photo');
Route::get('privacy-setting','Frontend\SettingController@privacy_setting');
Route::get('email-services','Frontend\SettingController@email_services');
Route::get('security-questions','Frontend\SettingController@security_question');
Route::get('manage-verification-phones','Frontend\SettingController@manage_verification_phones');
Route::get('bank-account','Frontend\SettingController@bank_account');
Route::get('payment-history','Frontend\SettingController@payment_history');


// mobile routes
Route::get('product/name','Frontend\ProductController@search_value');

Route::get('search/product-mobile', ['as'=>'search.mobile', 'uses'=>'Frontend\ProductController@search_product_mobile']);
Route::get('product/search-details','Frontend\ProductController@search_value_details');
Route::get('product-item-detail/{name}/{id}','Frontend\ProductController@item_details');

//pending these 2
Route::get('product-sourcing',['as'=>'sourcing.list','uses'=>'Frontend\BdsourceController@bdtdc_sourcing']);
Route::get('product-gallery',['as'=>'sourcing.list','uses'=>'Frontend\BdsourceController@bdtdc_product_gallery']);
Route::get('megaMarch-sourcing-consumer',['as'=>'sourcing.list','uses'=>'Frontend\BdsourceController@megaMarch_sourcing_consumer']);

Route::get('supplier/quote/{id}',['as'=>'postQuote.form','uses'=>'Frontend\BuyerChannelController@quote_from']);
Route::post('quotations_form/success/quote',['as'=>'postQuote.form.store','uses'=>'Frontend\BuyerChannelController@quote_form_store']);
Route::post('quotations_form/submit-message/{inqid}',['as'=>'postmsg.form.store','uses'=>'Frontend\BuyerChannelController@store_msg']);



/*route for faq*/
Route::get('help-center',['as'=>'bdtdc.faq','uses'=>'Frontend\ServiceChannelController@bdtdc_faq_question']);
Route::get('supplier-helpcenter',['as'=>'bdtdc.faq','uses'=>'Frontend\ServiceChannelController@bdtdc_faq_supplier']);
Route::get('faq-category-search',['as'=>'faq.category','uses'=>'Frontend\ServiceChannelController@faq_category_search']);
Route::get('faq-detail/{id}',['as'=>'faq.detail','uses'=>'Frontend\ServiceChannelController@faq_detail']);
Route::get('category-search',['as'=>'faq.search','uses'=>'Frontend\ServiceChannelController@category_search']);
/*route for faq*/


Route::get('test/sus',['as'=>'goldsupplier-add', 'uses'=>'Frontend\QuotationController@test']);
Route::get('popular-brand/{id}','Frontend\QuotationController@popular_product_brand');

// Route for E store

Route::get('Home/{name}/{profile_id}','Frontend\TemplateController@index');

Route::get('{name}/company-overview/{profile_id}','Frontend\TemplateController@show_company');
Route::post('profile/company','Frontend\TemplateController@template_store');
Route::get('trade-capacity/{name}/{profile_id}','Frontend\TemplateController@trade_capacity');
Route::get('production-capacity/{name}/{profile_id}','Frontend\TemplateController@production_capacity');
Route::get('rd-capacity/{name}/{profile_id}','Frontend\TemplateController@r_d_capacity');
Route::get('buyer-interaction/{name}/{profile_id}','Frontend\TemplateController@buyer_interaction_capacity');
Route::get('industrial-certification/{name}/{profile_id}','Frontend\TemplateController@industrial_certification');
Route::get('contact/{name}/{profile_id}','Frontend\TemplateController@get_contact');
Route::get('profile/product_/{profile_id}','Frontend\TemplateController@get_product');
Route::get('template/get_header_info/{profile_id}','Frontend\TemplateController@render_header_info');
Route::get('get_header_info_by_ajax/{id}/{dothis}','Frontend\TemplateController@get_header_info_by_ajax');
Route::get('profile/template_/{profile_id}/{group}','Frontend\TemplateController@product_filter_by_group');
Route::post('profile/search_/{profile_id}','Frontend\TemplateController@search');
Route::get('product-template/{profile_id}','Frontend\TemplateController@product_template');
Route::get('template-profile/product-search/{profile_id}','Frontend\TemplateController@product_template_search');

Route::get('country/products',['as'=>'country.products','uses'=>'Frontend\CategoriesController@country_productList']);
Route::get('category/products',['as'=>'category.products','uses'=>'Frontend\CategoriesController@category_productList']);
Route::get('product-sourcing/view/{id}/{catid}',['as'=>'sourceing.view.cat','uses'=>'Frontend\ServiceChannelController@sourcing_view_with_catid']);
Route::get('Sourcing/Requests/info/buyer',['as'=>'Sourcing.Requests.info.buyer','uses'=>'Frontend\ServiceChannelController@sourcing_requests_info_buyer']);

Route::get('product-sourcing/view/{id}',['as'=>'sourceing.view','uses'=>'Frontend\ServiceChannelController@sourcing_view']);
Route::get('services',['as'=>'bdtdc.service','uses'=>'Frontend\ServiceChannelController@bdtdc_service']);



Route::get('get-quotations_product', ['as' => 'get.qutations', 'uses' => 'Frontend\BuyerChannelController@qutation']);
Route::get('get-quotations/{id}', ['as' => 'get.qutations.product', 'uses' => 'Frontend\BuyerChannelController@qutation']);
Route::get('get-quotations', ['as' => 'get.qutations', 'uses' => 'Frontend\BuyerChannelController@qutation']);
Route::post('get_quotations', ['as' => 'get.qutations', 'uses' => 'Frontend\BuyerChannelController@store_qutation']);
Route::get('get_qutations_search_product', ['as' => 'get.qutations', 'uses' => 'Frontend\BuyerChannelController@get_qutations_search_product']);

Route::get('supplier/quote/{id}',['as'=>'postQuote.form','uses'=>'Frontend\BuyerChannelController@quote_from']);

Route::post('quotations_form/success/quote',['as'=>'postQuote.form.store','uses'=>'Frontend\BuyerChannelController@quote_form_store']);

Route::post('quotations_form/submit-message/{inqid}',['as'=>'postmsg.form.store','uses'=>'Frontend\BuyerChannelController@store_msg']);


Route::get('product-details/{name}={id}','Frontend\ProductController@get_product_show');
Route::get('selected/supplier-products',['as'=>'suppliers.find','uses'=>'Frontend\ProductController@home_selected_supplier_products']);
Route::get('selected-suppliers/{name}/{id}',['as'=>'selected_suppliers.country','uses'=>'Frontend\ProductController@country_home']);
Route::get('recommended-suppliers/products/{name}={id}','Frontend\ProductController@productList');
Route::get('product_suggesion/{term}/{supplier_id}','Frontend\ProductController@product_suggesion');

// country subcategory route
Route::get('{name}-{cat_name}/{id}/{cat_id}',['as'=>'bangladeshi.product','uses'=>'Frontend\ProductController@category_productList']);
// subcategory route
Route::get('{cat_name}/{id}/{cat_id}',['as'=>'bangladeshi.product','uses'=>'Frontend\ProductController@category_productList_single']);



Route::get('country_suggesion/{term}','RegistrationController@country_suggesion');

Route::get('get_inquires_by_filter/{group}','Frontend\SupplierController@get_inquires_by_filter');
//Route::get('inquery_action/{action}/{inquery_id}','dashboard\SupplierController@inquery_action');

Route::get('product-sourcing/details/{id}',['as'=>'sourcing.details','uses'=>'Frontend\ServiceController@bdtdc_sourcing_details']);


Route::get('product-sourcing',['as'=>'sourcing.list','uses'=>'Frontend\BdsourceController@bdtdc_sourcing']);
Route::get('Bdsource-home-page',['as'=>'bdsource.page','uses'=>'Frontend\BdsourceController@index']);
Route::get('megaMarch-sourcing-consumer',['as'=>'sourcing.list','uses'=>'Frontend\BdsourceController@megaMarch_sourcing_consumer']);

//pending below

Route::get('Sourcing/Requests/info',['as'=>'Sourcing.Requests.info','uses'=>'Frontend\QuotationController@sourcing_requests_info']);

Route::get('Sourcing/Requests/info/{id}',['as'=>'Sourcing.Requests.info','uses'=>'Frontend\QuotationController@sourcing_requests_info']);

Route::get('Sourcing/Requests_search/{info}/{id}',['as'=>'Sourcing.Requests.info.search','uses'=>'Frontend\QuotationController@sourcing_requests_info_search']);

Route::get('postBuyRequest/productId={id}',['as'=>'postBuyRequest.form','uses'=>'Frontend\QuotationController@postBuyRequest']);
Route::post('postBuyRequest',['as'=>'postBuyRequest.store','uses'=>'Frontend\QuotationController@storeBuyRequest']);
// Get Quotation
Route::get('get_qutations',function(){
    return Redirect::to('get-quotations');
} );
Route::get('get_quotations',function(){
    return Redirect::to('get-quotations');
} );

// page controller
Route::any('search-product/{search_value}', ['as'=>'search.product', 'uses'=>'Frontend\PagesController@search_store']);
Route::get('bangladesh-suppliers', ['as'=>'bangladesh.suppliers', 'uses'=>'Frontend\PagesController@bangladesh_suppliers']);
Route::get('{query}/search', ['as'=>'query.search', 'uses'=>'Frontend\filterController@search_filter']);
Route::get('{name}-{type}/pages', ['as'=>'country.type', 'uses'=>'Frontend\filterController@data_filter']);
Route::get('bangladesh-suppliers/{search_value}', ['as'=>'bangladesh.suppliers', 'uses'=>'Frontend\PagesController@bangladesh_suppliers']);
Route::get('bangladesh-trade', ['as'=>'bangladesh.trade', 'uses'=>'Frontend\PagesController@bangladesh_trade']);
Route::get('contact', ['as' => 'contact', 'uses' => 'Frontend\PagesController@getContact']);

// main category route
Route::group(array('prefix' => '{category}'), function(){
    Route::get('/{parent_id}',function($category,$parent_id){
        return App::make('App\Http\Controllers\Frontend\CategoriesController')->product_filter($parent_id,$category);
    });


Route::get('buyer-list','Frontend\limitedController@buyer');

Route::get('security-list','Frontend\limitedController@security');


});

// FormController
Route::get('bangladesh-garments','Frontend\FormController@bangladeshi_garments');
//Route for sitemap search
Route::get('sitemap',['as'=>'sitemap','uses'=>'Frontend\FormController@bdtdc_sitemap']);
//Route::post('sitemap-search',['as'=>'sitemap_search','uses'=>'Frontend\FormController@bdtdc_sitemap_search']);
Route::get('sitemap/{type}/{data}',['as'=>'sitemap-showroom','uses'=>'Frontend\FormController@sitemap_search']);
Route::get('{type}-{keyword}/{key}',['as'=>'type.key','uses'=>'Frontend\FormController@product_details']);

// wholesale
Route::get('wholesale/','Frontend\WholesaleController@index');
Route::get('wholesale/category/product/{id}',['as'=>'wholesale.category.product','uses'=>'Frontend\WholesaleController@product_list']);

//
/*
Route::get('{prefix}/{sort_name}/{id}',function($prefix,$sort_name, $id)
    {
        return App::make('App\Http\Controllers\Frontend\\'.$prefix.'Controller')->$sort_name($id);
    });

*/
Route::group(array('prefix' => '{prefix}'), function()
{
   Route::get('{sort_name}/{id}',function($prefix,$sort_name, $id)
    {
        return App::make('App\Http\Controllers\Frontend\\'.$prefix.'Controller')->$sort_name($id);
    });
});

Route::group(array('prefix' => '{prefix}'), function()
{
    Route::get('help_center/{slug}/{id}',function($prefix,$slug, $id)
    {
        return App::make('App\Http\Controllers\\'.$prefix.'Controller')->$slug($id);
    });
});
 /* 

Route::group(array('prefix' => '{prefix}'), function()
{
    Route::get('help_center/{slug}/{id}',function($prefix,$slug, $id)
    {
        return App::make('App\Http\Controllers\\'.$prefix.'\\'.$prefix.'Controller')->$slug($id);
    });
});
*/
/*
Route::get('{sort_name}/{id}',function($prefix,$sort_name, $id)
    {
        return App::make('App\Http\Controllers\Frontend\\'.$prefix.'Controller')->$sort_name($id);
    });

Route::get('help_center/{slug}/{id}',function($prefix,$slug, $id)
    {
        return App::make('App\Http\Controllers\Frontend\\'.$prefix.'Controller')->$slug($id);
});*/

/*
*/


Route::get('/send', 'SendMessageController@send_message_index')->name('send');
Route::post('/postMessage', 'SendMessageController@sendMessage')->name('postMessage');

