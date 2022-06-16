<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('tinhtong',[sumController::class,function()
// {
//     return view('Sum');
// }
// ]);

// Route::post('tinhtong',[sumController::class,'Result']);

Route::get('tinhtong',[sumController::class,function(){
        return view('sum');
    }]);
Route::post('tinhtong',[sumController::class,'tinhtong']);
    

Route::get('signup',[signupController::class,'index']);
Route::post('signup',[signupController::class,'displayInfor']);
Route::get('trangchu',[PageController::class,'getIndex']); 
