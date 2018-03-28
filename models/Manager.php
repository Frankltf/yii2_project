<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/28
 * Time: 13:15
 */
namespace app\models;
use yii\base\Model;
class Manager extends Model{
    public static function tableName (){
        return '{{%test}}';
    }
}