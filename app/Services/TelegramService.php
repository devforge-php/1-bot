<?php 

namespace App\Services;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramService
{
    public function handleWebhook()
    {
        $update = Telegram::getWebhookUpdate();

        $message = $update->getMessage();
        if (!$message) return;

        $chatId = $message->getChat()->getId();
        $text = strtolower($message->getText());

        if (in_array($text, ['/start', 'salom'])) {
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'text' => 'Salom! Qanday yordam bera olaman?',
            ]);
        }
    }
}
