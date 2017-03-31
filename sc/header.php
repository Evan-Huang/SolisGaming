<?php
		$theurl = $_SERVER["REQUEST_URI"];
		$lg = substr($theurl,5,2);
?> 
   <div class="container-fluid top_lang_bar">
    <div class="container ">
        <div class="row">
            <div class="col-md-4 col-md-offset-8 " >
                <div class="lang_box">
			                <a href="<?php echo str_replace("/sc/", "/tc/", $theurl); ?>">繁體中文</a>｜ 
                <a href="<?php echo str_replace("/sc/", "/sc/", $theurl); ?>">简体中文</a> ｜
                <a href="<?php echo str_replace("/sc/", "/en/", $theurl); ?>">ENG</a> </div>	
           </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse" id="wrap">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="img-responsive"></a> </div>
        <div class="menu_bt_box">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="true"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="li_bt_home active"><a href="index.php" class="button" >SOLIS永昱<span class="sr-only">(current)</span></a></li>
                <li><a href="index.php#who" class="button" rel="who" >关于永昱</a></li>
                <li><a href="index.php#location" class="button" rel="location" >澳門永昱位置</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >永昱会</a>
                    <ul class="dropdown-menu" style="text-align:center">
                        <li><a href="index.php#club" class="button" rel="club">永昱会简介</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php#cards" class="button" rel="cards">永昱会会籍</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="benefits.php">会员精彩礼遇</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="promotions.php">推广活动</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="redemption-program.php">积分奖赏计划</a></li>
                    </ul>
                </li>
                <li><a href="index.php#jobs" class="button" rel="jobs" >人才招聘</a></li>
                <li><a href="contactus.php" class="button" rel="contactus">联络我们</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>