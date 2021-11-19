<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LibraryController;

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

Route::get('/', [PagesController::class, 'getHome'])->name('home');

Route::get('/contact', [PagesController::class, 'getContact'])->name('contact');

Route::get('/about', [PagesController::class, 'getAbout'])->name('about');

Route::get('/contact/messages', [ContactController::class, 'getMessages'])->name('get-messages');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form-submit');

Route::get('/library', [LibraryController::class, 'listBooks'])->name('list-books');