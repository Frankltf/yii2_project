<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/30
 * Time: 9:15
 */
namespace app\controllers;
use yii\web\Controller;

class OrderController extends Controller{
    public function actionIndex(){
        $this->layout='layout2';
        return $this->render('index');
    }
    public function actionCheck(){
        $this->layout='layout2';
        return $this->render('check');
    }
}
