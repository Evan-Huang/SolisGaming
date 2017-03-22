<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Promotions | Solis</title>

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
                    <label style="display: inline;font-weight: normal;">Join Club SOLIS, Rewards $100 E-bonus</label>
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
                    <div class="promotion_title">Join Club <a href="#">SOLIS</a>, Rewards $100 E-bonus</div>
                    <div class="promotion_content">
                        <p>Join us to be New Club Solis member and earn 288 points or above on the first two days (on the register day from 00:00 to the following day 23:59), can have $100 E-bonus for FREE.</p>
                        <p>Promotion Period: Start from now to 28th Feb, 2017</p>
                        <div class="row">
                            <div class="col-md-4 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">How to Participate</p>
                                <p style="padding: 15px;" class="text-left">New Sign up and earn 288 points or above on the register day from 00:00 to the following day 23:59 at the register site</p>
                            </div>
                            <div class="col-md-2 promotion_content_row_col">
                                <p style="padding: 5px 10px;" class="text-center">Rewards</p>
                                <p style="padding: 55px 5px;" class="text-center">$100 E-bonus</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px;" class="text-center">Collected Period</p>
                                <p style="padding: 35px 30px;" class="text-left">the following register day before  23:59</p>
                            </div>
                            <div class="col-md-3 promotion_content_row_col">
                                <p style="padding: 5px 0;" class="text-center">Collected Location</p>
                                <p style="padding: 35px 20px;" class="text-left">Collected on the same register site </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="promotion_detail" style="line-height: 30px;padding: 20px 0">
                    <p>Terms and Conditions：</p>
                    <ol>
                        <li>New Club Solis member: no record in Slot system.</li>
                        <li>All qualify new members can only participate “Join Club Solis, Rewards $100 E-bonus” promotion for one time.</li>
                        <li>Qualify new members need to collected their new sign up rewards before the following register day 23:59 at the register site.</li>
                        <li>Points will not be deducted.</li>
                        <li>All New Sign Up rewards need to collect at one time and used up on one machine.</li>
                        <li>E-bonus only apply on card members.</li>
                        <li>Solis management shall be final.</li>
                        <li>Club Solis Membership Terms and Conditions.</li>
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
