<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/14
 * Time: 17:59
 */
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class Category extends ActiveRecord{
    public function savacate($data){
        $this->title=$data['categoryname'];
        $this->parentid=$data['categoryparent'];
        $this->createtime=time();
        $res=$this->save();
        return $res;
    }
}