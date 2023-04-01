<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\News;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return 'dfdfdfdf';
});
Route::get('/getNews', function () {
    News::getData();
});
// Route::get('/news', function () {
//     return News::getData();
// });


