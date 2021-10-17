<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('all' , function (){
    return \App\Models\Bookable::all();
});
Route::get('getBookable/{id}' , function (Request $request , $optional = null){
    $res = \App\Models\Bookable::findOrFail($request->id);
    if ($res){
        return $res;
    }
    return response()->json('Not Found' , 500);
});
