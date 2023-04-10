<?php

use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactPageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FooterContactController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ProdutController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\TraningController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Frontend\ClientMessageController;
use App\Http\Controllers\Frontend\CompanyController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\TraningController as FrontendTraningController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



//------------------------------------Start Frontend Section----------------------------------//

//frontend dashboard/home
Route::get('/', [FrontendController::class, 'index'])->name('/');

//category - product
Route::get('/product-category/{slug}',[FrontendController::class,'productCategory'])->name('product.category');
//subcategory - product
Route::get('/product-subcategory/{id}',[FrontendController::class,'productSubCategory'])->name('product.subcategory');

//pdf view category - product
Route::get('/view/{id}', [FrontendController::class, 'pdfView']);

//traning page controller
Route::get('/traning', [FrontendTraningController::class, 'traning'])->name('traning');
Route::get('/traning-details/{slug}', [FrontendTraningController::class, 'traningDescription'])->name('traning.description');

//photo gallary page
Route::get('/photo-gallery', [FrontendController::class, 'gallary'])->name('gallery');

//client page
Route::get('/our-client', [FrontendController::class, 'client'])->name('client');

//contact us page
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');

//client message controller
Route::resource('clientmessage', ClientMessageController::class);

//Product page
Route::get('/all-products', [ProductController::class, 'index'])->name('frontend.products');

//search product
Route::get('/search', [FrontendController::class, 'search']);
//company controller
Route::get('/company', [CompanyController::class, 'index'])->name('company');
//--------------------------- End Frontend section---------------------------------------------//


//--------------------------- Start backend section---------------------------------------------//

Auth::routes(['register'=>false]);

//admin dashboard controller section
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    //slider controller section
    Route::resource('/sliders', SliderController::class);
    Route::post('slider_status',[SliderController::class, 'sliderstatus'])->name('slider.status');

    //category controller section
    Route::resource('/category', CategoryController::class);
    Route::post('category_status',[CategoryController::class, 'categorystatus'])->name('category.status');

    //subcategory controller section
    Route::resource('/subcategory', SubcategoryController::class);

    //product controller section
    Route::resource('/products', ProdutController::class);
    //pdf download route
    Route::get('/download/{file}', [ProdutController::class, 'download']);
    //pdf view route
    Route::get('/view/{id}', [ProdutController::class, 'pdfView']);

    //Setting section
    Route::resource('settings', SettingsController::class);

    //about controller section
    Route::resource('abouts', AboutController::class);

    //clients section
    Route::resource('clients', ClientController::class);
    Route::post('client_status',[ClientController::class, 'clientstatus'])->name('client.status');

    //Gallery controller
    Route::get('/all-gallary', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/create-gallary', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/create-store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/delete-gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    //FooterContact controller
    Route::resource('footercontact', FooterContactController::class);

    //Contact Page controller
    Route::resource('contactpage', ContactPageController::class);

    //traning Page controller
    Route::resource('traning', TraningController::class);

    //user controller
    Route::resource('user', UserController::class);
});
//--------------------------- End backend section---------------------------------------------//