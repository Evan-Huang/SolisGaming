<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Home | Solis</title>

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
    include_once 'header.html';
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
                    <label style="display: inline;font-weight: normal;">推广活动</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promotion_box">
                    <a href="promotion-1001.php">
                        <div class="promotion_banner" style="background-image: url('images/promo_500.png')">
                            <img src="images/promo_frame.png" alt="" class="img-responsive"></div>
                        <div class="promotion_title">永昱会赏您免费餐饮美食</div>
                        <div class="promotion_button">详情</div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="promotion_box">
                    <a href="promotion-1002.php">
                        <div class="promotion_banner" style="background-image: url('images/promo_banner_2.png')">
                            <img src="images/promo_frame.png" alt="" class="img-responsive">
                        </div>
                        <div class="promotion_title">加入永昱会，赏您$100即赏钱！</div>
                        <div class="promotion_button">详情</div>
                    </a>
                </div>
            </div>
        </div>


    </div>
    <!-- The Brand Story -->
<!--<div class="row">


</div>-->
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
