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
    include_once 'header.php';
?>
<!-- /Header -->
<div class="container-fluid" style="z-index: 1">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero_banner promotion" style="background-image: url('images/promotion_banner.jpg')">
        <div class="promotion_tagline">
        	<h2>推廣活動</h2>
        	<p>永昱會會員尊享之精彩推廣活動快將推出，敬請密切留意。</p>
          </div>
       </div>
      </div>
    </div>
    <div class="row">
        <div class="promotions_content">
            <div class="col-lg-12 hidden-xs">
                <div class="crumb">
                    <a href="index.php">SOLIS永昱</a> >
                    <label style="display: inline;font-weight: normal;">永昱會</label> >
                    <a href="promotions.php" >推廣活動</a> >
                    <label style="display: inline;font-weight: normal;">加入永昱會，賞您$100即賞錢！</label>
                </div>
            </div>
            <div class="col-md-5">
                <div class="promotion_box promotion_detail">
                    <div class="promotion_banner" style="background-image: url('images/promo_banner_2.png')">
                        <img src="images/promo_frame.png" alt="" class="img-responsive"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="promotion_detail">
                    <div class="promotion_title">加入永昱會，賞您$100即賞錢！</div>
                    <div class="promotion_content">
                        <p>成為永昱會新會員首兩天耍樂(成為會員當日00:00至翌日晚上23:59)，賺取288積分，即送您$100即賞錢！</p>
                        <p>推廣日期：由即日起至2017年2月28日</p>
                        <div class="row">
                            <div class="col-md-4 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">獲獎方法</p>
                                <p style="padding: 15px;" class="text-left">成為永昱會新會員，並於成功申請當日00:00至翌日晚上23:59前於成功申請之永昱會角子機耍樂並賺取288分。</p>
                            </div>
                            <div class="col-md-2 promotion_content_row_col">
                                <p style="padding: 5px 10px;" class="text-center">獎賞</p>
                                <p style="padding: 55px 5px;" class="text-center">$100即賞錢</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">換領日期</p>
                                <p style="padding: 35px 30px;" class="text-left">成為新會員翌日晚上23:59前領獎</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px 0;" class="text-center">換領地點</p>
                                <p style="padding: 35px 20px;" class="text-left">成功申請會員之永昱會角子機櫃枱</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="promotion_detail" style="line-height: 30px;padding: 20px 0">
                    <p>活動詳情：</p>
                    <ol>
                        <li>永昱會新會員之定義：於角子場系統內完全沒有任何資料。</li>
                        <li>所有合資格之新會員只可參加是次「永昱會新會員推廣活動」一次。</li>
                        <li>合資格之新會員，必須於成為新會員翌日晚上23:59前到登記之永昱會角子機櫃枱領獎，逾期作廢。</li>
                        <li>獲贈之獎賞將不會扣除累積積分。</li>
                        <li>新會員獎賞必須一次性領取，並於同一台角子機使用。</li>
                        <li>會員必須插入會員卡才可使用即賞錢。</li>
                        <li>永昱管理層保留最絡決定權。</li>
                        <li>條款及細則適用。</li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
    <!-- The Brand Story -->
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
