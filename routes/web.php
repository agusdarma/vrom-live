<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FaqsController;
use App\Http\Controllers\Front\LangController;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\GoldenTrendController;
use App\Http\Controllers\Front\EuroSwingMasterController;
use App\Http\Controllers\Front\RepaymentController;
use App\Http\Controllers\Admin\ItemController as AdminItemController;
use App\Http\Controllers\Admin\TypeController as AdminTypeController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DashboardController as AdminDashBoardController;


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

Route::name('front.')->middleware(['setLocale']) ->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('lang/change/{lang}', [LangController::class, 'change'])->name('changeLang');
    Route::get('/euro-swing-master/{slug}', [EuroSwingMasterController::class, 'index'])->name('euro');
    Route::get('/golden-trend/{slug}', [GoldenTrendController::class, 'index'])->name('golden');
    Route::get('/faqs', [FaqsController::class, 'index'])->name('faq');
    Route::get('/detail/{slug}', [DetailController::class, 'index'])->name('detail');
    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/checkout/{slug}', [CheckoutController::class, 'index'])->name('checkout');
        Route::post('/checkout/{slug}', [CheckoutController::class, 'store'])->name('checkout.store');

        Route::get('/payment/index/{bookingId}', [PaymentController::class, 'index'])->name('payment');        
        Route::post('/payment/update/{bookingId}', [PaymentController::class, 'update'])->name('payment.update');

        Route::get('/repayment/update/{bookingId}', [RepaymentController::class, 'update'])->name('repayment.update');   
        Route::get('/repayment/index/{bookingId}', [RepaymentController::class, 'index'])->name('repayment');        
             
        
    });
});


Route::prefix('admin')->name('admin.')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isAdmin'
])->group(function () {
    Route::get('/dashboard', [AdminDashBoardController::class, 'index'])->name('dashboard');
    Route::resource('brands', AdminBrandController::class);
    Route::resource('types', AdminTypeController::class);
    Route::resource('items', AdminItemController::class);
    Route::resource('bookings', AdminBookingController::class);
});
