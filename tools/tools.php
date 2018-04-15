<?php
 function print_var($data){
     print_r('<pre style="background-color: black;color: white;">');
     print_r($data);
     print_r('</pre>');
 }
function buildresults($rows,$status='',$msg=''){
    $result=array();
    $result['status']=$status;
    $result['msg']=$msg;
    $result['rows']=$rows;
    $result['load']=true;
    return json_encode($result);
}
function buildresult($row,$status='',$msg=''){
    $result=array();
    $result['status']=$status;
    $result['msg']=$msg;
    $result['load']=false;
    $result['row']=$row;
    return json_encode($result);
}
function builderror($status='200',$msg='error'){
    $result=array();
    $result['load']=false;
    $result['status']=$status;
    $result['msg']=$msg;
    return json_encode($result);
}
function buildsuccess($status='200',$msg='success'){
    $result=array();
    $result['load']=true;
    $result['status']=$status;
    $result['msg']=$msg;
    return json_encode($result);
}