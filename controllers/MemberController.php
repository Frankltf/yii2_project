<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/30
 * Time: 8:44
 */
namespace app\controllers;

use yii\web\Controller;

class MemberController extends Controller{
    public function actionReg(){
        $this->layout="layout2";
        return $this->render('auth');
    }
    public function actionQqreg(){
        $this->layout='layout2';
        return $this->render('qqreg');
    }
}