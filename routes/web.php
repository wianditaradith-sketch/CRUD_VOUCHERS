<?php

use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/vouchers');
Route::resource('vouchers', VoucherController::class)->except('show');