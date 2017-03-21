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
        	<h2>Promotions</h2>
        	<p>Stay tuned for the exciting promotions exclusively for our prestige Club SOLIS members.</p>
          </div>
       </div>
      </div>
    </div>
    <div class="row">
        <div class="promotions_content">
            <div class="col-lg-12 hidden-xs">
                <div class="crumb">
                    <a href="index.php">Home</a> >
                    <label style="display: inline;font-weight: normal;">Club SOLIS</label> >
                    <a href="promotions.php" >Promotions</a> >
                    <label style="display: inline;font-weight: normal;">Club SOLIS F&B rewaards for Free</label>
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
                    <div class="promotion_title">Club SOLIS F&B rewards for Free</div>
                    <div class="promotion_content">
                        <p>Club Solis members earn 500 points or above within One calendar date (00:00 – 23:59), can have $100 F&B voucher for FREE.</p>
                        <p>Promotion Period: Start from now to 31st Dec, 2016</p>
                        <div class="row">
                            <div class="col-md-4 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">How to Participate</p>
                                <p style="padding: 25px 20px;" class="text-left">Club Solis members earn 500 points or above within One calendar date at the same site (00:00 – 23:59)</p>
                            </div>
                            <div class="col-md-2 promotion_content_row_col">
                                <p style="padding: 5px 10px;" class="text-center">Rewards</p>
                                <p style="padding: 45px 5px;" class="text-center">$100 F&B voucher</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">Collected Period</p>
                                <p style="padding: 35px 30px;" class="text-left">Same<br>calendar date before 23:59</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px 0;" class="text-center">Collected Location</p>
                                <p style="padding: 35px 20px;" class="text-left">Collected on the same site which points earned</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="promotion_detail" style="line-height: 30px;padding: 20px 0">
                    <p>Terms and Conditions：</p>
                    <ol>
                        <li>Each Club Solis member can only participate the “Club Solis F&B Rewards for FREE” one time per each calendar date.</li>
                        <li>Club Solis members who earn 500 points or above within One calendar date at the same site (00:00 – 23:59) are qualify on this promotion.  Rewards collected period must be one the same points earned calendar date and same site, over the collected period will be forfeited. </li>
                        <li>Points will not be deducted.</li>
                        <li>All promotion cannot be used conjunction on other promotions or events.</li>
                        <li>Solis management shall be final.</li>
                        <li>Club Solis Membership Terms and Conditions.</li>
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
