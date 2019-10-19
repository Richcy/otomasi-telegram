<?php
/**
 * Usage on CLI: $ php broadcast.php [telegram-chat-id] [message]
 */

require __DIR__ . '/vendor/autoload.php';

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;

$API_KEY  = '858796733:AAEFyqkSc9Dw5vgOweKrmFzkSD4VppfFnzI';
$BOT_NAME = 'kpcobain';

$telegram = new Telegram($API_KEY, $BOT_NAME);

// Get the chat id and message text from the CLI parameters.
$chat_id = isset($argv[1]) ? $argv[1] : '';
$message = isset($argv[2]) ? $argv[2] : '';

if ($chat_id !== '' && $message !== '') {
    $data = [
        'chat_id' => $chat_id,
        'text'    => $message,
    ];

    $result = Request::sendMessage($data);

    if ($result->isOk()) {
        echo 'Message sent succesfully to: ' . $chat_id;
    } else {
        echo 'Sorry message not sent to: ' . $chat_id;
    }
}

?>