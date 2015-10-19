<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/16
 * Time: 21:36
 */

function connectDb(){
    $con = mysql_connect("localhost","root","123456");
    if(!$con){
        die("can not connect db");
    }
    mysql_select_db("raise_money");
    mysql_query("SET NAMES 'utf8'");
}