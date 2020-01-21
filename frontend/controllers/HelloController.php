<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Site controller
 */
class HelloController extends Controller
{
    public function actionIndex()
    {
        return $this->render('/hello/index');
    }
}
