<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/14
 * Time: 22:53
 */
?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>
    <title>请好友帮个忙</title>
</head>
<body>
<div class="content-box ">
    <div class="popup_box_text" style="display: none"  id="popupBtn">
        <div class="popup_wrap">
            <p>对不起，您还没有筹够款额，</p>
            <p>继续邀请好友帮忙吧</p>
            <a href="javascript:returnBtn()" class=" return_small">返回游戏</a>
        </div>
    </div>


    <div class="pic_box">
        <img src="images/background_head.jpg"  alt=""/>
    </div>
    <div class="character">
        <p>安徽6座万达联动</p>
        <p>10.31打造年度最强促销</p>
    </div>
    <div class="progress_bar">
        <img src="images/progress_bar.png" alt=""/>
        <p class="white_text"><a href="" style="color:white;">看看哪些好友帮我筹了钱</a></p>
    </div>
    <div class="regulation">
        <p><a href=""><img src="images/help.png" style="width: 65%" /></a></p>
        <p><a href="javascript:regulation()" class="joinBtn"><img src="images/prize.png" /></a></p>
    </div>
<?php
//$number=$_GET["id"];
//$uid=$_GET["uid"];
//$str = file_get_contents("list.txt");
//$a=stripos($str,$number);
//$b=stripos($str,$uid);
//$str= substr($str,$a,$b-1);
//$arr = (explode("|",$str));
//?>
    <div id="d-mask" style="display:none"></div>




    <script>
        function regulation(){
            document.getElementById("d-mask").style.display="block";
            document.getElementById("popupBtn").style.display="block";
        }
        function returnBtn(){
            document.getElementById("d-mask").style.display="none";
            document.getElementById("popupBtn").style.display="none";
        }
    </script>
</body>
</html>