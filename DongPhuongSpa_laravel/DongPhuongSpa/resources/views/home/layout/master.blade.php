<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hair Stylist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link rel="icon" href="{{asset('images/images_index/icon.jpg')}}">
    <link rel="icon" href="{{asset('css/css_index/fontgoogle1.css')}}">
    <link rel="icon" href="{{asset('css/css_index/fontgoogle2.css')}}">
    <link rel="icon" href="{{asset('css/css_index/fontgoogle3.css')}}">
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Roboto+Condensed" rel="stylesheet">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto" rel="stylesheet">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto|Sacramento" rel="stylesheet">--}}
    <link href="{{asset('css/css_index/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/css_index/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/css_index/jquery.desoslide.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_index/sliderResponsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_index/spa.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_index/responsive.css')}}">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link rel="stylesheet" href="{{asset('css/css_index/font1.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_index/font2.css')}}">
    <link rel="stylesheet" href="{{asset('css/css_index/font3.css')}}">
    {{--<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Courgette|Yanone+Kaffeesatz:300,400" rel="stylesheet">--}}
    <!-- //web-fonts -->
</head>
<body>
<!-- banner -->
@include('home.layout.header')


<!-- //banner -->

@yield('index')





{{--menu right--}}
@include('home.layout.menu_right')


<!-- footer -->
@include('home.layout.footer')
<!-- //footer -->





<!-- js -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/js_index/SmoothScroll.min.js')}}"></script>
<!-- //js -->
<!-- Progressive-Effects-Animation-JavaScript -->
<script type="text/javascript" src="{{asset('js/js_index/numscroller-1.0.js')}}"></script>
<!-- //Progressive-Effects-Animation-JavaScript -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset('js/js_index/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js_index/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js_index/sliderResponsive.js')}}"></script>
<script type="text/javascript" src="{{asset('js/js_index/custom.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- desoslide-JavaScript -->
<script src="{{asset('js/js_index/jquery.desoslide.js')}}"></script>
<script>
//    $('#demo1_thumbs').desoSlide({
//        main: {
//            container: '#demo1_main_image',
//            cssClass: 'img-responsive'
//        },
//        effect: 'sideFade',
//        caption: true
//    });
</script>
<script src="{{asset('js/js_index/bootstrap.js')}}"></script>
</body>
</html>