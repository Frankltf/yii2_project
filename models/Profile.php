<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/8
 * Time: 13:42
 */
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class Profile extends ActiveRecord{
    public static function tableName()
    {
        return "{{%profile}}";
    }
}