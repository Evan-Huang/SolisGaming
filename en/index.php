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
  <link href="style/carousel.css" rel="stylesheet">
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
        <!--<div class="hero_banner" style="background-image: url(images/hero_banner.jpg)"> </div>-->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
          <!-- Overlay -->
          <!--<div class="overlay"></div>-->

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item slides active">
              <div class="slide-5"></div>
              <div class="intro">
                <h1>Thrill Your Senses</h1>
              </div>
            </div>
            
            <div class="item slides ">
              <div class="slide-4"></div>
              <div class="intro">
                <h1>Thrill Your Senses</h1>
              </div>
            </div>  
            
            <div class="item slides ">
              <div class="slide-3"></div>
              <div class="intro">
                <h1>Thrill Your Senses</h1>
              </div>
            </div>                                  
            
          </div>

        </div>
      </div>
    </div>
   
    <!-- The Brand Story -->
    <div class="row white_bg" id="who">
      <div class="col-md-6">
        <h1 class="text-center">WHO WE ARE</h1>
      </div>
      <div class="col-md-6 who_text_p">
       
          <p>SOLIS, meaning the Sun in Spanish, with magnificent power from the centre of universe. From the ancient Inca principles to the nowadays modern civilisation, it is commonly believed that the Sun symbolizes the giver of life, the source of strength and power which derives the desirable success and excitement.</p>
          <p>The Sun also manifests the colour of gold at sunrise and at sunset. The uniqueness of Gold has been associated with the luck, wealth and prosperity for decades. </p>
          <p>Be the power of universe and thrill your senses at SOLIS!</p>
       
      </div>
    </div>
    <div class="row orange_bg"> <img src="images/theme_images.png" alt="" class="img-responsive"> </div>
    <!-- /The Brand Story -->
    <!-- Our Loctions -->
    <div class="row local_bg" id="location">
      <div class="col-lg-12 black_bg">
        <h2 class="text-center">Our Loctions</h2>
      </div>
      <div class="col-sm-12">
      	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1RwQcA-M-sqM-XcEc5kaL8c2SMcs" width="100%" height="320"></iframe>
      </div>
      <div class="col-md-4 local_place_bg"> 
       <div class="text-center local_img"><img src="images/location_1.jpg" alt="" class="img-responsive"></div>
        <div class="local_desc">
          <h4>Grandview Hotel Macau</h4>
          <p>1/F, SOLIS Grandview Macau Slot Lounge 142 Estrada Governador Albano de Oliveira, Taipa, Macau </p>
          <p>Customer Service Hotline: <br>
<strong>+853 - 6228 1280</strong></p>
          <p>Email: info@solismacau.com</p>
        </div>
		</div>
       <div class="col-md-4 local_place_bg">  
       <div class="text-center local_img"><img src="images/location_2.jpg" alt="" class="img-responsive"></div> 
        <div class="local_desc">
          <h4>Casa Real Hotel</h4>
          <p>1 & 2/F, SOLIS Casa Real Slot Lounge
          1118 Avenida do. Dr. Rodrigo Rodrigues, Macau</p>
          <p>Customer Service Hotline: <br>
<strong>+853 - 6228 1312</strong></p>
          <p>Email: info@solismacau.com</p>
        </div>
        </div>
       <div class="col-md-4 local_place_bg">  
       <div class="text-center local_img"><img src="images/location_3.jpg" alt="" class="img-responsive"></div>
        <div class="local_desc">
          <h4>The Landmark Macau</h4>
          <p>3/F, SOLIS The Landmark Macau Slot Lounge 
555 Avenida da Amizade, Macau</p>
          <p>Customer Service Hotline: <br>
<strong>+853 - 6228 0770</strong></p>
          <p>Email: info@solismacau.com</p>   
        </div>
        </div>
      
    </div>
    <!-- /Our Loctions -->
    <!-- Club Solis -->
    <div class="row club_bg" id="club">
      <div class="col-lg-12">
        <h2 class="text-center">CLUB SOLIS </h2>
      </div>
      <div class="col-md-6 local_place_bg">
        <div class="local_desc text-justify" style="color: #ffffff">
        
            <p>Welcome to the world of Club SOLIS, one of the most preferred membership program offers the exciting experience, the endless rewards, exclusive privileges and personalized customer service. </p>
            <p>Action now to enter the globe where only the best experiences and wide array of amazing rewards await you!</p>

          
        </div>
      </div>
      <div class="col-md-6 local_place_bg">
        <div class="local_desc text-center"> <img src="images/logo_solis_club.png" alt="" class="" style="width: 60%"> </div>
      </div>
      <div class="col-md-6 local_place_bg ">
       <a href="promotions.html">
        <div class="club_text_box">
          <h3>Promotions</h3>
          <p>Stay tuned for the exciting promotions exclusively for our prestige Club SOLIS members</p>
        </div>

        <div class="club_promo text-center" style="background-image: url('images/club_promo_bg.jpg')"> </div>
        </a> </div>
      <div class="col-md-6 local_place_bg">
        <a href="benefits.html">
        <div class="club_text_box">
          <h3>Benefits Grid</h3>
          <p>Discover the benefits of being a Club Solis member.</p>
        </div>
        <div class="club_promo text-center" style="background-image: url('images/club_benefits_grid.jpg')"> </div>
        </a> </div>
      <div class="col-md-12" id="cards">
        <h2 class="club_title">Club Solis Cards TIER:</h2>
      </div>
	<div class="col-md-12 local_place_bg ">
			<table class="table borderless">
			<tr>
			<td width="70%" style="padding-left: 6%">
		 <h4 >STAR</h4>
          <p>Welcome to the world of Club SOLIS and open the door to victory and exciting privileges!</p>
			</td>
			<td width="30%" align="center">
				<img id="card1" src="images/card_face_1.png" alt="" class="img-responsive" style="padding: 0 10px;">	
			</td>
			</tr>
						<tr>
			<td style="padding-left: 6%">
		 <h4 >CELESTIAL</h4>
        <p>Earn 3,888 points or more in the last 6 months.</p>
			</td>
			<td align="center">
				<img id="card2" src="images/card_face_2.png" alt="" class="img-responsive" style="padding: 0 10px;">	
			</td>
			</tr>
						<tr>
			<td style="padding-left: 6%">
		 <h4 >SOLSTICE</h4>
          <p>Earn 26,888 points or more in the last 6 months.</p>
			</td>
			<td align="center">
				<img id="card3" src="images/card_face_3.png" alt="" class="img-responsive" style="padding: 0 10px;">	
			</td>
			</tr>
						<tr>
			<td style="padding-left: 6%">
		 <h4 >EQUINO</h4>
          <p>Exlusively avaialble to invited guests only. Prestige Personalized Customer Sevice and facilities offered.</p>	
			</td>
			<td align="center">
				<img id="card4" src="images/card_face_4.png" alt="" class="" style="padding: 0 10px;">	
			</td>
			</tr>
	
			</table>
      </div>
    </div>

    <!-- Who we are -->
    <div class="row who_bg" id="about">
      <div class="col-lg-12">
        <div class="who_text_box text-justify">
          <h2 class="text-center">ABOUT SOLIS</h2>
          <p><strong>Introduced in 2016, the SOLIS brand encompasses a team of experienced gaming professionals, focused on the Asian Casino Market.  Our Senior Management Team have been living and operating casino’s in Asia for more than 15 years in jurisdictions such as Macau, Vietnam, and Philippines.</strong></p>
          <p><strong>SOLIS is the wholly owned brand of the Gaming Business of Success Dragon Gaming Investments (SDGI); a joint venture between Success Dragon International (HKEX1182) and Vision Entertainment Group Macau.</strong></p>
          <p><strong>Head quartered in Hong Kong, and with operating offices in Macau and Vietnam, SOLIS is currently undertaking major expansion plans into other parts of Asia.  Our expertise lies in the Operation and Management of Casinos; both Table Operations and Slot Operations.</strong></p>
          <p><strong>The SOLIS Management team is continually building on its reputation for best in class Casino Management and Gaming Related Investment opportunities throughout Asia.  We are a young, forwarded thinking organization bringing new ideas, constantly challenging the status quo, and tirelessly looking for competitive edges in what is becoming a competitive market place.</strong></p>

          <p>In Macau, the world’s largest and highly regulated Gaming Market, we operate more than 650 electronic gaming machines across 4 venues (3 currently under the SOLIS Brand).</p>
          <p>Operating across 3 venues</p>
          <ul class="text-left">
            <li>Casa Real Casino – Since 2013 - 130 machines</li>
            <li>Grandview Casino – Since 2013 - 150 machines</li>
            <li>Landmark Pharaoh's Palace Casino– Since 2013 - 150 machines</li>
            <li>Kam Pek Paradise Casino – Since 2009 – 195 Machines (Operation managed by SOLIS only)</li>
          </ul>
        </div>
        <div class="row who_silder_box" >
          <div class="who_silder_text_box">
            <h2>Solis Macau</h2>
            <h3>Operating across 3 venues:</h3>
          </div>
          <div class="col-lg-10 col-lg-offset-1">
            <ul class="vmcarousel-centered-infitine vmc-centered">
              <li><img src="images/venues1.jpg" alt="" width="300">
                <div class="caption"><strong>Casa Real Casino</strong><br>
                  <i>Since 2013 - 120 machines</i></div>
              </li>
              <li><img src="images/venues2.jpg" alt="" width="300">
                <div class="caption"><strong>Grandview Casino</strong><br>
                  <i>Since 2013 - 156 machines</i></div>
              </li>
              <li><img src="images/venues3.jpg" alt="" width="300">
                <div class="caption"><strong>Landmark Pharaoh's Palace Casino</strong><br>
                  <i>Since 2013 - 156 machines</i></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /Who we are -->
    <!-- Job -->
    <div class="row jobs_bg text-center" id="jobs">
      <div class="col-lg-12">
        <h2>CAREERS</h2>
      </div>
      <div class="col-xs-6 col-md-3"><img src="images/jobs_photo2.jpg" alt="" class="img-responsive"></div>
      <div class="col-xs-6 col-md-3"><img src="images/jobs_photo1.jpg" alt="" class="img-responsive"></div>
      <div class="col-md-6 text-justify">
        <p><strong>Become Part of the SOLIS Family</strong></p>
        <p>At SOLIS, you will experience much more than just a career in a fun, friendly and exciting environment. You’ll achieve your dream career that offers exceptional opportunities for professional advancement and personal accomplishment. We offer excellent benefits, insurance and comprehensive career advancement program.</p>
        <p>For information on Career Opportunities to apply a specfic position, please EMAIL YOUR RESUME to <a href="mailto:hra@solismacau.com">hra@solismacau.com</a></p>
      </div>
    </div>
    <!-- /Job -->
  </div>
</div>
<footer>
  <div class="container">
    <div class="row" id="contactus">
      <div class="col-lg-12 text-center">
        <div class="footer_title"><h1>CONTACT US</h1></div>
      </div>
    </div>
  </div>
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

$(".button").click(function() {
    $('html, body').animate({
        scrollTop: $("#"+$(this).attr( "rel" )).offset().top-100
    }, 1000);
	$('#bs-navbar-collapse-1').removeClass('in');
	$(this.parentNode).parent().children('li').removeClass('active');
	$(this.parentNode).addClass('active');


});
	
	  // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').hide();
  });


          


	</script>
</body>
</html>
