<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('ajax/validation', [TestController::class, 'ajaxValidation'])->name('ajax.validation');
Route::post('ajax/validation/store', [TestController::class, 'ajaxValidationStore'])->name('ajax.validation.store');