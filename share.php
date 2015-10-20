<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/14
 * Time: 23:18
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
<!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <link rel="stylesheet"  type="text/css" href="./css/base.css"/>
</head>
<body>
<div class="content-box ">
<!--    浮层-->
    <div class="popup_box_text" style="display:none"  id="popupBtn">
        <div class="popup_wrap">
            <p>谢谢你帮XXX筹到XXX钱！</p>
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
    <?php
    if(!isset($_GET['idh'])){
        $number_h=1;
    }else{
        $number_h = $_GET['idh'];
    }
    if(!isset($_GET['uidh'])){
        $uid_h=1;
    }else{
        $uid_h = $_GET['uidh'];
    }
    if(!isset($_GET['id'])){
        $number=0;
    }else{
        $number = $_GET['id'];
    }
    if(!isset($_GET['uid'])){
        $uid=0;
    }else{
        $uid = $_GET['uid'];
    }
    ?>
   <div class="btnBox">
       <p><a href="javascript:helpBtn(<?php echo $number_h.','.$uid_h.','.$number.','.$uid; ?>)" class="helpBtn">帮TA筹款</a></p>
       <p><a href="joinBtnServer.php" class="helpBtn helpBtn_join">我也要参与</a></p>
   </div>

    <div id="d-mask" style="display:none"></div>
    <script>
        function helpBtn(a,b,c,d){
            var idh = a;
            var uidh = b;
            var id = c;
            var uid = d;

            $.ajax({
                url:'http://127.0.0.1/WechatGame1/shareHelpServer.php?idh='+a+'&uidh='+b+'&id='+c+'&uid='+d,
                type:'get',
                data:{idh:a,uidh:b,id:c,uid:d},
                dataType:'json',
                success:function(result){
                    if(result.state){

                        window.self.location="http://127.0.0.1/WechatGame1/share.php?idh="+a+"&uidh="+b+"&id="+result['number']+"&uid="+result['uid'];
                        document.getElementById("popupBtn").style.display="block";
                        document.getElementById("d-mask").style.display="block";
                    }else{
                        alert(result.data);
                    }
                }
            })
        }
    </script>


</div>
<div id="d-mask" style="display:none"></div>

<script>

    function returnBtn(){
        document.getElementById("d-mask").style.display="none";
        document.getElementById("popupBtn").style.display="none";
    }
</script>
</body>
</html>