<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/3/28
 * Time: 9:44
 */
namespace app\controllers;
use yii\web\Controller;
use app\models\Manager;
class IndexController extends Controller{
    public function actionIndex(){
        $this->layout='@app/views/layouts/layout1.php';
        return $this->render('index');
    }
    public function actionDel() {
       $id='4';
        $found=Manager::findOne($id);
        if($found){
            $res=$found->delete();
        }
    }
    public function actionAdd(){
        $model_manager=new Manager();
        $model_manager->username='jia';
        $model_manager->password='333333';
        $res=$model_manager->save();
        var_dump($res);
    }
}


