<?php
session_start();
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

Route::get('/',"HomeController@index");
Route::get('doctors',"HomeController@doctors");
Route::get('rezerv_days/{id}',"HomeController@rezervDays");
Route::get('rezerv_times/{doctor_id}/{date}',"HomeController@rezervTimes");
Route::get('rezerv_doctor/{doctor_id}/{time}/{date}',"HomeController@rezervDoctorView");
Route::post('rezerv',"HomeController@rezervDoctor");
Route::post('search_doctor',"HomeController@searchDoctor");

Route::get('normal_questions',"HomeController@normalQuestions");

Route::group(['prefix' => 'admin'],function () {
    Auth::routes();
});

//, 'middleware' => [\App\Http\Middleware\Authenticate::class,\App\Http\Middleware\CheckAdmin::class,\App\Http\Middleware\CheckAdminVerify::class]
Route::group(['prefix' => 'admin'],function () {
    Route::get('/',"AdminController@index");
    Route::get('/users',"AdminController@users");
    Route::get('/active/agents',"AdminController@active_agents");
    Route::post('/active/agent',"AdminController@active_agents_id");
    Route::get('/deactive/agents',"AdminController@deactive_agents");
    Route::get('/agent/users/deactive/{id}',"AdminController@agents_user_deactive");
    Route::get('/agent/users/active/{id}',"AdminController@agents_user_active");
    Route::get('/agent/user/toggle/status/{id}',"AdminController@agent_user_toggle_status_id");
    Route::get('/agent/user/active/all/status/{id}',"AdminController@agent_user_active_all_status_id");
    Route::get('/user',"AdminController@user");
    Route::get('/carts',"AdminController@carts");
    Route::get('/carts/{status}',"AdminController@cartsStatus");
    Route::get('/carts/{cart_id}/{status}',"AdminController@change_status_cart");
    Route::post('/carts/change/status/cart/data',"AdminController@change_status_cart_data");
    Route::post('/user/add',"AdminController@addUser");
    Route::post('/user/search',"AdminController@searchUser");
    Route::post('/users',"AdminController@FilterUsers");
    Route::get('/packages',"AdminController@packages");
    Route::get('/package',"AdminController@package");
    Route::post('/package',"AdminController@package_add");
    Route::get('/register',"AdminController@register");
    Route::post('/create/admin',"AdminController@admin_creator");

    //doctors
    Route::get('/doctor/fields',"AdminController@fields");
    Route::get('/doctor/field/add',"AdminController@addFieldView");
    Route::post('/doctor/field/add',"AdminController@addField");
    Route::get('/doctor/field/update/{id}',"AdminController@updateFieldView");
    Route::post('/doctor/field/update',"AdminController@updateField");
    Route::get('/doctor/field/delete/{id}',"AdminController@deleteField");
    Route::get('/active/doctor/{id}',"AdminController@toggleStatusDoctor");
    Route::get('/deactive/doctor/{id}',"AdminController@toggleStatusDoctor");

    Route::get('/doctors',"AdminController@doctors");
    Route::get('/doctor/add',"AdminController@addDoctorView");
    Route::post('/doctor/add',"AdminController@addDoctor");
    Route::get('/doctor/update/{id}',"AdminController@updateDoctorView");
    Route::post('/doctor/update',"AdminController@updateDoctor");
    Route::get('/doctor/delete/{id}',"AdminController@deleteDoctor");
    Route::get('/doctor/add_favorite/{id}',"AdminController@addDoctorToFavoritesView");
    Route::post('/doctor/add_favorite',"AdminController@addDoctorToFavorites");
    Route::get('/doctor/del_favorite/{id}',"AdminController@deleteDoctorFromFavorites");
    Route::get('/doctor/favorites',"AdminController@favorites");
    Route::get('/doctor/del_document/{field_id}',"AdminController@del_document");

    Route::get('slider',"SliderController@slider");
    Route::post('slider/image/add',"SliderController@slider_add_image");
    Route::get('slider/image/delete/{id}',"SliderController@slider_delete_image");
    //blog
    Route::get('blogs',"BlogController@blogs");
    Route::post('blog/add',"BlogController@blog_add");
    Route::get('blog/update/{id}',"BlogController@blog_update_view");
    Route::get('blog/delete/{id}',"BlogController@blog_delete");
    Route::get('blog/category',"BlogController@blog_category");
    Route::post('blog/category/add',"BlogController@blog_category_add");
    Route::get('blog/category/delete/{id}',"BlogController@blog_category_delete");
    Route::post('blog/update',"BlogController@blog_update");


    Route::get('/support/tickets',"AdminController@tickets");
    Route::post('/support/send/message/{user_id}/{code}',"AdminController@send_message");
    Route::get('/support/ticket/{user_id}/{code}',"AdminController@ticket");
    Route::get('/agent/set/package/{id}',"AdminController@agent_set_package");
    Route::get('/agent/remove/package/{id}',"AdminController@agent_remove_package");
    Route::post('/agent/set/package/save',"AdminController@agent_set_package_save");


    Route::get('/percentage',"AdminController@percentage");
    Route::post('/percentage/reg',"AdminController@percentagereg");

});
    Route::get('admin/login',"AdminController@login")->name("admin/login");
    Route::get('admin/verify',"AdminController@verify")->name("admin/verify");
    Route::get('admin/cverify',"AdminController@verify_creator")->name("admin/cverify");
    Route::post('admin/verify/check',"AdminController@verifyCheck");
//, 'middleware' => [\App\Http\Middleware\CheckUser::class]
Route::group(['prefix' => 'user', 'middleware' => [\App\Http\Middleware\CheckUser::class]],function () {
    Route::get('/',"UserController@index");
    Route::get('/service',"UserController@service");
    Route::get('/basket',"UserController@basket");
    Route::get('/cart',"UserController@cart");
    Route::post('/package/order',"UserController@package_order");
    Route::post('/package/pay',"UserController@pay_package");

    Route::get('/support/tickets',"SupportController@tickets");
    Route::post('/support/send/ticket',"SupportController@send_ticket");
    Route::post('/support/send/message/{code}',"SupportController@send_message");
    Route::get('/support/ticket/{code}',"SupportController@ticket");

    Route::get('/marketer',"UserController@marketer");

    Route::get('/credit',"UserController@credit");
});
Route::get('/user/login',"registerController@phone");
Route::post('user/send/verify',"registerController@sendVerify");
Route::post('/user/verify',"registerController@verify");
Route::post('/user/register',"registerController@register");


Route::group(['prefix' => 'agent', 'middleware' => [\App\Http\Middleware\CheckAgent::class]],function () {
    Route::get('/',"AgentController@index");
    Route::get('/user',"AgentController@user");
    Route::get('/users',"AgentController@users");
    Route::post('/user/add',"AgentController@add_user");
    Route::get('/user/package/{id}',"AgentController@package");
    Route::post('/user/package/order',"AgentController@package_order");
    Route::get('user/basket/{id}',"AgentController@basket");
    Route::get('user/u_basket',"AgentController@u_basket");
    Route::get('user/cart/{id}',"AgentController@cart");

    Route::get('/support/tickets',"SupportController@tickets");
    Route::post('/support/send/ticket',"SupportController@send_ticket");
    Route::post('/support/send/message/{code}',"SupportController@send_message");
    Route::get('/support/ticket/{code}',"SupportController@ticket");

    Route::get('/marketer',"AgentController@marketer");
    Route::get('/credit',"AgentController@credit");
    Route::post('/marketer/register',"AgentController@marketer_register");

    Route::post('/payment',"AgentController@payment");
    Route::get('/payment/verify',"AgentController@verify_payment");
    Route::get('/transactions',"AgentController@transactions");

    Route::post('/buy/for/user',"AgentController@buy_for_user");
});
Route::get('/agent/login',"registerController@phone_agent");
Route::post('agent/send/verify',"registerController@sendVerify_agent");
Route::post('/agent/verify',"registerController@verify_agent");
Route::post('/agent/register',"registerController@register_agent");

//doctors
//
Route::group(['prefix' => 'doctor', 'middleware' => ['CheckDoctor']],function () {
    Route::get('/',"DoctorController@index");
    Route::get('/times',"DoctorController@times");
    Route::post('/times',"DoctorController@addTimes");
    Route::get('/rezerv',"DoctorController@rezerv");
    Route::get('/self_rezerv',"DoctorController@selfRezerv");
    Route::get('/self_rezerv_times/{doctor_id}/{date}',"DoctorController@selfRezervTimes");
    Route::get('rezerv_doctor/{doctor_id}/{time}/{date}',"DoctorController@rezervDoctorView");
    Route::post('rezerv_doctor',"DoctorController@rezervDoctor");
    Route::get('credit','DoctorController@credit');


});
Route::get('/doctor/login',"registerController@phone_doctor");
Route::post('doctor/send/verify',"registerController@sendVerify_doctor");
Route::post('/doctor/verify',"registerController@verify_doctor");
Route::post('/doctor/register',"registerController@register_doctor");

//, 'middleware' => [\App\Http\Middleware\CheckOrgan::class]
Route::group(['prefix' => 'organ'],function () {
    Route::get('/',"organController@index");
    Route::get('/user',"organController@user");
    Route::get('/users',"organController@users");
    Route::post('/user/add',"organController@add_user");
    Route::get('/user/package/{id}',"organController@package");
    Route::post('/user/package/order',"organController@package_order");
    Route::get('user/basket/{id}',"organController@basket");
    Route::get('user/u_basket',"organController@u_basket");
    Route::get('user/paid_u_basket',"organController@paid_u_basket");
    Route::get('user/cart/{id}',"organController@cart");
    Route::get('user/delete/{id}',"organController@delete");

    Route::get('/support/tickets',"SupportController@tickets");
    Route::post('/support/send/ticket',"SupportController@send_ticket");
    Route::post('/support/send/message/{code}',"SupportController@send_message");
    Route::get('/support/ticket/{code}',"SupportController@ticket");

    Route::post('/payment',"organController@payment");
    Route::post('/payment/verify',"organController@verify_payment");
});
Route::get('/organ/login',"registerController@phone_organ");
Route::post('organ/send/verify',"registerController@sendVerify_organ");
Route::post('/organ/verify',"registerController@verify_organ");
Route::post('/organ/register',"registerController@register_organ");



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main/logout/all/users', 'HomeController@logoutAll')->name('/main/logout/all/users');
