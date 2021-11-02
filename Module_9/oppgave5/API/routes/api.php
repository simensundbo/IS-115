<?php
use App\Models\Quotes;

use App\Http\Controllers\QuotesApiController;
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


Route::get("/quotes" ,[QuotesApiController::class, "all"]);

Route::get("/quotes/{id}" , [QuotesApiController::class, "byid"]);

Route::post("/quotes" , [QuotesApiController::class, "add"]);

Route::get("/quotes/random" , [QuotesApiController::class, "random"]);
