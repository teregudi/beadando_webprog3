<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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



Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('auth.login');

Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy'])->name('auth.logout');



Route::get('/newbook', [PagesController::class, 'getNewbook'])->name('new-book');

Route::get('/contact/messages', [ContactController::class, 'getMessages'])->name('get-messages');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form-submit');

Route::get('/library', [LibraryController::class, 'listBooks'])->name('list-books');

Route::post('/library/submit', [LibraryController::class, 'submit'])->name('new-book-submit');

Route::get('/library/delete/{isbn}', [LibraryController::class, 'deleteBook'])->name('delete-book');

Route::get('/library/edit/{id}', [LibraryController::class, 'editBook'])->name('edit-book');

Route::post('/library/edit/{id}', [LibraryController::class, 'submitEdit'])->name('submit-edit');

Route::get('/library/{id}', [LibraryController::class, 'getBook'])->name('get-book');