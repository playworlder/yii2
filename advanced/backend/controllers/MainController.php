<?php

namespace backend\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOther()
    {
        return $this->render('other');
    }

}
