<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;

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
    return view('welcomeLogin');
});

Route::get('/sidebar', function () {
    return view('dashboard');
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

Route::get('/admitdownload', function () {
    return view('admitdownload');
});


Route::get('/studentRegistration', function () {
    return view('studentRegistration');
});

Route::get('/examRegistration', function () {
    return view('examRegistration');
});

Route::get('/admitdownload', function () {
    return view('admitdownload');
});
Route::get('/results', function () {
    return view('results');
});




Route::get('/viewClass', function () {
    return view('viewClass');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/viewAdmin', function () {
    return view('viewAdmin');
});

Route::get('/payFees', function () {
    return view('payFees');
});


Route::get('/subjectList', function () {
    return view('subjectList');
});

Route::get('/settings', function () {
    return view('settings');
});























Route::get('/adminregistration', [AdminController::class, 'adminregistration']);
Route::post('/adminregistration', [AdminController::class, 'adminStore']);

Route::get('/viewAdmin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('/viewAdmin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');

Route::post('/viewAdmin/update/{id}', [AdminController::class, 'update'])->name('admin.update');


Route::get('/viewAdmin', [AdminController::class, 'view']);



// Route::post('/adminregistration', function () {

//     admin::create([
//         'name'=> request('name'),
//         'dob'=> request('dob'),
//         'gender'=> request('gender'),
//         'email'=> request('email'),
//         'number'=> request('number')
//     ]);

// });



Route::get('/db', function () {
    return view('db');
});