<!DOCTYPE html />
<html lang="en"/>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Harrier Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/revslider.css" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/header.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/stylesheet/responsive.css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('styles')

</head>
<body>
@include('home._header')
@if(Route::current()->getName() != 'home')
    @include('home._title')
@endif
@yield('content')
@include('home._footer')

<!-- JavaScript -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/revslider.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/common.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/header.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.mobile-menu.min.js"></script>
<script src="{{asset('assets')}}/js/countdown.js"></script>

@yield('javascript')

<script>
    jQuery(document).ready(function(){
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 1170,
            startheight:650,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>
<script>
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);
</script>
</body>
</html>
