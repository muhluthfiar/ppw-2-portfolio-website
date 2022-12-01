<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Http;
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


Auth::routes([
    'reset' => false,
]);

Route::post('/send-email',function(){
    $data = [
    'name' => 'Nama Anda',
    'body' => 'Testing Kirim Email'
    ];
    Mail::to('emailanda@mail.com')->send(new SendEmail($data));
    dd("Email Berhasil dikirim.");
});

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/education', function () {
    return view('education');
});


Route::resource('posts', 'App\Http\Controllers\PostController');

Route::resource('projects', 'App\Http\Controllers\ProjectController');

Route::resource('gallery', 'App\Http\Controllers\GalleryController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gallery2', function () {
    // fetcj data from api
    $response = Http::get('https://luthfi-ppw2.herokuapp.com/api/gallery');
    $data = json_decode($response->false);
    return dd($data);
    // return view('gallery2')->with($response);
});