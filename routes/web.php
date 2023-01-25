<?php

use App\Http\Controllers\QrCodeController;
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

Route::get('/', function (){
return view('qrcodeform');
});
Route::post('/qrcode-generator' , [QrCodeController::class,'store'])->name('qrcode.generator');

Route::get('/qrcode', [QrCodeController::class, 'index']);

Route::post('/pdf', [QrCodeController::class, 'pdf'])->name('pdf');

