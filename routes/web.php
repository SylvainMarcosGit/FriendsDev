<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;




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

/* navigation*/

Route::get('/index', function () {
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/apropos', function () {
    return view('apropos');
});

// profil

Route::get('/profil', function () {
    return view('/user/profil');
});

/* inscription*/

Route::get('/inscription', [UserController::class, 'showRegistrationForm'])->name('inscription.form');
Route::post('/inscription', [UserController::class, 'register'])->name('inscription');

/* connexion*/

Route::get('/connexion', [UserController::class, 'showLoginForm'])->name('connexion.form');
Route::post('/connexion', [UserController::class, 'login'])->name('connexion');;
Route::post('/deconnexion', [UserController::class, 'logout'])->name('deconnexion');


/* recruteur */

Route::get('consulter', function () {
    return view('recruteur/consulter');
});

Route::get('payerprofil', function () {
    return view('recruteur/payerprofil');
});

Route::get('profilpayé', function () {
    return view('recruteur/profilpayé');
});

Route::get('cv', function () {
    return view('recruteur/cvtheque');
});

/* enseignant  

Route::get('/profil', function () {
    return view('enseignant/profil');
}); */


Route::get('/products', 'ProductController@index');
Route::get('/products/search', 'ProductController@search')->name('products.search');

/* administrateur*/

Route::get('/admin', [UserController::class, 'adminController'])->name('admin');




