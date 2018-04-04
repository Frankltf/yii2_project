<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class Admin extends ActiveRecord{
    public function login($data){
        $res=self::find()->where(['adminuser'=>$data['username'],'adminpass'=>$data['userpass']])->one();
        if(isset($res)){
            #TODO:插入登录时间和ip
            // $this->updateAll(['logintime'])
            $session=Yii::$app->session;
            if($data['remember']){
                $lift_time=24*3600;
                session_set_cookie_params($lift_time);
            }
            $session['admin']=[
                'username'=>  $data['username'],
                'isLogin'=>1,
            ];
            return true;
        }else{
            return false;
        }
    }
    public function add($data){
        
    }
    public function getuserinfo(){
        $session=Yii::$app->session;
        $username=$session->get('admin')['username'];
        $res=$this->find()->where(['adminuser'=>$username])->asArray()->one();
        return $res;
    }
    public function updateuser($data){
        $session=Yii::$app->session;
        $username=$session->get('admin')['username'];
        $res=$this->find()->where(['adminuser'=>$username])->asArray()->one();
        $adminid=$res['adminid'];
        $this->adminuser=$data['username'];
        $this->adminpass=$data['userpass'];
        $this->adminemail=$data['useremail'];
        $res=$this->findOne(['adminid'=>$adminid])->save();
        var_dump($res);
        die();
    }
}
