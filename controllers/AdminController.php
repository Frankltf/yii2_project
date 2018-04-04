<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Admin;
use Yii;
class AdminController extends Controller{
    public function init(){
        $this->enableCsrfValidation = false;
    }
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
    public function actionLoginout(){
        Yii::$app->session->removeAll();
        if(is_null(Yii::$app->session->get('admin')['isLogin'])){
            $this->redirect(['admin/login']);
        }else{
            return FALSE;
        }
    }
    public function actionFindpass(){

    }
    public function actionAdmin(){
        $this->layout='adminlayout';
        return $this->render('admin');
    }
    public function actionUserlist(){
        $this->layout='adminlayout';
        return $this->render('user_list');
    }
    public function actionNewuser(){
        $this->layout='adminlayout';
        return $this->render('newuser');
    }
    public function actionUserinfo(){
        $this->layout='adminlayout';
        $model_admin=new Admin();
        $res=$model_admin->getuserinfo();
        return $this->render('userinfo',['data'=>$res]);
    }
    public function actionCustom(){
        $this->layout='adminlayout';
        return $this->render('custom');
    }
    public function actionUpdateuser(){
        $getdata=Yii::$app->request->post();
        $model_amin=new Admin();
        $res=$model_amin->updateuser($getdata);
    }
}