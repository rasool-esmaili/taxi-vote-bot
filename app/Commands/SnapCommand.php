<?php
/**
 * Created by PhpStorm.
 * User: rasool
 * Date: 5/6/17
 * Time: 1:21 AM
 */

namespace App\Commands;

use Telegram\Bot\Api;
use Telegram\Bot\Commands\Command;


class SnapCommand extends Command
{
    protected $name='snap';
    /**
     * @var array Command Aliases
     */
    protected $aliases = ['snapsi'];

    protected $description = 'sndasdadsap';
    public function handle($arguments)
    {

        $telegram=new Api();
        // TODO: Implement handle() method.
     $update=   $this->getUpdate();
     $this->replyWithMessage(['text'=>'شما اسنپ را انتاخاب کردید']);
//        $response = $telegram->sendMessage([
//            'chat_id' => $update->getMessage()->chat->id,
//            'text' => 'Hello World',
//        ]);



    }

}