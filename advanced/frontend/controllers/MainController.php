<?php

namespace frontend\controllers;

use frontend\models\Test;

class MainController extends \yii\web\Controller
{
    public function actionBadaBoom()
    {
        return $this->render('bada-boom');
    }

    public function actionIndex()
    {
        $name_test = Test::getTestTitle();
        return $this->render(
            'index',
            [
                'name_test' => $name_test,

            ]
        );
    }

}
