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
    return view('homepage');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/userlist', function () {
    return view('userlist');
});

Route::get('/useredit', function () {
    return view('useredit');
});

Route::get('/userdelete', function () {
    return view('userdelete');
});

Route::get('/userview', function () {
    return view('userview');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/billing', function () {
    return view('billing');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/deletecart', function () {
    return view('deletecart');
});

Route::get('/deletedcart', function () {
    return view('deletedcart');
});

Route::get('/deletedprofile', function () {
    return view('deletedprofile');
});

Route::get('/deletereview', function () {
    return view('deletereview');
});

Route::get('/deletedreview', function () {
    return view('deletedreview');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/insertinfo', function () {
    return view('insertinfo');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/statuspayment', function () {
    return view('statuspayment');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/select', function () {
    return view('select');
});

Route::get('/tour', function () {
    return view('tour');
});

Route::get('/setting', function () {
    return view('setting');
});




Route::get('/homepage', [UserController::class, 'homepage']);
Route::get('/user', [UserController::class, 'user']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/forgot', [UserController::class, 'reset']);
Route::post('/forgot', [UserController::class, 'new']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/userlist', [UserController::class, 'search']);
Route::get('/useredit',[UserController::class,'getuser']);
Route::post('/useredit',[UserController::class,'edituser']);
Route::get('/userdelete',[UserController::class,'deleteuser']);
Route::post('/userdelete',[UserController::class,'deleteprofile']);
Route::get('/userview',[UserController::class,'viewuser']);
Route::get('/about',[UserController::class,'about']);
Route::get('/contact',[UserController::class,'contact']);
Route::get('/activity',[UserController::class,'activity']);
Route::get('/billing',[UserController::class,'billing']);
Route::get('/booking',[UserController::class,'booking']);
Route::get('/cart',[UserController::class,'cart']);
Route::get('/category',[UserController::class,'category']);
Route::get('/deletecart',[UserController::class,'deletecart']);
Route::get('/deletedcart',[UserController::class,'deletedcart']);
//Route::get('/deleteprofile',[UserController::class,'deleteprofile']);
Route::get('/deletedprofile',[UserController::class,'deletedprofile']);
Route::get('/deletereview',[UserController::class,'deletereview']);
Route::get('/deletedreview',[UserController::class,'deletedreview']);
Route::get('/destination',[UserController::class,'destination']);
Route::get('/insertinfo',[UserController::class,'insertinfo']);
//Route::get('/new',[UserController::class,'new']);
Route::get('/statuspayment',[UserController::class,'statuspayment']);
Route::get('/payment',[UserController::class,'payment']);
//Route::get('/reset',[UserController::class,'getemail']);
Route::post('/reset',[UserController::class,'reset']);
Route::get('/review',[UserController::class,'review']);
Route::get('/select',[UserController::class,'select']);
Route::get('/tour',[UserController::class,'tour']);
Route::get('/setting',[UserController::class,'setting']);

