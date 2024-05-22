
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ======== Page title ============ -->
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/corle-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/gordita-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nice-select/nice-select.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/css/corle.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/corle-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/color-3.css')}}" />
</head>

<body>
@inject('injected','App\Defaults\Custom')


<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->




<div class="page-wrapper">
    <header class="main-header-three">
        <div class="main-menu-three__shape-1">
            <img src="{{asset('home/images/'.$web->logo)}}" alt="">
        </div>
        <div class="main-header-three__top">
            <div class="main-header-three__top-wrapper">
                <div class="main-header-three__top-inner">
                    <div class="main-header-three__top-left">
                        <div class="main-header-three__location-box">
                            <div class="main-header-three__location-icon">
                                <span class="icon-location1"></span>
                            </div>
                            <p class="main-header-three__location-text">{!! $web->address !!}</p>
                        </div>
                    </div>
                    <div class="main-header-three__top-right">
                        <ul class="main-header-three__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-email-3"></span>
                                </div>
                                <div class="content">
                                    <h4><a href="mailto:{{$web->email}}">{{$web->email}}</a></h4>
                                </div>
                            </li>
                            @if(!empty($web->phone))
                            <li>
                                <div class="icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <div class="content">
                                    <h4><a href="tel:{{$web->phone}}">{{$web->phone}} </a></h4>
                                </div>
                            </li>
                            @endif
                        </ul>
                        <div class="main-header-three__social">
                            <p class="main-header-three__social-text">Social Media</p>
                            <a href="#"><span class="icon-linkedin"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-skype"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="main-menu-three__wrapper-inner">
                    <div class="main-menu-three__left">
                        <div class="main-menu-three__logo">
                            <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a>
                        </div>
                        <div class="main-menu-three__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li >
                                    <a href="{{url('/')}}" >Home</a>
                                </li>
                                <li >
                                    <a href="{{url('about')}}" >About</a>
                                </li>

                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul >
                                        <li ><a href="{{url('plans')}}" >Plans</a></li>
                                        <li ><a href="{{url('faqs')}}" >Frequently Asked Questions</a></li>
                                        <li ><a href="{{url('terms')}}" >Terms & Conditions</a></li>
                                        <li ><a href="{{url('privacy')}}" >Privacy policy</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#" >Services</a>
                                    <ul >
                                        @foreach($injected->getServices() as $service)
                                            <li ><a href="{{route('service.details',['id'=>$service->id])}}" >{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown" ><a href="#" >Account</a>
                                    <ul >
                                        <li ><a href="{{route('login')}}" >Login</a></li>

                                        <li ><a href="{{route('register')}}" >Register</a></li>
                                    </ul>
                                </li>

                                <li ><a href="{{url('contact')}}" >Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__consultant-box">
                            <p class="main-menu-three__consultant-text"> <span class="icon-idea-3"></span> Create An Account</p>
                            <a href="{{route('register')}}" class="main-menu-three__consultant-btn">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    @yield('content')

    <!--Site Footer Two Start-->
    <footer class="site-footer-two">
        <div class="site-footer__shape-1 float-bob-x">
            <img src="{{asset('home/images/shapes/site-footer-shape-1.png')}}" alt="">
        </div>
        <div class="site-footer__shape-2 img-bounce">
            <img src="{{asset('home/images/shapes/site-footer-two-shape-1.png')}}" alt="">
        </div>
        <div class="site-footer__shape-3 float-bob-y">
            <img src="{{asset('home/images/shapes/site-footer-shape-3.png')}}" alt="">
        </div>
        <div class="site-footer__shape-4 img-bounce">
            <img src="{{asset('home/images/shapes/site-footer-two-shape-2.png')}}" alt="">
        </div>
        <div class="site-footer__shape-5 float-bob-x">
            <img src="{{asset('home/images/shapes/site-footer-shape-5.png')}}" alt="">
        </div>
        <div class="site-footer__shape-6 float-bob-y">
            <img src="{{asset('home/images/shapes/site-footer-shape-6.png')}}" alt="">
        </div>
        <div class="site-footer-two__bg-one"
             style="background-image: url({{asset('home/images/backgrounds/site-footer-two-bg.jpg')}});"></div>
        <div class="site-footer-two__bg-two"
             style="background-image: url({{asset('home/images/backgrounds/site-footer-two-bg-2.jpg')}});"></div>
        <div class="site-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget-two__about">
                            <div class="footer-widget-two__logo">
                                <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}"
                                                          alt=""></a>
                            </div>
                            <p class="footer-widget-two__about-text">With over 10 years of experience we’ll ensure you
                                get
                                the best in the financial world.</p>
                            <div class="footer-widget-two__lets-start">
                                <div class="icon">
                                    <span class="icon-marketing"></span>
                                </div>
                                <div class="text">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget-two__explore">
                            <div class="footer-widget-two__title-box">
                                <h4 class="footer-widget-two__title">Explore Link</h4>
                            </div>
                            <ul class="footer-widget-two__explore-list list-unstyled">
                                <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                                <li><a href="{{url('about')}}">About us</a></li>
                                <li><a href="{{url('contact')}}">Contact Us</a></li>
                                <li><a href="{{url('plan')}}">Pricing & Plans</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__social">
                                <p class="site-footer__social-tag">Social</p>
                                <ul class="site-footer__social-box list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <p class="site-footer__bottom-text">© 2012 - {{date('Y')}} {{$siteName}}. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer Two End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index" aria-label="logo image"><img src="{{asset('home/images/'.$web->logo)}}" width="150"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@corle.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{asset('home/vendors/jquery/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('home/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('home/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('home/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('home/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('home/vendors/wow/wow.js')}}"></script>
<script src="{{asset('home/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('home/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('home/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('home/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('home/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('home/vendors/sidebar-content/jquery-sidebar-content.js')}}"></script>
<script src="{{asset('home/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<!-- template js -->
<script src="{{asset('home/js/corle.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'c7b9e34975e4f28d4610b7ca306e09fdb7edfeff';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
