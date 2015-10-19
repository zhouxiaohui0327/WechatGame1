<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/19
 * Time: 13:19
 */
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>

    <title>免费吃大餐 点赞筹到钱</title>
</head>
<body>
<div class="content-box ">
    <div class="pic_box">
        <img src="images/background_head.jpg"  alt=""/>
    </div>
    <div class="character">
        <p>安徽6座万达联动</p>
        <p>10.31打造年度最强促销</p>
    </div>
    <div class="register">
        <form id="myForm" action="http://www.baidu.com">
            <div class="icon_input"><img src="images/icon_name.jpg" class="left icon_name" alt=""/> <input class="left"  type="text" placeholder=" 真实姓名："/></div>
            <br/>
            <div class="icon_input"><img src="images/icon_phone.jpg" class="left icon_name" alt=""/> <input class="left" type="text" placeholder=" 手机号："/></div>
            <div class="btn_box" >
                <p><a href="javascript:formSubmit()" class="helpBtn helpBtn_yes">确定</a></p>
            </div>
        </form>
    </div>
</div>
<script>
    function formSubmit(){
        document.getElementById("myForm").submit()
    }
</script>
</body>
</html>