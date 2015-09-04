<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.09.15
 * Time: 22:17
 */

namespace frontend\models;


use yii\base\Model;

class Test extends  Model{
    public static function getTestTitle(){
        return 'importantTest.php';
    }
} 