<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>['user.auth']],function (){
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/register', [HomeController::class, 'register'])->name('register');
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/messages', [\App\Http\Controllers\UserController::class, 'messages'])->name('messages');

    Route::get('/advertise', [\App\Http\Controllers\UserController::class, 'advertise'])->name('advertise');
    Route::post('/add_advertise', [\App\Http\Controllers\UserController::class, 'add_advertise'])->name('add_advertise');
    Route::post('/sendMessage', [\App\Http\Controllers\UserController::class, 'sendMessage'])->name('sendMessage');
    Route::post('/favorites', [\App\Http\Controllers\UserController::class, 'favorites'])->name('favorites');
    Route::post('/addcomment', [\App\Http\Controllers\UserController::class, 'addcomment'])->name('addcomment');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::post('/contactmessage', [HomeController::class, 'contactmessage'])->name('contactmessage');

Route::get('/cardetail/{id}', [\App\Http\Controllers\CarController::class, 'cardetail'])->name('cardetail');
Route::get('/carlist', [\App\Http\Controllers\CarController::class, 'carlist'])->name('carlist');

Route::post('/logincontroller',[HomeController::class,'logincontroller'])->name('logincontroller');
Route::post('/registercontrol',[HomeController::class,'registercontrol'])->name('registercontrol');
Route::get('/logout',[HomeController::class,'logout'])->name("logout");

Route::redirect('/', '/home');

Route::get('/otomobil', [HomeController::class, 'cars']);

Route::post('/ajaxdistricts',[HomeController::class,'getdistricts'])->name('ajaxdistricts');
Route::post('/ajaxbrand',[HomeController::class,'getmodels'])->name('ajaxbrand');
Route::post('/ajaxmodel',[HomeController::class,'getequipment'])->name('ajaxmodel');
Route::post('/searchbar', [\App\Http\Controllers\HomeController::class, 'searchbar'])->name('searchbar');



// ADMIN ROOTS

Route::group(['middleware'=>['is_admin']],function (){
    Route::get('/admin/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name("admin_home");
    Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class, 'login'])->name("admin_login");

    Route::get('admin/register', [\App\Http\Controllers\Admin\HomeController::class, 'register'] )->name('admin_register');
    Route::post('admin/registersave', [\App\Http\Controllers\Admin\HomeController::class, 'registerSave'] )->name('admin_registerSave');
    Route::get('/admin/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name("admin_category");
    Route::get('/admin/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name("admin_category_add");
    Route::post('/admin/category/save', [\App\Http\Controllers\Admin\CategoryController::class, 'save'])->name("admin_category_save");
    Route::get('/admin/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name("admin_category_delete");
    Route::get('/admin/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name("admin_category_edit");
    Route::post('/admin/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name("admin_category_update");

    //settings
    Route::get('/admin/settings', [\App\Http\Controllers\Admin\SettingsController::class, 'index'])->name("admin_settings");
    Route::get('/admin/setting_add', [\App\Http\Controllers\Admin\SettingsController::class, 'add'])->name("admin_setting_add");
    Route::get('/admin/setting/edit/{id}', [\App\Http\Controllers\Admin\SettingsController::class, 'edit'])->name("admin_setting_edit");
    Route::post('/admin/setting/save', [\App\Http\Controllers\Admin\SettingsController::class, 'save'])->name("admin_setting_save");
    Route::post('/admin/setting/update/{id}', [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name("admin_setting_update");
    Route::get('/admin/setting/delete/{id}', [\App\Http\Controllers\Admin\SettingsController::class, 'delete'])->name("admin_setting_delete");


    //banners
    Route::get('/admin/banners', [\App\Http\Controllers\Admin\BannerController::class, 'index'])->name("admin_banners");
    Route::get('/admin/banner_add', [\App\Http\Controllers\Admin\BannerController::class, 'add'])->name("admin_banner_add");
    Route::get('/admin/banner/edit/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'edit'])->name("admin_banner_edit");
    Route::post('/admin/banner/save', [\App\Http\Controllers\Admin\BannerController::class, 'save'])->name("admin_banner_save");
    Route::post('/admin/banner/update/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'update'])->name("admin_banner_update");
    Route::get('/admin/banner/delete/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'delete'])->name("admin_banner_delete");


});
Route::get('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class, 'logout'])->name("admin_logout");
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name("admin_logincheck");
Route::redirect('admin/' ,'/admin/home');
