<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site2Controller;
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
    return view('welcome');
});
Route::prefix('site2')->name('site2.')->group(function()
{
    Route::get('/',[site2Controller::class,'index'])->name('index');

    Route::get('/about',[site2Controller::class,'about'])->name('about');

    Route::get('/post',[site2Controller::class,'post'])->name('post');

    Route::get('/contact',[site2Controller::class,'contact'])->name('contact');


});



