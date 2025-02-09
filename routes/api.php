<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

Route::post('telegram/webhook', [TelegramController::class, 'webhook']);
Route::get('telegram/send-message', [TelegramController::class, 'sendMessage']);
