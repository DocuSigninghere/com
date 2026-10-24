<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

require 'telegram-config.php';

echo json_encode([
    'telegram_bot_token' => $telegramBotToken,
    'telegram_chat_id' => $telegramChatId
]);
?>
