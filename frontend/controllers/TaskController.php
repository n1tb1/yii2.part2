<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Task controller
 */
class TaskController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
