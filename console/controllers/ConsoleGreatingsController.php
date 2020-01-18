<?php

namespace console\controllers;

use yii\console\Controller;

class ConsoleGreatingsController extends Controller
{
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
    }
}
