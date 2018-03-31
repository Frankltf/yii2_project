<?php
namespace app\models;
use yii\db\ActiveRecord;

class Admin extends ActiveRecord{
    public function login($data){
        $res=self::find()->where(['adminuser'=>$data['username'],'adminpass'=>$data['userpass']])->one();
        if(isset($res)){
            return true;
        }else{
            return false;
        }
    }
}
