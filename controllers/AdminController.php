<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/30
 * Time: 12:55
 */
namespace app\controllers;
use yii\web\Controller;
class AdminController extends Controller{
    public function actionLogin(){
        $this->layout=FALSE;
        return $this->render('login');
    }
}