<?php
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AmenityController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
 Route::get('/oneToOne/{id?}', [SpaceController::class, 'space']);
Route::get('/space-details/{id}', [SpaceController::class,'show']);
Route::get('/space-details/{id}/{key?}/{key2?}', [SpaceController::class,'show']);
Route::get('/ticket-details/{id}', [TicketController::class,'show']);
