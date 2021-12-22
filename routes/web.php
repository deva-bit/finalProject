<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
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
Route::get("/",[homeControl::class,'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get("redirect",[homeControl::class,'redirectFunct']);
Route::POST("add",[homeControl::class,'saveData']);
Route::get("/manageproject",[homeControl::class,'manager']);

Route::get("upd/{id}",[homeControl::class,'showdata']);
Route::POST("editproject",[homeControl::class,'update']);

Route::get("del/{project_id}",[homeControl::class,'deleteStud']);


Route::get("updateleader/{ject_id}",[homeControl::class,'leader']);
Route::POST("editleader",[homeControl::class,'updateleader']);

Route::get("viewleader/{project_id}",[homeControl::class,'viewleader']);
Route::get("viewmember/{project_id}",[homeControl::class,'viewmember']);