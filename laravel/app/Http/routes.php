<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//列表
Route::group(['namespace'=>'Home','prefix' =>'Part'], function () {
    Route::any('lists',['uses'=>'PartController@lists']);
    Route::any('category',['uses'=>'PartController@category']);
    Route::any('part_details',['uses'=>'PartController@part_details']);
    Route::any('get_zodiac',['uses'=>'PartController@get_zodiac']);
});

//中间件
Route::group(['middleware' => ['web'],'namespace' =>'Home','prefix' =>'Home'],function () {
    Route::any('Login/login_index','LoginController@login_index');
    Route::any('Login/login','LoginController@login');
    Route::any('Login/register_index','LoginController@register_index');
    Route::any('Login/register','LoginController@register');
    Route::any('Login/captcha','LoginController@captcha');
    Route::any('Login/register_add','LoginController@register_add');

    //发布兼职路由
    Route::any('Publish/jz',['uses'=>'PublishController@jz']);
    Route::any('Publish/add',['uses'=>'PublishController@add']);
    Route::any('Publish/sh',[
        'uses'=>'PublishController@sh'
    //        'as'=>'jianzhi'
    ]);
    //发布兼职路由
});


//路由群组  发布兼职 账户设置路由
Route::group(['namespace' =>'Home', 'prefix' =>'Home'],function () {
    Route::any('Publish/qx',['uses'=>'PublishController@qx']);
    Route::any('User/userset',['uses'=>'UserController@userset']);
    Route::any('User/userset_resume',['uses'=>'UserController@userset_resume']);
//    Route::any('User/userset_picture',['uses'=>'UserController@userset_picture']);
    Route::any('User/userset_password',['uses'=>'UserController@userset_password']);
    Route::any('User/userset_email',['uses'=>'UserController@userset_email']);
    Route::any('User/userset_emailbound',['uses'=>'UserController@userset_emailbound']);
    Route::any('User/userset_account',['uses'=>'UserController@userset_account']);
    Route::any('User/updateData',['uses'=>'UserController@updateData']);
    Route::any('Upload/save',['uses'=>'UploadController@save']);
    Route::any('Upload/uploadDelete',['uses'=>'UploadController@uploadDelete']);

});
//路由群组  发布兼职 账户设置路由





Route::group(['namespace' => 'Home','prefix' => 'Home'], function () {
    Route::any('Wallet/wallet','WalletController@wallet');
    Route::any('Wallet/recharge','WalletController@recharge');
    Route::any('Wallet/putforward','WalletController@putforward');
    Route::any('Information/lists','InformationController@lists');
    Route::any('Information/detail','InformationController@detail');
});


//cat后台路由
Route::group(['namespace' => 'Admin','prefix' => 'Admin'], function () {
    Route::any('Index/index','IndexController@index');
    Route::any('Index/top','IndexController@top');
    Route::any('Index/left','IndexController@left');
    Route::any('Index/main','IndexController@main');
    Route::any('Index/footer','IndexController@footer');
});
