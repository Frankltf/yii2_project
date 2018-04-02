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
use Yii;
class IndexController extends Controller{
    public function actionIndex(){
        $this->layout='layout1';
        $session=Yii::$app->session;
        $sessiondata=$session->get('admin');
        $result['isLogin']=$sessiondata['isLogin'];
        return $this->render('index',['data'=>$result]);
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


