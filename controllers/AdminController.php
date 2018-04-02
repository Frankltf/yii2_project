<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Admin;
use Yii;
class AdminController extends Controller{
    public function actionLogin(){
        $this->layout=FALSE;

        return $this->render('login');
    }
    public function actionSignin(){
        $get_data=Yii::$app->request->get();
        $model_admin=new Admin();
        $res=$model_admin->login($get_data);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionRegister(){
        $this->layout=FALSE;
        return $this->render('register');
    }
    public function actionAdd(){
        $get_data=Yii::$app->request->get();
        $model_amin=new Admin();
        $res=$model_amin->add();
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
}