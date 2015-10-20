<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/14
 * Time: 23:35
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
    <div class="progress_bar">
        <img src="images/progress_bar.png" alt=""/>
        <p class="white_text">参与活动，筹满100能量值可以领取100元现金券 !</p>
    </div>
    <div class="regulation">
        <p><a href="javascript:regulation()"><img src="images/regulation.png" alt="" class="regulationBtn"/></a></p>

        <?php
        require_once "functions.php";
        connectDb();
        if(!isset($_GET['id'])){
            $number=1;
        }else{
            $number = $_GET['id'];
        }
        if(!isset($_GET['uid'])){
            $uid=1;
        }else{
            $uid = $_GET['uid'];
        }
        $result = mysql_query("SELECT * FROM user_info WHERE number='$number'AND uid='$uid'");
        $num = mysql_num_rows($result);
        if(!$num){
            ?>
            <p><a href="joinBtnServer.php" class="joinBtn"><img src="images/begin.png" alt=""/></a></p>
        <?php
        }else{
            ?>
            <p><a href="joinBtnServer.php?<?php echo "id=".$number."&uid=".$uid;?>"  class="joinBtn"><img src="images/begin.png" alt=""/></a></p>
        <?php
        }
        ?>
    </div>
</div>
<div id="d-mask" style="display:none"></div>
<div class="popup_box" style="display: none"  id="popupBtn">
    <img class="regulation_head" src="images/regulation_head.png" alt=""/>
    <div class="popup">
        <a href="javascript:returnBtn()" class="return">返回游戏</a>
    </div>
</div>



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