<?php

namespace App\Http\Controllers;

use App\Tasks\ComposerUpdate;

class TaskController extends Controller 
{
    public function run() 
    {
        $output = ComposerUpdate::dispatch();
        echo '更新 composer.json 中指定的套件版本的結果：' . ($output->isSuccessful() ? '成功' : '失敗') . PHP_EOL;
    }
}