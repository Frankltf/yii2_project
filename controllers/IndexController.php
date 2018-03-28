<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/28
 * Time: 9:44
 */
namespace app\controllers;
use yii\web\Controller;
use app\Models\Manager;
class IndexController extends Controller{
    public function actionIndex(){
        $rows = (new \yii\db\Query())
            ->select(['id', 'username'])
            ->from('ltf_manager')
            ->all();
        var_dump($rows);
        die();
        $this->render("index");
    }
}


