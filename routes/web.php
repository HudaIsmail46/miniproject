<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/editmyuser', function () {
    return view('viewuser');
});

route::post('/login', [UserController::class, 'login']);
route::post('/register', [UserController::class, 'register']);
route::get('/editmyuser', [UserController::class, 'getuser']);
route::get('/myaccount', [UserController::class, 'getmyuser']);
route::post('/useredit', [UserController::class, 'edituser']);
route::get('/userlist', [UserController::class, 'search']);
route::post('/userlist', [UserController::class, 'search']);
route::get('/userdelete', [UserController::class, 'deleteuser']);
