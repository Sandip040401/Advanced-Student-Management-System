<?php

use Illuminate\Support\Facades\Route;
use App\Models\admin;
use App\Http\Controller\adminController;

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
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/', [LoginController::class, 'showLoginForm'])->middleware('guest');

Route::get('/', function () {
    return view('login');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/welcomeAdmin', function () {
    return view('welcomeAdmin');
});

Route::get('/welcomeStudent', function () {
    return view('welcomeStudent');
});

Route::get('/welcomeTeacher', function () {
    return view('welcomeTeacher');
});


Route::get('/studentRegistration', function () {
    return view('studentRegistration');
});




Route::get('/adminregistration', function () {
    return view('adminregistration');
});



Route::get('/admitdownload', function () {
    return view('admitdownload');
});

Route::get('/viewClass', function () {
    return view('viewClass');
});

































Route::post('/adminregistration', function () {

    admin::create([
        'name'=> request('name'),
        'dob'=> request('dob'),
        'gender'=> request('gender'),
        'email'=> request('email'),
        'number'=> request('number')
    ]);

});

Route::get('/exam', function () {
    return view('exam');
});
Route::get('/admitdownload', function () {
    return view('admitdownload');
});
Route::get('/results', function () {
    return view('results');
});
