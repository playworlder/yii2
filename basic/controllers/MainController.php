<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $hello = "Привет Малыш!";
        return $this->render(
            'index',
            [
                'hello' => $hello,
            ]);
    }

}
