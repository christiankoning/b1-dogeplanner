<?php

use App\Http\Controllers\OrderController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserWalkController;
use App\Http\Controllers\UserDogController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Middleware\Authenticate;

Route::resource('admin/walks', WalkController::class);
Route::resource('orders', OrderController::class);
Route::resource('admin/products',ProductController::class);
use App\Http\Controllers\ProfileController;
use App\Models\User;
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
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::resource('profile', ProfileController::class);

//  index
Route::get('/', function () {
    return view('index');
})->name('home');

//  about me
Route::get('/over-mij', function () {
    return view('about');
})->name('aboutme');

//  benefits
Route::get('/voordelen-uitlaatservice', function () {
    return view('benefits');
})->name('benefits');

// Protected URL only for logged in users

Route::middleware('auth')->group(function () {
/* User walk */
Route::resource('/walk', UserWalkController::class);

// User dog
Route::resource('/dog', UserDogController::class);
});

// Protected URL only for admins

Route::middleware('is_admin')->group(function () {
    //    Admin Home
    Route::get('/admin', function () {
        return view('admin/adminpage');
    })->name('admin');

    //    Admin Producten
    Route::resource("/admin/products",ProductController::class);

    //    Admin Gebruiker
    Route::resource("/admin/user",UserController::class);

    //    Admin Wandelingen
    Route::resource('admin/walks', WalkController::class);
    Route::get('admin/walks/{walk}/accept', [WalkController::class, 'accept'])->name('walk.accept');
    Route::get('admin/walks/{walk}/denied', [WalkController::class, 'denied'])->name('walk.denied');


    //    Admin Betalingen
    Route::get('/adminpayment', function () {
        return view('admin/admin_payment');
    });
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//  index
Route::get('/', function () {
    return view('index');
})->name('home');

//  about me
Route::get('/over-mij', function () {
    return view('about');
})->name('aboutme');

//  benefits
Route::get('/voordelen-uitlaatservice', function () {
    return view('benefits');
})->name('benefits');


//services
Route::get('/diensten', function () {
    $products = Product::all(['*', DB::raw('price - (price * (discount / 100)) as new_price')]);
    return view('/orders.index', compact('products'));
});

Route::get('/diensten', [OrderController::class, 'index'])->name('orders.index');


Route::middleware('auth')->group(function() {
    Route::get('/betalen/{product}', [OrderController::class, 'create'])->name('orders.create');
});
