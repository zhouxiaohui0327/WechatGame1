<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/17
 * Time: 17:29
 */
require_once "functions.php";

header("Content-type:text/html;charset=utf-8");
$number_h = $_GET["idh"];
$uid_h = $_GET['uidh'];
if($_GET['id']==0&&$_GET['uid']==0){
    $number = rand("1", "999999999");
    $uid = rand("1", "999999");
}else {
    $number = $_GET['id'];
    $uid = $_GET['uid'];
}
connectDb();
$result = mysql_query("SELECT * FROM help_info WHERE number='$number'AND uid='$uid'AND number_h='$number_h'AND uid_h='$uid_h'");
$num = mysql_num_rows($result);

if(!$num){
    $sql = "INSERT INTO help_info(number,uid,number_h,uid_h)VALUES('$number','$uid','$number_h','$uid_h')";
    $result = mysql_query($sql);
    if($result==true){
        $result=array();
        $result['state'] = true;
        $result['data'] = "成功帮好友筹钱";
        $result['number'] = $number;
        $result['uid'] = $uid;
        $result['number_h'] = $number_h;
        $result['uid_h'] = $uid_h;
        echo json_encode($result);
        die();
    }
}else{
    $result=array();
    $result['state'] = false;
    $result['data'] = "帮好友筹钱失败或您已经帮该好友筹过钱";
    $result['number'] = $number;
    $result['uid'] = $uid;
    $result['number_h'] = $number_h;
    $result['uid_h'] = $uid_h;
    echo json_encode($result);
    die();
}



