<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdersController;
;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ShopController;

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



Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Auth::routes(['verify'=>true]);

Route::middleware('auth','IsAdmin')->prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'dashboard'])->name('admin');
    
Route::get('/addcategory',[CategoryController::class, 'addcategory'])->name('addcategory');
Route::get('/categories',[CategoryController::class,'categories'])->name('categories');
Route::post('/savecategory',[CategoryController::class,'savecategory'])->name('savecategory');
Route::get('/edit_category/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
Route::post('/updatecategory',[CategoryController::class,'updatecategory'])->name('updatecategory');
Route::get('/delete_category/{id}',[CategoryController::class,'delete_category'])->name('delete_category');
Route::get('/addmarque',[MarqueController::class, 'addmarque'])->name('addmarque');
Route::get('/marque',[MarqueController::class,'marques'])->name('marque');
Route::post('/savemarque',[MarqueController::class,'savemarque'])->name('savemarque');
Route::get('/edit_marque/{id}',[MarqueController::class,'edit_marque'])->name('edit_marque');
Route::post('/updatemarque',[MarqueController::class,'updatemarque'])->name('updatemarque');
Route::get('/delete_marque/{id}',[MarqueController::class,'delete_marque'])->name('delete_marque');

Route::get('/addslider',[SliderController::class, 'addslider'])->name('addslider');
Route::get('/sliders',[SliderController::class, 'sliders'])->name('sliders');


Route::get('/addproduct',[ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/products',[ProductController::class, 'products'])->name('products');
Route::post('/saveproduct',[ProductController::class, 'saveproduct'])->name('saveproduct');
Route::get('/edit_product/{id}',[ProductController::class, 'edit_product'])->name('edit_product');
Route::post('/upadateproduct',[ProductController::class, 'upadateproduct'])->name('upadateproduct');
Route::get('/delete_product/{id}',[ProductController::class, 'delete_product'])->name('delete_product');
Route::get('/activer_product/{id}',[ProductController::class, 'activer_product'])->name('activer_product');
Route::get('/desactiver_product/{id}',[ProductController::class, 'desactiver_product'])->name('desactiver_product');




});

Route::get('/select_par_cat/{category_name}', [ProductController::class, 'select_par_cat'])->name('select_par_cat');
Route::get('/select_par_marque/{marque_name}', [ProductController::class, 'select_par_marque'])->name('select_par_marque');
Route::post('/select_par_prix', [ProductController::class, 'select_par_prix'])->name('select_par_prix');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/addtocart/{id}',[App\Http\Controllers\ShopController::class, 'addtocart'])->name('addtocart');
Route::get('/add/{id}',[App\Http\Controllers\ShopController::class, 'shop'])->name('addtocart2');
Route::get('/removeItem/{id}',[App\Http\Controllers\ShopController::class, 'removeItem'])->name('removeItem');


Route::post('modify_quantity/{id}',[App\Http\Controllers\ShopController::class, 'modify_quantity'])->name('modify_quantity');
Route::get('/paiement',[OrdersController::class,'paiement'])->name('paiement')->middleware('verified','auth');


Route::get('/contact-us',[ContactController::class, 'contact'])->name('contact-us');
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');







Route::get('/article/{product_name}', [App\Http\Controllers\ArticleController::class, 'article'])->name('article');


Route::get('/cordonees',[OrdersController::class, 'cordonees'])->name('cordonees')->middleware('verified','auth');
Route::post('/livraison',[OrdersController::class, 'livraison'])->name('livraison');
// Route::get('paiement-success',[OrdersController::class, 'livraison'])->name('livraison');


Route::middleware('auth','IsAdmin')->group(function () {
Route::get('/orders',[OrdersController::class, 'orders'])->name('orders');
Route::get('/voircommandepdf/{id}',[PdfController::class, 'voir_pdf'])->name('voircommandepdf');

});

