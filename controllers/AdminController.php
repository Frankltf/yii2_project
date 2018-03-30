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
        var_dump($_GET);
        $arr=array(1,2,3,4);
        print_var($arr);

        return $this->render('login');
    }
    
}