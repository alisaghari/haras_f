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

Route::get('/',"HomeController@index");
Route::get('doctors',"HomeController@doctors");
Route::get('rezerv_times/{id}',"HomeController@rezervTimes");

Route::group(['prefix' => 'admin'],function () {
    Auth::routes();
});

//, 'middleware' => [\App\Http\Middleware\Authenticate::class,\App\Http\Middleware\CheckAdmin::class,\App\Http\Middleware\CheckAdminVerify::class]
Route::group(['prefix' => 'admin'],function () {
    Route::get('/',"AdminController@index");
    Route::get('/users',"AdminController@users");
    Route::get('/agents',"AdminController@agents");
    Route::get('/agent/users/deactive/{id}',"AdminController@agents_user_deactive");
    Route::get('/agent/users/active/{id}',"AdminController@agents_user_active");
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
    Route::get('/create/admin',"AdminController@admin_creator");

    //doctors
    Route::get('/doctor/fields',"AdminController@fields");
    Route::get('/doctor/field/add',"AdminController@addFieldView");
    Route::post('/doctor/field/add',"AdminController@addField");
    Route::get('/doctor/field/update/{id}',"AdminController@updateFieldView");
    Route::post('/doctor/field/update',"AdminController@updateField");
    Route::get('/doctor/field/delete/{id}',"AdminController@deleteField");


    Route::get('/doctors',"AdminController@doctors");
    Route::get('/doctor/add',"AdminController@addDoctorView");
    Route::post('/doctor/add',"AdminController@addDoctor");
    Route::get('/doctor/update/{id}',"AdminController@updateDoctorView");
    Route::post('/doctor/update',"AdminController@updateDoctor");
    Route::get('/doctor/delete/{id}',"AdminController@deleteDoctor");

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

});
    Route::get('admin/login',"AdminController@login")->name("admin/login");
    Route::get('admin/verify',"AdminController@verify")->name("admin/verify");
    Route::get('admin/cverify',"AdminController@verify_creator")->name("admin/cverify");
    Route::post('admin/verify/check',"AdminController@verifyCheck");
//, 'middleware' => [\App\Http\Middleware\CheckUser::class]
Route::group(['prefix' => 'user'],function () {
    Route::get('/',"UserController@index");
    Route::get('/service',"UserController@service");
    Route::get('/basket',"UserController@basket");
    Route::get('/cart',"UserController@cart");
    Route::post('/package/order',"UserController@package_order");
    Route::post('/package/pay',"UserController@pay_package");

    Route::get('/support/ticket',"SupportController@ticket");
    Route::post('/support/send/ticket',"SupportController@send_ticket");
    Route::get('/support/tickets',"SupportController@tickets");
});
Route::get('/user/login',"UserController@phone");
Route::post('user/send/verify',"UserController@sendVerify");
Route::post('/user/verify',"UserController@verify");
Route::post('/user/register',"UserController@register");


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

});
Route::get('/agent/login',"AgentController@phone");
Route::post('agent/send/verify',"AgentController@sendVerify");
Route::post('/agent/verify',"AgentController@verify");
Route::post('/agent/register',"AgentController@register");

//doctors
Route::group(['prefix' => 'doctor'],function () {
    Route::get('/',"DoctorController@index");
    Route::get('/times',"DoctorController@times");
    Route::post('/times',"DoctorController@addTimes");
    Route::get('/rezerv',"DoctorController@rezerv");

});
Route::get('/doctor/login',"DoctorController@phone");
Route::post('doctor/send/verify',"DoctorController@sendVerify");
Route::post('/doctor/verify',"DoctorController@verify");
Route::post('/doctor/register',"DoctorController@register");


Route::group(['prefix' => 'kid'],function () {
    Route::get('/',"UserController@index");
});




Route::get('/home', 'HomeController@index')->name('home');
