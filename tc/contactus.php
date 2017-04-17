<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>聯絡我們 | Solis永昱</title>

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
    include_once 'header.php';
?>
<!-- /Header -->
<div class="container-fluid" style="z-index: 1">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero_banner contactus" style="background-image: url('images/contact us_banner.jpg')">
        <div class="contactus_tagline">
          <h2>聯絡我們</h2>
        </div>
      </div>
    </div>
    </div>
    <!---->
    <div class="row bg_image">
      <div class="contact_box">
      <div class="col-lg-12">
        <div class="crumb">
          <a href="index.php">SOLIS永昱</a> >
          <label style="display: inline;font-weight: normal;">聯絡我們</label>
        </div>
      </div>
      <!--<div class="col-lg-12 ">

      </div>-->
      <div class="col-lg-12">
        <p class="contact_box_intro">如閣下欲蒞臨澳門永昱，歡迎隨時聯絡我們，我們熱切期盼為閣下安排愉快及難忘的體驗，期望不久的將來能為閣下服務！</p>
          <h2 class="letter_4">角子機</h2>
          <h3 class="solismacau">澳門永昱</h3>
          <div class="row solismacau_content">
              <div class="col-md-5">
                  <h4>澳門君怡永昱會角子機</h4>
                  <p>澳門 氹仔 柯維納馬路142號</p>
                  <p>澳門君怡酒店1樓 </p>
                  <h4>顧客服務熱線: +853 - 6228 1280</h4>
              </div>
              <div class="col-md-5 col-md-offset-2">
                <h4>皇家金堡永昱會角子機</h4>
                <p>澳門 羅理基博士大馬路1118號</p>
                <p>皇家金堡酒店1、2樓</p>
                <h4>顧客服務熱線: +853 - 6228 1312</h4>
              </div>
              <div class="col-md-5">
                <h4>澳門置地永昱會角子機</h4>
                <p>澳門 新口岸友誼大馬路555號</p>
                <p>澳門置地廣場酒店3樓</p>
                <h4 style="border-bottom: none;">顧客服務熱線: +853 - 6228 0770 </h4>
              </div>
          </div>
        </div>


    </div>

      <div class="col-lg-12">
        <div class="row solisoffice">
          <div class="col-md-5">
            <div>
              <h2 class="letter_4">辦公室</h2>
              <h3 class="solismacau">澳門</h3>
              <p class="office_content">澳門 新口岸 宋玉生廣場411-417號 <br>
                  皇朝廣場19樓G-H室</p>
              <p class="office_hotline">顧客服務熱線: +853 - 2878 3918</p>
              <p class="office_email">電郵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : info@solismacau.com</p>
            </div>
            <div>
              <h3 class="solismacau">越南</h3>
              <p class="office_content">7th Floor, 60 Nguyen Van Thu Street Da Kao Ward,
                  District 1,  Ho Chin Minh City, Vietnam</p>
              <p class="office_hotline">顧客服務熱線:  +84 - 8668 19801 </p>
              <p class="office_email" style="border-bottom: none;">電郵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : info@solisvn.com</p>
            </div>
          </div>

          <div class="col-md-6 col-md-offset-1">
            <div class="contact_content">
              <form>
                <h3 class="title">聯繫資料</h3>
                <div class="form-group">
                  <label for="exampleInputEmail1">姓名</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">電郵</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">電話</label>
                  <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Phone" >
                </div>
                <div class="form-group">
                  <label for="message">留言</label>
                  <textarea id="exampleInputMessage1" style="height: 120px" class="form-control" value=""></textarea>
                </div>
                <button type="button" class="btn btn-default" onclick="getintouch()">發送</button>
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

    function getintouch() {

        var exampleInputName1 = $("#exampleInputName1").val();
        var exampleInputEmail1 = $("#exampleInputEmail1").val();
        var exampleInputPhone1 = $("#exampleInputPhone1").val();
        var exampleInputMessage1 = $("#exampleInputMessage1").val();
        alert('success');
        $.ajax({
            type : "POST",
            url :  "../swiftmailer/mailgun_with_swiftmailer.php",
            data:  {"exampleInputName1" : exampleInputName1,"exampleInputEmail1" : exampleInputEmail1,"exampleInputPhone1" : exampleInputPhone1, "exampleInputMessage1" : exampleInputMessage1},
            success : function (data) {
//                if (data == 'success')
//                    alert('success');
            },
            complete : function (data) {
//                if (data == 'false')
//                    alert('fail');
            },
            error : function (data) {
            }
        });
        alert('success');
    }

	</script>
</body>
</html>
