<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/8
 * Time: 13:41
 */
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class Member extends ActiveRecord{
    public function add($data) {
        $this->username=$data['username'];
        $this->useremail=$data['useremail'];
        $this->userpass=$data['userpass'];
        $this->createtime=time();
        return $this->save();
    }
    public function sele($data){
        $res=$this->find()->where(['username'=>$data['username'],'userpass'=>$data['userpass']])->asArray()->one();
        $session=Yii::$app->session;
        $session['member']=[
            'username'=>  $data['username'],
            'isLogin'=>1,
        ];
        return $res;
    }
    public function del($data){
        return $this->findOne($data['userid'])->delete();
    }
}