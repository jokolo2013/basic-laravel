<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

use RealRashid\SweetAlert\Facades\Alert;


// Route::get('/', function () {
//     // // Alert::success('Success Title', 'Success Message');
//     // toast('Success Toast','success');
//     // return view('register');
// });

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/login/checkLogin', [AuthController::class, 'checkLogin'])->name('login.checkLogin');

Route::get('/index',function(){
    return view('index');
});

Route::get('/courses-page',function(){
    return view('courses-page');
});

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/register',function(){
    return view('register');
});

Route::post('/register/load', [AuthController::class, 'load_register'])->name('register.load');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
