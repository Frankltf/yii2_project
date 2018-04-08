<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/30
 * Time: 8:44
 */
namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\models\Member;
class MemberController extends Controller{
    public function init(){
        $this->enableCsrfValidation = false;
    }
    public function actionReg(){
        $this->layout="layout2";
        return $this->render('auth');
    }
    public function actionRegister(){
        $postdata=Yii::$app->request->post();
        $member_model=new Member();
        $res=$member_model->add($postdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionLogin(){
        $postdata=Yii::$app->request->get();
        $member_model=new Member();
        $res=$member_model->sele($postdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionQqreg(){
        $this->layout='layout2';
        return $this->render('qqreg');
    }
}