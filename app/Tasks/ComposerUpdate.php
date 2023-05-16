<?php

namespace App\Tasks;

use ProtoneMedia\LaravelTaskRunner\Task;

class ComposerUpdate extends Task
{
    public function render(): string
    {
        return 'composer update';
    }
}