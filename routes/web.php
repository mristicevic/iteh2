<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

route::get('/',[HomeController::class,'index']);
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/home',[HomeController::class,'redirect']);
route::get('/search',[HomeController::class,'search']);

route::post('/addcart/{id}',[HomeController::class,'addcart']);
route::get('/showcart',[HomeController::class,'showcart']);
route::get('/delete/{id}',[HomeController::class,'delete']);
