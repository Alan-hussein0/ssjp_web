<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function ()
{
    return view('frontend.home.home');
});

Route::get('/journal',[JournalController::class, 'index'])->name('all_journal');

Route::get('/create/journal',function ()
{
    return view('frontend.create_journal');
})->name('create_journal');

Route::get('/contact',function ()
{
    return view('frontend.contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
