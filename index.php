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
<!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="./css/base.css"/>

    <title>免费吃大餐 点赞筹到钱</title>
</head>
<body>
<div class="content-box ">
<!--    浮沉-->
    <div class="popup_box" style="display: none" id="popupBtn">
        <img class="regulation_head" src="images/regulation_head.png" alt=""/>
        <div class="popup">
            <div class="regulation_text">
                <p style="text-align: left">1、10.23日-10.30日为线上筹钱时间，成功兑换到现金券的需在10.30-11.1期间达到选择用券的万达广场客服总台领取实物券。</p>
                <p style="text-align: left">2、众筹目标值为100，每次好友筹钱金额不等，达成目标值，可领取100元餐饮现金券。先到先得，领完即止。</p>
                <p style="text-align: left">3、活动只支持微信平台，用户完成众筹值需登记姓名、手机号码；活动期间一个手机号码，一个微信号只能参与一次，顾客凭手机号码兑换，执行公司提供后台数据。</p>
                <p style="text-align: left">4、100元现金券，可在10.30-11.1期间使用于室内街餐饮商家，不找零，盖章有效，可与商家其他优惠同时享用</p>
                <p style="text-align: left">5、如发现恶意作弊行为，主办单位将取消该用户的参与资格。</p>

            </div>
            <div class="returnBtn_wrap">
                <div class="regulation_wrap_1"><a href="javascript:returnBtn()" class="return">返回游戏</a></div>
            </div>
        </div>
    </div>


    <div class="pic_box">
        <img src="images/background_head.jpg"  alt=""/>
    </div>
    <div class="character">
        <img src="./images/text_1.png" style="width: 100%" alt=""/>
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