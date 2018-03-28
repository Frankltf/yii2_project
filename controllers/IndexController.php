<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/28
 * Time: 9:44
 */
namespace app\controllers;
use yii\web\Controller;
use app\models\Manager;
class IndexController extends Controller{
    public function actionIndex(){
        $result=Manager::find()->asArray()->all();
        print_var($result);
        return $this->render('index');
    }

}


