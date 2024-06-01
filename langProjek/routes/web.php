<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Castcontroller;
use PhpParser\Node\Expr\Cast;

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

Route::get('/',[Homecontroller::class, 'index']);

Route::get('/register',[AuthController::class, 'register']);

route::post('/welcome',[AuthController::class,'welcome']);

route::get('/table', function(){
    return view('page.table');
});
route::get('/data-table', function(){
    return view('page.data-table');
});

route::resource('cast',CastController::class);