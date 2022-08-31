<?php
use App\Models\product;
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
Route::get('/products',function(){
    return product::all();
});
Route::POST('/products',function(){
    return product::create([
        'name'=>'Microphone',
        'slug'=>'microphone',
        'description'=>' This is microphone.',
        'price'=>'99.98'
    ]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



