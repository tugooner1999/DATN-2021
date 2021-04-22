<?php
namespace App\Http\Controllers;
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
Route::get('/', function () {
    return redirect()->route('client.homepage');
});
Route::prefix('admin')->group(function () {
        // dashboard
        Route::get('/',[Admin\DashboardController::class , 'admin'])->name('admin.dashboard');

        // total-cash
        Route::get('/total-cash',[Admin\TotalCashController::class , 'index'])->name('admin.totalCash');

        // about
        Route::get('/about', [Admin\AboutController::class , 'index'])->name('admin.listAbout');
        Route::get('/about/add', [Admin\AboutController::class , 'create_about'])->name('admin.createAbout');
        Route::post('about/add', [Admin\AboutController::class , 'saveAbout'])->name('admin.saveAbout');
        Route::match(['get','post'],'/about/delete/{id}',[Admin\AboutController::class, 'destroy'])
        ->where(['id'=>'[0-9]+'])
        ->name('admin.deteleAbout');
        Route::get('/about/editAbout/{id}',[Admin\AboutController::class , 'edit_about'])->name('admin.editAbout');
        Route::post('/about/editAbout/{id}', [Admin\AboutController::class, 'update_about'])->name('admin.save-update-form');

        // category
        Route::get('/categories', [Admin\CategoryController::class , 'index'])->name('admin.listCate');
        Route::match(['get', 'post'], '/categories/add-cate',[Admin\CategoryController::class , 'addCategory'])->name('admin.addCate');
        Route::match(['get','post'],'/categories/edit-cate/{id}',[Admin\CategoryController::class , 'edit_category'])->name('admin.editCate');
        Route::match(['get','post'],'/categories/delete/{id}',[Admin\CategoryController::class , 'destroy'])->where(['id'=>'[0-9]+'])->name('admin.deteleCate');
        Route::match(['get','post'], '/categories/update/{id}',  [Admin\CategoryController::class, 'update_category']);
        // product
        Route::get('/products', [Admin\ProductController::class , 'index'])->name('admin.listProduct');
        Route::post('/products', [Admin\ProductController::class , 'index'])->name('admin.listProduct');
        Route::get('/products/add', [Admin\ProductController::class , 'create_product'])->name('admin.createProduct');
        Route::match(['get','post'], '/products/edit/{id}', [Admin\ProductController::class , 'edit_product'])->name('admin.editProduct');
        Route::match(['get','post'],'/products/remove/{id}', [Admin\ProductController::class , 'deleteProduct'])->name('admin.removeProduct');
        Route::post('/products/add', [Admin\ProductController::class, 'addProduct'])->name('admin.addProduct');
        Route::match(['get','post'], '/products/update/{id}',  [Admin\ProductController::class, 'updateProduct'])->name('admin.updateProduct');
        Route::get('/product/{id}',[Admin\ProductController::class, 'show'])->name('product-show');
        Route::get('product/edit/{id}',[Admin\ProductController::class, 'destroy'])->name('product-delete');

        // order
        Route::get('/order',  [Admin\OrderController::class , 'index'])->name('admin.listOrder');
        Route::get('/order/edit',  [Admin\OrderController::class , 'edit_order'])->name('admin.editOrder');
        Route::get('/order/{id}',  [Admin\OrderController::class , 'order_update'])->name('order-update');
        // transaction
        Route::get('/transaction', [Admin\TransactionController::class , 'index'])->name('admin.listTransaction');

        // voucher
        Route::get('/voucher',  [Admin\VoucherController::class , 'index'])->name('admin.listVoucher');
        Route::get('/voucher/add',  [Admin\VoucherController::class , 'create_voucher'])->name('admin.addVoucher');
        Route::post('/voucher/add', [Admin\VoucherController::class, 'saveAdd'])->name('admin.save-add-form');
        Route::get('/voucher/edit-voucher/{id}',[Admin\VoucherController::class , 'edit_voucher'])->name('admin.editVoucher');
        Route::post('/voucher/edit-voucher/{id}', [Admin\VoucherController::class, 'update_voucher'])->name('admin.save-update-form');
        Route::match(['get','post'],'/voucher/delete/{id}',[Admin\VoucherController::class, 'destroy'])
        ->where(['id'=>'[0-9]+'])
        ->name('admin.deteleVoucher');

        // mail
        Route::get('/send-mail-voucher/{id}',  [Admin\MailController::class , 'sendMailVoucher'])->name('admin.sendMailVoucher');

        // user
        Route::get('/user', [Admin\UserController::class, 'index'])->name('admin.listUser');
        Route::match(['get','post'],'/user/add', [Admin\UserController::class, 'create_User'])->name('admin.addUser');
        Route::match(['get','post'],'/user/edit/{id}',[Admin\UserController::class, 'edit_user'])
        ->where(['id'=>'[0-9]+'])
        ->name('admin.editUser');
        Route::match(['get','post'], '/user/update/{id}',  [Admin\UserController::class, 'updateUser'])->name('admin.updateUser');
        Route::match(['get','post'],'/user/delete/{id}',[Admin\UserController::class, 'destroy'])
        ->where(['id'=>'[0-9]+'])
        ->name('admin.deteleUser');

        // comment
        Route::get('/comment', [Admin\CommentController::class , 'index'])->name('admin.listComment');
        Route::match(['get','post'], '/comment/remove/{id}', [Admin\CommentController::class, 'deleteComment'])->name('admin.removeComment');

        // profile
        Route::get('/profile', [Admin\ProfileController::class , 'index'])->name('admin.profile');

        // slider
        Route::get('/slider',  [Admin\SliderController::class , 'index'])->name('admin.listSlider');
        Route::match(['get', 'post'], '/slider/add-slider', [Admin\SliderController::class , 'addSlider'])->name('admin.addSlider');
        Route::match(['get', 'post'], '/slider/edit-slider/{id}', [Admin\SliderController::class , 'editSlider'])->name('admin.editSlider');
        Route::match(['get','post'],'/slider/delete/{id}',[Admin\SliderController::class , 'destroy'])->where(['id'=>'[0-9]+'])->name('admin.deteleSlider');
});




        // CLIENT
        Route::prefix('client')->group(function () {
        // homepage
        Route::get('/',  [Client\HomepageController::class , 'index'])->name('client.homepage');


        // product
        Route::get('/shop', [Client\ProductController::class , 'index'])->name('client.shop');
        Route::get('/shop/{id}', [Client\ProductController::class , 'cate_product'])->where('id', '[0-9]+')->name('client.cate-product');
        Route::get('/allow-market', [Client\ProductController::class , 'allow_market'])->name('client.allow-market');
        Route::get('/single-product/{id}', [Client\ProductController::class , 'single_Product'])->where('id', '[0-9]+')->name('client.single-product');
        
        // comment product
        Route::match(['get', 'post'], '/single-product/rating/{id}', [Client\CommentController::class , 'postComment'])
        ->name('post.rating.product');

        // about
        Route::get('/about',  [Client\AboutController::class , 'index'])->name('client.about');

        // contact
        Route::get('/contact', [Client\ContactController::class , 'index'])->name('client.contact');
        Route::post('/contact', [Client\ContactController::class , 'postcontact'])->name('client.postcontact');

        // Add voucher
        Route::post('/add-voucher-to-cart', [Admin\VoucherController::class , 'addVoucherToCart'])->name('client.addVoucherToCart');
        // cart
        Route::get('/cart', [Client\CartController::class , 'index'])->name('client.cart');
        Route::post('/check-out', [Client\CartController::class , 'checkOut'])->name('client.checkOut');
        Route::post('/add-to-cart', [Client\CartController::class , 'addToCart'])->name('client.add-to-cart');
        Route::post('/update-cart', [Client\CartController::class , 'updateCart'])->name('client.update-cart');
        Route::post('/remove-product-in-cart', [Client\CartController::class , 'removeProductInCart'])->name('client.remove-product-in-cart');

        // login - register
        Route::get('login', [Client\AuthController::class, 'login_form'])->name('client.login');
        Route::post('/login', [Client\AuthController::class , 'postLogin']);
        Route::get('loginErr', [Client\AuthController::class, 'login_form_err'])->name('client.login.err');
        Route::post('/loginErr', [Client\AuthController::class , 'postLogin']);

        Route::get('/logout', [Client\AuthController::class, 'Logout'])     ->name('Auth.Logout');
        Route::post('/registration', [Client\AuthController::class , 'registration'])->name('client.registration');
        // wishlist
        Route::get('/wishlist',  [Client\WishlistController::class , 'index'])->name('client.wishlist');
});


// rating
// Route::group(['prefix' => 'ajax'], function(){
//         Route::match(['get', 'post'], 'client/single-product/rating/{id}', [Client\CommentController::class, 'postComment'])->name('post.rating.product');
// });
        //chuyển trang phân quyền user
        Route::get('/client-admin',[Client\HomepageController::class , 'client_admin'])->name('client-admin');
