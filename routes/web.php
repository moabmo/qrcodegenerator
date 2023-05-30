<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

Route::get('/qrcode', [QRCodeController::class, 'index'])->name('qrcode.index');
Route::post('/qrcode', [QRCodeController::class, 'generate'])->name('qrcode.generate');




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
