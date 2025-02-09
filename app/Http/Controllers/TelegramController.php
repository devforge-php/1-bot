<?php
namespace App\Http\Controllers;

use App\Services\TelegramService;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    protected $telegramService;

    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function webhook(Request $request)
    {
        $this->telegramService->handleWebhook();
        return response()->json(['status' => 'ok']);
    }
}
