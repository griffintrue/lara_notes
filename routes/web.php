<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;
use App\Models\User;

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

Route::get('/users', function () {
    $users = User::where('is_test_user', 1)->paginate(10);
    return view('users', compact('users'));
})->name('users');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('notes', NoteController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
