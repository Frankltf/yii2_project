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
use yii\data\Pagination;
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
        $getdata=Yii::$app->request->get();
        $member_model=new Member();
        $res=$member_model->sele($getdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionLoginout(){
        Yii::$app->session->removeAll();
        if(is_null(Yii::$app->session->get('member')['isLogin'])){
            $this->redirect(['member/reg']);
        }else{
            return FALSE;
        }
    }
    public function actionUserlist(){
        $this->layout='adminlayout';
        $member_model=new Member();
        $managers=$member_model->find()->asArray()->joinWith('profile');
        $count=$managers->count();
        $pager=new Pagination(['totalCount'=>$count,'pageSize'=>'2']);
        $userlist=$managers->offset($pager->offset)->limit($pager->limit)->all();

        return $this->render('userlist',['data'=>$userlist,'pager'=>$pager]);
    }
    public function actionDel(){
        $getdata=Yii::$app->request->get();
        $model_amin=new Member();
        $res=$model_amin->del($getdata);
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