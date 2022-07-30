<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;


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

Route::get('/', function () {
     return view('hello');
    // return redirect('about');
});
//Route::get('/about', function() {
//    return view('about');
//});
Route::view("about", 'about');
Route::view("contact", 'contact');
// Route::get("user", "Users@index"); laravel 6 and 7
Route::get("users/{user}", [Users::class, 'index']);
// Route::get("user", function(){
//     return view("user");
// });
Route::get("user", [UsersController::class, 'viewLoad']);

