<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\site4Controller;
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

// site 3
Route::prefix('site3')->name('site3.')->group(function()
{
    Route::get('/',[site3Controller::class,'index'])->name('index');

    Route::get('/EXPERIENCE',[site3Controller::class,'EXPERIENCE'])->name('EXPERIENCE');

    Route::get('/EDUCATION',[site3Controller::class,'EDUCATION'])->name('EDUCATION');

    Route::get('/SKILLS',[site3Controller::class,'SKILLS'])->name('SKILLS');

    Route::get('/INTERESTS',[site3Controller::class,'INTERESTS'])->name('INTERESTS');

    Route::get('/AWARDS ',[site3Controller::class,'AWARDS '])->name('AWARDS ');
});
// site 4
Route::prefix('site4')->name('site4.')->group(function()
{
    Route::get('/',[site4Controller::class,'index'])->name('index');

    Route::get('/SERVICES',[site4Controller::class,'SERVICES'])->name('SERVICES');

    Route::get('/PORTFOLIO',[site4Controller::class,'PORTFOLIO'])->name('PORTFOLIO');

    Route::get('/ABOUT',[site4Controller::class,'ABOUT'])->name('ABOUT');

    Route::get('/TEAM',[site4Controller::class,'TEAM'])->name('TEAM');

    Route::get('/CONTACT ',[site4Controller::class,'CONTACT '])->name('CONTACT ');
});





