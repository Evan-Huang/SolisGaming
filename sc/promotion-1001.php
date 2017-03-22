<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>推广活动 | Solis永昱</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/jquery.vm-carousel.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="style/main.css" rel="stylesheet">
<link href="style/promotion.css" rel="stylesheet">
<script src="js/modernizr.js"></script>
</head>
<body class="promotions">
<!-- Header -->
<?php
    include_once 'header.php';
?>
<!-- /Header -->
<div class="container-fluid" style="z-index: 1">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero_banner promotion" style="background-image: url('images/promotion_banner.jpg')">
        <div class="promotion_tagline">
        	<h2>推广活动</h2>
        	<p>永昱会会员尊享之精彩推广活动快将推出，敬请密切留意。</p>
          </div>
       </div>
      </div>
    </div>
    <div class="row">
        <div class="promotions_content">
            <div class="col-lg-12 hidden-xs">
                <div class="crumb">
                    <a href="index.php">SOLIS永昱</a> >
                    <label style="display: inline;font-weight: normal;">永昱会</label> >
                    <a href="promotions.php" >推广活动</a> >
                    <label style="display: inline;font-weight: normal;">永昱会赏您免费餐饮美食</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="promotion_box promotion_detail">
                    <div class="promotion_banner" style="background-image: url('images/promo_500.png')">
                        <img src="images/promo_frame.png" alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="promotion_detail">
                    <div class="promotion_title">永昱会赏您免费餐饮美食</div>
                    <div class="promotion_content">
                        <p>永昱会会员每日(凌晨00:00至晚上23:59)耍乐，赚取500分，即送您$100美食礼劵！</p>
                        <p>推广日期：由即日起至2016年12月31日</p>
                        <div class="row">
                            <div class="col-md-4 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">获奖方法</p>
                                <p style="padding: 25px 20px;" class="text-left">当日 (凌晨00:00至晚上23:59)于永昱会角子机耍乐，并赚取500分</p>
                            </div>
                            <div class="col-md-2 promotion_content_row_col">
                                <p style="padding: 5px 10px;" class="text-center">奖赏</p>
                                <p style="padding: 45px 5px;" class="text-center">$100<br>美食礼劵</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">换领日期</p>
                                <p style="padding: 35px 30px;" class="text-left">当日晚上<br>23:59前领奖</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px 0;" class="text-center">换领地点</p>
                                <p style="padding: 35px 20px;" class="text-left">赚取积分之<br>永昱会角子机<br>柜枱</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="promotion_detail" style="line-height: 30px;padding: 20px 0">
                    <p>活动详情：</p>
                    <ol>
                        <li>所有永昱会会员每日只可参加「永昱会赏您免费餐饮美食」一次。</li>
                        <li>参与是次活动之会员必须于当日凌晨00:00至晚上23:59赚取500积分或以上。换领美食劵日期及地点必须于赚取积分之同一场所及当日晚上23:59前进行，逾期作废。</li>
                        <li>获赠之奖赏将不会扣除累积积分。</li>
                        <li>所有推广活动不可同时参与。</li>
                        <li>永昱管理层保留最络决定权。</li>
                        <li>条款及细则适用。</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>

    <!-- /Job -->
  </div>
</div>
<footer>
    <!-- Footer -->
    <?php
        include_once 'footer.html';
    ?>
    <!-- /Footer -->
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.vm-carousel.js"></script>
<script src="js/index.js"></script>
<script>

    $(window).scroll(function (event) {


        if ($(this).scrollTop() > 50) {

            $("#wrap").addClass("fix-menu");

        } else {

            $("#wrap").removeClass("fix-menu");

        }

    });

    $(document).ready(function(){

        $('.li_bt_home').removeClass('active');
        $("#bs-navbar-collapse-1 li[class='dropdown']").addClass('active');

        $( "#bs-navbar-collapse-1 li a[href='promotions.php']" ).parent().addClass( 'active' );

    });
    //    返回上一頁面
    window.document.onkeydown = disableRefresh;
    function disableRefresh(evt){
        evt = (evt) ? evt : window.event
        if (evt.keyCode == 8) {
            history.back();
        }
    }


	</script>
</body>
</html>
