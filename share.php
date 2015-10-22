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
        <div class="thank_box">
            <div class="thank_box_inside">
                <p>谢谢你帮XXX筹到XXX钱！</p>
                <div class="return_wrap">
                    <a href="javascript:returnBtn()" class=" return_small" style="margin:0 auto;display: inline-block">返回游戏</a>
                </div>
            </div>

        </div>
    </div>



    <div class="pic_box">
        <img src="images/background_head.jpg"  alt=""/>
    </div>
    <div class="character">
        <img src="./images/text_1.png" style="width: 100%" alt=""/>
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
    <div class="place_wrap" style="width:100%">
        <div class="place_box">
            <h1>合肥天鹅湖万达广场</h1>
            <img src="./images/icon.png" style="width:100%" alt=""/>
            <div class="place_text">
                <p>500品牌万达独家折扣，4折！5折！新品8折！</p>
                <p>室内25家餐饮品牌真5折；20万现金券、2000张电影票购物、价值8万家电奖品满额赠！</p>
                <p>天空之城，会“心跳”的艺术展！</p>
                <p>2015创意策划，再现伦敦艺术节作品“心跳” ，国际艺术大师亲临制作</p>
            </div>
            <div class="place_box">
                <h1>合肥包河万达广场</h1>
                <img src="./images/icon.png" style="width:100%" alt=""/>
                <div class="place_text">
                    <p>中国好声音包河万达专场海选！老徐无厘头散扯搞笑助阵！</p>
                    <p>Iphone6s、Apple Watch、43英寸液晶电视等10万元好礼、惊喜抽，8000份好礼来就送，七匹狼、花花公子等专场特惠1折起！</p>
                </div>
            </div>
            <div class="place_box">
                <h1>芜湖镜湖万达广场</h1>
                <img src="./images/icon.png" style="width:100%" alt=""/>
                <div class="place_text">
                    <p>万达百城狂欢节，iwatch抽到手软，千份小家电满就送，优衣库满350减50。</p>
                    <p>大咖生日秀、狂欢南瓜节、创意绘画趴，精彩无极限 ！</p>

                </div>
            </div>
            <div class="place_box">
                <h1>蚌埠万达广场</h1>
                <img src="./images/icon.png" style="width:100%" alt=""/>
                <div class="place_text">
                    <p>百城狂欢，秋冬服饰4折起，1元秒杀超值商品，金条、iphone6s疯狂抽。</p>
                    <p>万圣节千人狂欢派对，恐怖小屋、外模COS巡游、悬浮表演惊险杂技嗨翻天！</p>
                </div>
            </div>
            <div class="place_box">
                <h1>马鞍山万达广场</h1>
                <img src="./images/icon.png" style="width:100%" alt=""/>
                <div class="place_text">
                    <p>10.31餐饮半价，3F指定餐饮商户消费五折！</p>
                    <p>10.31（9:30-12:00）宝贝王任性包场，全场让你免费玩！</p>
                </div>
            </div>
            <div class="place_box">
                <h1>阜阳万达广场</h1>
                <img src="./images/icon.png" style="width:100%" alt=""/>
                <div class="place_text">
                    <p>万斤大米大放送、百台电视疯狂抽！</p>
                    <p>流行服饰4折起，折后满500送100！259元/克抢黄金！狂欢摇滚夜，百元玩偶嗨翻全场！</p>
                </div>
            </div>
        </div>

    </div>
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