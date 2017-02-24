   //磁性滚动特效
    function item1() {
        // 定义将要去的描点位置
        var pos = $("#item1").offset().top;
        // 实现平滑移动 1000代表时间ms
        $("html,body").animate({scrollTop: pos}, 1000);
        $('#rigNav ol li').removeClass("active");
        $('#rigNav ol li:eq(0)').addClass("active");
    }
    function item2() {
        // 定义将要去的描点位置
        var pos = $("#item2").offset().top;
        // 实现平滑移动 1000代表时间ms
        $("html,body").animate({scrollTop: pos}, 1000);
        $('#rigNav ol li').removeClass("active");
        $('#rigNav ol li:eq(3)').addClass("active");
    }
    function item3() {
        // 定义将要去的描点位置
        var pos = $("#item3").offset().top;
        // 实现平滑移动 1000代表时间ms
        $("html,body").animate({scrollTop: pos}, 1000);
        $('#rigNav ol li').removeClass("active");
        $('#rigNav ol li:eq(2)').addClass("active");
    }
    function item4() {
        // 定义将要去的描点位置
        var pos = $("#item4").offset().top;
        // 实现平滑移动 1000代表时间ms
        $("html,body").animate({scrollTop: pos}, 1000);
        $('#rigNav ol li').removeClass("active");
        $('#rigNav ol li:eq(1)').addClass("active");
    }
    function item5() {
        // 定义将要去的描点位置
        var pos = $("#item5").offset().top;
        // 实现平滑移动 1000代表时间ms
        $("html,body").animate({scrollTop: pos}, 1000);
        $('#rigNav ol li').removeClass("active");
        $('#rigNav ol li:eq(4)').addClass("active");
    }
    jQuery(function($){
        $('.vmcarousel-centered').vmcarousel({
            centered: true,
            start_item: 2,
            autoplay: false,
            infinite: false
        });

        $('.vmcarousel-centered-infitine').vmcarousel({
            centered: true,
            start_item: 1,
            autoplay: true,
            infinite: true
        });

        $('.vmcarousel-normal').vmcarousel({
            centered: false,
            start_item: 0,
            autoplay: false,
            infinite: false
        });

    });






