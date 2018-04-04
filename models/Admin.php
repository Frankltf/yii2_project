<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class Admin extends ActiveRecord{
    public function login($data){
        $res=self::find()->where(['adminuser'=>$data['username'],'adminpass'=>$data['userpass']])->one();
        if(isset($res)){
            // $this->updateAll(['logintime'])
            $session=Yii::$app->session;
            $lift_time=10;
            session_set_cookie_params($lift_time);
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
}
