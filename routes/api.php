<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Note;

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

Route::get('/notes', function() {
    $notes = Note::groupBy('user_id')->select('user_id', DB::raw('count(*) as total'))->get();
    return response()->json($notes);
});