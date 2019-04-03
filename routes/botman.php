<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
	$bot->reply('Hello!');
});

$botman->hears('How are you', function ($bot) {
	$bot->reply('I am Fine  What about you ...?');
});

$botman->hears('Start conversation', BotManController::class . '@startConversation');
