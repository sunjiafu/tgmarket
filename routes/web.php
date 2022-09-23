<?php

use App\Http\Livewire\Myorder;
use App\Http\Livewire\Order;
use App\Http\Livewire\Pay;
use App\http\Controllers\pay\Btccontroller;
use App\Http\Livewire\Servicelist;
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
})->name('index');

Route::get('service', Servicelist::class);
Route::post('btcpay/notify_url','Btc@notifyUrl');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('order', Order::class)->name('order');

    Route::get('pay', Pay::class)->name('pay');

    Route::get('orderlist', Myorder::class)->name('orderlist');
});
