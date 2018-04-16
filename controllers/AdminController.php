<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Admin;
use Yii;
use yii\data\Pagination;
use app\models\Category;
class AdminController extends Controller{
    public function init(){
        $this->enableCsrfValidation = false;
    }
    public function actionLogin(){
        $this->layout=FALSE;

        return $this->render('login');
    }
    public function actionSignin(){
        $get_data=Yii::$app->request->get();
        $model_admin=new Admin();
        $res=$model_admin->login($get_data);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionRegister(){
        $this->layout=FALSE;
        return $this->render('register');
    }
    public function actionAdd(){
        $get_data=Yii::$app->request->post();;
        $model_amin=new Admin();
        $res=$model_amin->add($get_data);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionLoginout(){
        Yii::$app->session->removeAll();
        if(is_null(Yii::$app->session->get('admin')['isLogin'])){
            $this->redirect(['admin/login']);
        }else{
            return FALSE;
        }
    }
    public function actionFindpass(){

    }
    public function actionAdmin(){
        $this->layout='adminlayout';
        return $this->render('admin');
    }
    public function actionUserlist(){
        $this->layout='adminlayout';
        $model_admin=new Admin();
        $managers=$model_admin->find()->asArray();
        $count=$managers->count();
        $pager=new Pagination(['totalCount'=>$count,'pageSize'=>'2']);
        $userlist=$managers->offset($pager->offset)->limit($pager->limit)->all();

        return $this->render('user_list',['data'=>$userlist,'pager'=>$pager]);
    }
    public function actionNewuser(){
        $this->layout='adminlayout';
        return $this->render('newuser');
    }
    public function actionUserinfo(){
        $this->layout='adminlayout';
        $model_admin=new Admin();
        $res=$model_admin->getuserinfo();
        return $this->render('userinfo',['data'=>$res]);
    }
    public function actionCustom(){
        $this->layout='adminlayout';
        return $this->render('custom');
    }
    public function actionUpdateuser(){
        $getdata=Yii::$app->request->post();
        $model_amin=new Admin();
        $res=$model_amin->updateuser($getdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionSeekpassword(){
        $this->layout=false;
        return $this->render('seekpassword');
    }
    public function actionSeekpassbyemail(){
        if(Yii::$app->request->isPost){
            $postdata=Yii::$app->request->post();
            $model_admin=new Admin();
            $res=$model_admin->seekass($postdata);
            if(is_null($res)){
                return builderror();
            }else{
                $mail = \Yii::$app->mailer->compose()
                    ->setFrom(['langerfei@163.com' => 'Yii 中文网'])
                    ->setTo('1536303470@qq.com')
                    ->setSubject('修改密码')
                    //->setTextBody('Yii中文网教程真好 www.yii-china.com')   //发布纯文字文本
                    ->setHtmlBody("<br>Yii中文网教程真好！www.yii-china.com")    //发布可以带html标签的文本
                    ->send();
                if($mail)
                    echo 'success';
                else
                    echo 'fail';
                return buildsuccess();
            }
        }
        
    }
    public function actionDeluser(){
        $getdata=Yii::$app->request->get();
        $model_amin=new Admin();
        $res=$model_amin->del($getdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionAddcategory(){
        $this->layout='adminlayout';
        return $this->render('addcategory');
    }
    public function actionAddcate(){
        $postdata=Yii::$app->request->post();
        $model_category=new Category();
        $res=$model_category->savacate($postdata);
        if($res){
            return buildsuccess();
        }else{
            return builderror();
        }
    }
    public function actionCatechoose(){
        $model_cate=new Category();
        $catelist=$model_cate->find()->asArray()->all();
        $newcate=$this->yinyong($catelist);

        foreach ($newcate as $value){
            $arr1['name']=str_repeat('--|',$value['lev']).$value['title'];
            $arr1['id']=$value['cateid'];
            $arr[]=$arr1;
        }

        if($arr){
            return buildresults($arr);
        }else{
            return builderror();
        }
    }
    //递归算法
    private function wuxianfenlei($data,$id=0,$lev=0){
        static $son=array();
        foreach ($data as $k=>$v){
            if($v['parentid']==$id){
                $v['lev']=$lev;
                $son[]=$v;
                unset($data[$k]);
                $this->wuxianfenlei($data,$v['cateid'],$lev+1);
            }
        }
        static $arr=array();
        foreach ($son as $value){
            $arr1['name']=str_repeat('--|',$value['lev']).$value['title'].'<br/>';
            $arr1['id']=$value['cateid'];
            $arr[]=$arr1;
        }
        return $arr;
    }
    //引用算法
    private function yinyong($data,$pid=0){
        $items=array();
        foreach ($data as $value){
            $items[$value['cateid']]=$value;
        }
        $tree=array();
        foreach ($items as $value) {
            if ($pid == $value['parentid']) {//先取出顶级
                $tree[] = &$items[$value['cateid']];
            } elseif (isset($items[$value['parentid']])) {//再判定非顶级的pid是否存在，如果存在，则再pid所在的数组下面加入一个字段items，来将本身存进去
                $items[$value['parentid']]['items'][] = &$items[$value['cateid']];
            }
        }
        print_var($tree);
    }
    public function actionCrontest(){
        $init = curl_init();
        $url = "http://localhost/yii2_project/web/index.php?r=admin/login";
        curl_setopt($init,CURLOPT_URL,$url);
        $res = curl_exec($init);
        echo $res;
        // if(Yii::$app->request->isPost){
        //    print_var($_POST);
        //     die();
        // }
        // if(Yii::$app->request->isGet){
        //     print_var($_GET);
        //     die();
        // }
    }

}