<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/16
 * Time: 13:40
 */
require_once "functions.php";
header("Content-type:text/html; charset=utf-8");

if(isset($_GET['id'])&&isset($_GET['uid'])){
    $number = $_GET['id'];
    $uid = $_GET['uid'];
    header("Location:./join.php?id=$number&uid=$uid");
}else{
    $number=rand("1","999999999");
    $uid=rand("1","999999");

    connectDb();
    $result = mysql_query("SELECT * FROM uesr_info WHERE number='$number'AND uid='$uid'");

    $num = mysql_num_rows($result);
    if(!$num){
        mysql_query("INSERT INTO user_info(number,uid) VALUES ('$number','$uid')");

    }
    header("Location:./join.php?id=$number&uid=$uid");
}



//$info = $number."|"."0"."|"."$uid"."\n";
//file_put_contents("list.txt",$info,FILE_APPEND);
//header("Location:./join.php?id=$number&uid=$uid");