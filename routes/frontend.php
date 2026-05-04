<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProductController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register frontend routes for your application.
| These routes are loaded by the RouteServiceProvider.
|
*/



Route::get('/', [FrontendController::class, 'test_home'])->name('test_home');
Route::get('/about', [FrontendController::class, 'test_about'])->name('test_about');
Route::get('/contact', [FrontendController::class, 'test_contact'])->name('test_contact');
Route::get('/shop', [FrontendController::class, 'test_shop'])->name('test_shop');
Route::get('/shop_detail', [FrontendController::class, 'test_shop_detail'])->name('test_shop_detail');
Route::get('/checkout', [FrontendController::class, 'test_checkout'])->name('test_checkout');
// Route::get('/test_shop_detail/{?id}', [FrontendController::class, 'test_shop_detail'])->name('test_shop_detail');

// ecommerce product 
Route::get('/old-shop', [ProductController::class, 'product'])->name('shop');
Route::get('product-category/{slug?}', [ProductController::class, 'productCategory'])->name('productCategory');
Route::get('product/details/{slug}',[ProductController::class, 'productDetails'])->name('productDetails');
Route::get('old-checkout',[ProductController::class, 'checkout'])->name('new.checkout');

// musafir international frontend routes start here
// Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/about',[HomeController::class,'about'])->name('about');
// Route::get('/shop',[HomeController::class,'shop'])->name('shop');
// Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/trade',[HomeController::class,'trade'])->name('trade');
Route::get('/delivery',[HomeController::class,'delivery'])->name('delivery');
Route::get('/return',[HomeController::class,'return'])->name('return');
Route::get('/damage',[HomeController::class,'damage'])->name('damage');
Route::get('/press',[HomeController::class,'press'])->name('press');
Route::get('/review',[HomeController::class,'review'])->name('review');
Route::get('/sample',[HomeController::class,'sample'])->name('sample');
Route::get('/html-sitemap',[HomeController::class,'html_sitemap'])->name('html.sitemap');
Route::get('/buying-guide',[HomeController::class,'buying_guide'])->name('buying.guide');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// language route 
Route::get('/language/change', [LanguageController::class, 'languageChange'])->name('welcome.changeLanguage');
// musafir international frontend routes end here
// Add more frontend routes...


Route::get('/clear', function () {
   Artisan::call('optimize:clear');
   return back();
})->name('clear_cache');

Route::get('image', function () {
    Artisan::call('storage:link');
    return back();
});

Route::get('/run-storage-link', function () {
    try {
        // Remove the existing storage link
        File::deleteDirectory(public_path('storage'));

        // Run the artisan command
        Artisan::call('storage:link');

        return "<pre>Storage link created successfully.\n" . Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        return "<pre>Error: " . $e->getMessage() . "</pre>";
    }
});


?>