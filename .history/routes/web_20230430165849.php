<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
//use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CheckoutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\user\UserDashboardComponent;
//use App\Http\Livewire\user\UserOrdersComponent;
//use App\Http\Livewire\user\UserOrderDetailsComponent;
//use App\Http\Livewire\user\UserReviewComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminCategoriesComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminProductComponent;
use App\Http\Livewire\admin\AdminUsersComponent;
use App\Http\Livewire\admin\AdminAddProductComponent;
use App\Http\Livewire\admin\AdminEditProductComponent;
//use App\Http\Livewire\admin\AdminContactComponent;
//use App\Http\Livewire\admin\AdminOrderComponent;
//use App\Http\Livewire\admin\AdminOrderDetailsComponent;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    //Route::get('/user/orders',UserOrdersComponent::class)->name('user.orders');
    //Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');
   // Route::get('/user/review/{order_item_id}',UserReviewComponent::class)->name('user.review');

});
//For admin
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');


    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products}',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add}',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    //Route::get('/admin/contact-us',AdminContactComponent::class)->name('admin.contact');
    //Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
    //Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');


});
Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponent::class)->name('shop');
//Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/cart',CartComponent::class)->name('shop.cart');
Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');
//Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
//Route::get('/search',SearchComponent::class)->name('product.search');
//Route::get('/contact-us',ContactComponent::class)->name('contact');
//Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');
require __DIR__.'/auth.php';
