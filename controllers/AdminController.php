<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Admin;
use Yii;
use yii\data\Pagination;
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
        $get_data=Yii::$app->request->post();;
        $model_amin=new Admin();
        $res=$model_amin->add($get_data);
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
        $model_admin=new Admin();
        $managers=$model_admin->find()->asArray();
        $count=$managers->count();
        $pager=new Pagination(['totalCount'=>$count,'pageSize'=>'2']);
        $userlist=$managers->offset($pager->offset)->limit($pager->limit)->all();

        return $this->render('user_list',['data'=>$userlist,'pager'=>$pager]);
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
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionSeekpassword(){
        $this->layout=false;
        return $this->render('seekpassword');
    }
    public function actionSeekpassbyemail(){
        if(Yii::$app->request->isPost){
            $postdata=Yii::$app->request->post();
            $model_admin=new Admin();
            $res=$model_admin->seekass($postdata);
            if(is_null($res)){
                return builderror();
            }else{
                $mail = \Yii::$app->mailer->compose()
                    ->setFrom(['langerfei@163.com' => 'Yii 中文网'])
                    ->setTo('1536303470@qq.com')
                    ->setSubject('修改密码')
                    //->setTextBody('Yii中文网教程真好 www.yii-china.com')   //发布纯文字文本
                    ->setHtmlBody("<br>Yii中文网教程真好！www.yii-china.com")    //发布可以带html标签的文本
                    ->send();
                if($mail)
                    echo 'success';
                else
                    echo 'fail';
                return buildsuccess();
            }
        }
        
    }
}