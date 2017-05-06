<?php

namespace App\Commands;

use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;


/**
 * Class StartCommand
 */
class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'start';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['signup'];

    /**
     * @var string Command Description
     */
    protected $description = 'Start Command to get you started';

    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {
        $update = $this->getUpdate();

        $name = $update->getMessage()->from->firstName;
        $text = "Hello, $name! Welcome to our bot!\nType /help to get a list of available commands.";
        $this->replyWithMessage(['text' => $text]);
//        $this->replyWithMessage(['text' => $update->getMessage()->chat->id]);
//        return 'ok';

//        $keyboard = [
//            ['7', '8', '9'],
//            ['4', '5', '6'],
//            ['1', '2', '3'],
//            ['0']
//        ];
        $keyboard =[
          ['اسنپ','تپسی'],
            ['آمار']
        ];
        $telegram =new Api();
        $reply_markup = $telegram->replyKeyboardMarkup([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);

        $response = $telegram->sendMessage([
            'chat_id' => $update->getMessage()->chat->id,
            'text' => 'Hello World',
            'reply_markup' => $reply_markup
        ]);

        $messageId = $response->getMessageId();





    }
}