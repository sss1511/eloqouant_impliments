<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

route::get('/testapi',[StudentController::class,'index']);
route::post('/updateapi/{id}',[StudentController::class,'update']);
route::post('/deleteapi/{id}',[StudentController::class,'deletedata']);


route::get('/testjoins',[StudentController::class,'joins']);
route::get('/testleftjoin',[StudentController::class,'leftjoin']);

