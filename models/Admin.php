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
            $action=$this->findOne($res['adminid']);
            $action->logintime=time();
            $action->loginip=ip2long(Yii::$app->request->userIP);
            $q=$action->save();
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
        $this->adminuser=$data['username'];
        $this->adminemail=$data['useremail'];
        $this->adminpass=$data['userpass'];
        $res=$this->save();
        return $res;
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

        $resu=$this->findOne(['adminid'=>$adminid]);
        $resu->adminuser=$data['username'];
        $resu->adminpass=$data['userpass'];
        $resu->adminemail=$data['useremail'];
        $result=$resu->save();
        return $result;

    }
    public function seekass($data){
        $res=$this->find()
            ->where('adminuser = :username and adminemail = :useremail',['username'=>$data['username'],'useremail'=>$data['useremail']])
            ->asArray()
            ->one();
        return $res;
    }
    public function del($data){
        return $this->findOne($data['adminid'])->delete();
    }
}
