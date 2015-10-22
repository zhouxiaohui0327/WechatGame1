<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2015/10/19
 * Time: 16:46
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
    <!--    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>-->
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
        <img src="./images/text_1.png" style="width: 100%" alt=""/>
    </div>
    <div class="progress_bar">
        <img src="images/cash.png" class="cash_img" alt=""/>
    </div>
    <p class="cash_text">领取奖品请在下方选择所在城市万达广场</p>
    <div class="big_box">
        <div class="choose">
            <p>---请选择---</p>
        </div>
        <div style="width: 100%;text-align: center;margin: 0 auto;background-color: #e2745b;">
            <div class="select_box">
                <select class="place_choose" size="6" form="choose_form">
                    <option value="合肥包河万达广场">合肥包河万达广场</option>
                    <option value="天鹅湖万达广场">合肥天鹅湖万达广场</option>
                    <option value="芜湖万达广场">芜湖万达广场</option>
                    <option value="蚌埠万达广场">蚌埠万达广场</option>
                    <option value="马鞍山万达广场">马鞍山万达广场</option>
                    <option value="阜阳万达广场">阜阳万达广场</option>
                </select>

                <form id="choose_form" action="http://www.baidu.com"></form>
            </div>
        </div>
    </div>
    <div class="btn_box" >
        <p><a href="javascript:chooseSubmit()" class="helpBtn helpBtn_yes">确定</a></p>
    </div>
    <script>
        function chooseSubmit(){
            document.getElementById("choose_form").submit()
        }
    </script>



</div>
</body>
</html>