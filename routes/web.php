<?php
use App\Admin;
use App\Article;
use App\Nuser;
use Illuminate\Http\Request;


Route::get('/', 'SampleController@top');




Route::get('sample', 'SampleController@add') ;;
Route::post('sample', 'SampleController@create')->name('sample_create');;

Route::get('/sample-list', 'SampleController@list');
Route::get('/sample-edit/{id}', 'SampleController@edit')->name('sample_edit');;
Route::post('/sample-edit', 'SampleController@update')->name('sample_editpost');;

Route::get('/sample-delete/{id}', 'SampleController@delete')->name('sample_delete');;
Route::post('/sample-delete', 'SampleController@deletepost')->name('sample_deletepost');;




// nusers.blade.phpの表示　これから編集実施
Route::post('/nusers', function (Request $request) {
    //
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ================================ajax関連開始
Route::get('/ajax', 'SampleController@ajax');



// ================================ajax関連終了

// ================================マルチログイン関連
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function(){
    Route::get('/edit', 'UserController@edit')->name('user.edit');
    Route::post('/update', 'UserController@update')->name('user.update');
    Route::get('/article', 'ArticleController@home');
    Route::post('/article', 'ArticleController@create')->name('article_create');

    Route::get('/article-list', 'ArticleController@list');
    Route::get('/article-delete/{id}', 'ArticleController@delete')->name('article_delete');
    Route::post('/article-delete', 'ArticleController@deletepost')->name('article_deletepost');
    
    
    Route::get('/article-edit/{id}', 'ArticleController@edit')->name('article_edit');
    Route::post('/article-edit', 'ArticleController@update')->name('article_editpost');

    Route::get('/home', 'HomeController@index')->name('home');    
    
});

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function() {
    Route::get('/home', function () {
        return view('admin.home');
    });
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
    Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
    Route::get('password/rest', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');

    Route::get('admin-list', 'SampleController@adminlist');
    Route::get('admin-edit/{id}', 'SampleController@adminedit')->name('admin_edit');
    Route::post('admin-edit', 'SampleController@adminupdate')->name('admin_editpost');
    Route::get('admin-delete/{id}', 'SampleController@admindelete')->name('admin_delete');
    Route::post('admin-delete', 'SampleController@admindeletepost')->name('admin_deletepost');

    
});
// ================================
