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
<link href="style/contact.css" rel="stylesheet">
<script src="js/modernizr.js"></script>
</head>
<body>
<!-- Header -->
<?php
    include_once 'header.html';
?>
<!-- /Header -->
<div class="container-fluid" style="z-index: 1">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero_banner contactus" style="background-image: url('images/contact us_banner.jpg')">
        <div class="contactus_tagline">
          <h2>CONTACT US</h2>
        </div>
      </div>
    </div>
    </div>
    <!---->
    <div class="row bg_image">
      <div class="contact_box">
      <div class="col-lg-12">
        <div class="crumb">
          <a href="index.php">Home</a> >
          <label style="display: inline;font-weight: normal;">Contact Us</label>
        </div>
      </div>
      <!--<div class="col-lg-12 ">

      </div>-->
      <div class="col-lg-12">
        <p class="contact_box_intro">If there is anything you may need to make your visit at SOLIS a more delightful and memorable experience please contact us.We look foward to hearing from you!</p>
          <h2 class="letter_4">SLOT</h2>
          <h3 class="solismacau">SOLIS MACAU</h3>
          <div class="row solismacau_content">
              <div class="col-md-5">
                  <h4>Grandview Hotel Macau</h4>
                  <p>1/F,SOLIS Grandview Slot Lounge</p>
                  <p>142 Estrada Governador Albano de Oliverira,Taipa,Macau</p>
                  <h4>Customer Service Hotline :+853-6228 1280</h4>
              </div>
              <div class="col-md-5 col-md-offset-2">
                <h4>Casa Real Hotel</h4>
                <p>1 & 2/F, SOLIS Casa Real Slot Lounge</p>
                <p>1118 Avenida do. Dr. Rodrigo Rodrigues, <br>Macau</p>
                <h4>Customer Service Hotline: +853 - 6228 1312</h4>
              </div>
              <div class="col-md-5">
                <h4>The Landmark Macau</h4>
                <p>3/F, SOLIS The Landmark Slot Lounge</p>
                <p>555 Avenida da Amizade, Macau.</p>
                <h4 style="border-bottom: none;">Customer Service Hotline: +853 - 6228 0770</h4>
              </div>
          </div>
        </div>


    </div>

      <div class="col-lg-12">
        <div class="row solisoffice">
          <div class="col-md-5">
            <div>
              <h2 class="letter_4">OFFICE</h2>
              <h3 class="solismacau">MACAU</h3>
              <p class="office_content">Flat G-H, 19/F, N⁰ 411-417, Praca Wong Chio<br>
                Alameda Dr. Carlos D’ Assumpção,  Macau</p>
              <p class="office_hotline">Customer Service Hotline: +853 - 2878 3918</p>
              <p class="office_email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;: info@solismacau.com</p>
            </div>
            <div>
              <h3 class="solismacau">Vietnam</h3>
              <p class="office_content">7th Floor, 60 Nguyen Van Thu Street Da Kao Ward,
                District 1,  Ho Chin Minh City, Vietnam</p>
              <p class="office_hotline">Customer Service Hotline:  +84 - 8668 19801</p>
              <p class="office_email" style="border-bottom: none;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;: info@solisvn.com</p>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-1">
            <div class="contact_content">
              <form>
                <h3 class="title">GET IN TOUCH</h3>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Your Phone</label>
                  <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Phone" >
                </div>
                <div class="form-group">
                  <label for="message">Your Message</label>
                  <textarea style="height: 120px" class="form-control" value=""></textarea>
                </div>
                <button type="submit" class="btn btn-default">SEND</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

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
        $("#bs-navbar-collapse-1 ul>li:last").addClass('active');

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
