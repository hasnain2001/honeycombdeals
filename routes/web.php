<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Models\Blog;
use App\Models\Stores;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy', function () {
    return view('privacy');
});


Route::get('/term-and-condition', function () {
    return view('term-and-condition');
});


// Route for the contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// Route for the blog homepage
// routes/web.php




Route::get('/coupon', [HomeController::class, 'index'])->name('coupon');

// Route for store details
Route::get('/store-details/{name}', [HomeController::class, 'storeDetails'])->name('store.details');


// Route for search
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search_results', [SearchController::class, 'searchResults'])->name('search_results');








Route::get('/master', [HomeController::class, 'showRelatedBlogs'])->name('related-blogs');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');

Route::get('/related_category/{title}', [HomeController::class, 'RelatedCategoryStores'])->name('related_category');












Route::get('/run-migrations', function () {
    $exitCode = Artisan::call('migrate:fresh');

    // Capture the output of the command
    $output = Artisan::output();

    return "Exit Code: $exitCode <br> Output: <pre>$output</pre>";
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/stores', 'stores')->name('stores');
    Route::get('/store/{name}', 'StoreDetails')->name('store_details');
  

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Blog Routes Begin
Route::prefix('admin')->group(function () {
    Route::get('/Blog', [DemoController::class, 'blog'])->name('admin.blog');
    Route::get('/Blog/create', [DemoController::class, 'create'])->name('admin.blog.create');
    Route::post('/Blog/store', [DemoController::class, 'store'])->name('admin.blog.store');
    Route::get('/Blog/{id}/edit', [DemoController::class, 'edit'])->name('admin.blog.edit');
    Route::post('/admin/Blog/update/{id}', [DemoController::class, 'update'])->name('admin.Blog.update');
    Route::delete('/admin/Blog/{id}', [DemoController::class, 'destroy'])->name('admin.blog.delete');
    
Route::get('/blog', [DemoController::class, 'blog_home'])->name('blog');
Route::get('/blog-details/{title}', [DemoController::class, 'blog_show'])->name('blog-details');
});
// Stores Routes Begin
Route::controller(StoresController::class)->prefix('admin')->group(function () {
    Route::get('/store', 'store')->name('admin.store');
    Route::get('/store/create', 'create_store')->name('admin.store.create');
    Route::post('/store/store', 'store_store')->name('admin.store.store');
    Route::get('/store/edit/{id}', 'edit_store')->name('admin.store.edit');
    Route::post('/store/update/{id}', 'update_store')->name('admin.store.update');
    Route::get('/store/delete/{id}', 'delete_store')->name('admin.store.delete');
});

// Categories Routes Begin
Route::controller(CategoriesController::class)->prefix('admin')->group(function () {
    Route::get('/category', 'category')->name('admin.category');
    Route::get('/category/create', 'create_category')->name('admin.category.create');
    Route::post('/category/store', 'store_category')->name('admin.category.store');
    Route::get('/category/edit/{id}', 'edit_category')->name('admin.category.edit');
    Route::post('/category/update/{id}', 'update_category')->name('admin.category.update');
    Route::get('/category/delete/{id}', 'delete_category')->name('admin.category.delete');
});

// Networks Routes Begin
Route::controller(NetworksController::class)->prefix('admin')->group(function () {
    Route::get('/network', 'network')->name('admin.network');
    Route::get('/network/create', 'create_network')->name('admin.network.create');
    Route::post('/network/store', 'store_network')->name('admin.network.store');
    Route::get('/network/edit/{id}', 'edit_network')->name('admin.network.edit');
    Route::post('/network/update/{id}', 'update_network')->name('admin.network.update');
    Route::get('/network/delete/{id}', 'delete_network')->name('admin.network.delete');
});

// Coupons Routes Begin
Route::get('coupons', [CouponsController::class, 'index'])->name('coupons.index');

Route::get('/coupon/fetch', [CouponsController::class, 'fetchCoupons'])->name('admin.coupon.fetch');

Route::post('/coupon/update-order', [CouponsController::class, ''])->name('admin.coupon.updatePosition');


Route::controller(CouponsController::class)->prefix('admin')->group(function () {
    Route::get('/coupon', 'coupon')->name('admin.coupon');
    Route::get('/coupon/create', 'create_coupon')->name('admin.coupon.create');
    Route::post('/coupon/store', 'store_coupon')->name('admin.coupon.store');
    Route::get('/coupon/edit/{id}', 'edit_coupon')->name('admin.coupon.edit');
    Route::post('/coupon/update/{id}', 'update_coupon')->name('admin.coupon.update');
    Route::get('/coupon/delete/{id}', 'delete_coupon')->name('admin.coupon.delete');
    Route::post('/custom-sortable', 'update')->name('custom-sortable');
});

require __DIR__.'/auth.php';
