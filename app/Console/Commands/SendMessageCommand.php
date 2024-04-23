<?php

namespace App\Console\Commands;

use App\Events\MessageSent;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class SendMessageCommand extends Command
{
    protected $signature = 'send:message';
    protected $description = 'Send a messege to the chat';

    public function handle(): void
    {
        $name = text(
            label: 'What is your name?',
            required: true
        );

        $text = text(
            label: 'What is your message?',
            required: true
        );

        MessageSent::dispatch($name, $text);
    }
}
