@extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Global Study Agency</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
        <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
        <link href="css/mislider.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
        <link href="css/mislider-custom.css" rel="stylesheet" type="text/css" /> <!-- Testimonials-CSS -->
        <!-- //css files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Athiti:200,300,400,500,600,700&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
        <!-- //online-fonts -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}"></a>
                    @else
                        
                    @endif
                </div>
            @endif
        </div>
            @section('content')       
   
            <div class="content">
               <div class="main-agile">
    <div class="banner">
        <div class="container">
            <div class="top-nav">
                
            </div>
            <div class="w3l_banner_info">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <h3>Study Abroad</h3>
                                    <p>Get your Degree with Our Best Select Universities Across the Globe</p>
                                    <a href="{{url('/register')}}">Join Now</a>
                                </div>
                            </li>
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <h3>Masters Degree</h3>
                                    <p>Our Master Programs are Careful Selected Universities</p>
                                    <a href="https://www.cnn.com" >Join Now</a>
                                </div>
                            </li>
                            <li>
                                <div class="wthree_banner_info_grid">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <h3>Best Universities</h3>
                                    <p>Let Us take you to your dream university with Educational support System</p>
                                    <a href="https://www.bbc.com">Make A Choice</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>          
        </div>
    </div>

    <div class="mail" id="mail">
    <div class="container">
        <h3 class="tittle-w3l">About Us</h3>
        <div class="agileinfo_mail_grids">
            <div>
                <form style="font-weight: 14px">
                    <h4>Why Study Away?</h4>
<h5>An extended encounter with a foreign culture's different values and languages can teach us how to communicate across the barriers of custom, geography, and politics. Students who have studied abroad return with a deeper understanding of other peoples, of their own cultural background, of them­selves, and of their place in the world.

Studying abroad will change your life. This is true not only in terms of personal development, but in terms of your career. Many students have pursued new interests or made contacts overseas that have had unforeseen benefits later on. Whatever your future holds, the time you spend abroad will be an undeniable asset.</h5>


                </form>
            </div>
            
            <div class="mail-w3">            
                    <h4>Mail us</h4>
                    <h5><a href="mailto:globalstudyliberia@gmail.com">globalstudyliberia@gmail.com</a></h5>
                </div>
                <div class="clearfix"></div>
            </div>
            
            
        </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>

<!-- services -->
<div class="services" id="services">
    <div class="container">
        <h3 class="tittle-w3l">Our Services</h3>
        <div class="w3-services-grids">
            <div class="col-md-4 col-sm-4 col-xs-4 w3l-services-grid">
                <div class="w3ls-services-img">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="agileits-services-info">
                    <h4>Global Students</h4>
                    <p>Global Study Agency offers all application packages free of charge to all applicants after showing high level of interest in partaking in the study programs. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 w3l-services-grid">
                <div class="w3ls-services-img">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </div>
                <div class="agileits-services-info">
                    <h4>Appliaction Packages</h4>
                    <p>Our Representatives accross the global handles all the your application details,You are the one in mind and your required University will definately be met. </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 w3l-services-grid">
                <div class="w3ls-services-img">
                    <i class="fa fa-leanpub" aria-hidden="true"></i>
                </div>
                <div class="agileits-services-info">
                    <h4> Students Registration</h4>
                    <p>Every Student must sign up to our platform,so we can have your basic details in our Database to be able to start your process as soon as we both come into agreement. </p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="tittle-w3l">Our Partner Universities</h3>
        <div class="gallery-grids">
            <section>
                <ul id="da-thumbs" class="da-thumbs">
                    <li>
                        <a href="https://cnn.com" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
                            <img src="images/g1.jpg" alt="" /> <h1>Our partners in China
                            </h1>
                        </a>
                    </li>
                    <li>
                        <a href="https://bbc.com" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
                            <img src="images/g2.jpg" alt="" /><h1>Our Partners In Ukraine</h1>
                            
                        </a>
                    </li>
                    <li>
                        <a href="https://belgoro.com" class=" mask b-link-stripe b-animate-go   swipebox"  title="">
                            <img src="images/g3.jpg" alt="" /><h1>Our Partners in Russia</h1>
                            
                        </a>
                    </li>
                    
                    
                </ul>
            </section>
        </div>
    </div>
</div>
<!-- //gallery -->

<!-- testimonials -->
<div class="testimonials">
    <div class="container">
    <h3 class="tittle-w3l">Our People says</h3>
        <div class="mis-stage"> 
            <!-- The element to select and apply miSlider to - the class is optional -->
            <ol class="mis-slider">
                <!-- The slider element - the class is optional -->
                <li class="mis-slide"> 
                <!-- A slide element - the class is optional --> 
                    <a href="#" class="mis-container"> 
                    <!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
                    <figure> 
                    <!-- Slide content - whatever you want --> 
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                    <figcaption>Carl Lii<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
                <li class="mis-slide"> <a href="#" class="mis-container">
                    <figure> <img src="images/6.jpg" alt=" " class="img-responsive" />
                    <figcaption>Michael Paul<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
                <li class="mis-slide"> <a href="link" class="mis-container">
                    <figure> <img src="images/7.jpg" alt=" " class="img-responsive" />
                    <figcaption>Henry Doe<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
                <li class="mis-slide"> <a href="#" class="mis-container">
                    <figure> <img src="images/8.jpg" alt=" " class="img-responsive" />
                    <figcaption>Laura James<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
                <li class="mis-slide"> <a href="#" class="mis-container">
                    <figure> <img src="images/6.jpg" alt=" " class="img-responsive" />
                    <figcaption>Thomas Carl<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
                <li class="mis-slide"> <a href="#" class="mis-container">
                    <figure> <img src="images/7.jpg" alt=" " class="img-responsive" />
                    <figcaption>Rosy Crisp<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
                    </figure>
                    </a> </li>
            </ol>
        </div>
    </div>
</div>
<!-- //testimonials -->


<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 col-sm-8 col-xs-8 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h3>Follow Us</h3>
                    <div class="w3ls_footer_grid_left1_pos">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-linkedin f5" aria-hidden="true"></i>Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-4 w3ls_footer_grid_right">
                
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 w3ls_footer_grid1_left">
            <p>&copy; 2018 . All rights reserved | Globalstudentagency.com <a href="http://w3layouts.com/"></a></p>
        </div>
        
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->


<!-- js-scripts -->         
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
        <!-- //js -->
        <!-- flexSlider -->
                            <script defer src="js/jquery.flexslider.js"></script>
                            <script type="text/javascript">
                            $(window).load(function(){
                              $('.flexslider').flexslider({
                                animation: "slide",
                                start: function(slider){
                                  $('body').removeClass('loading');
                                }
                              });
                            });
                          </script>
                        <!-- //flexSlider -->
        <!-- start-smoth-scrolling -->
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
        <!-- start-smoth-scrolling -->
        
        <!-- testimonial-plugin -->
        <script src="js/mislider.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                var slider = $('.mis-stage').miSlider({
                    //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                    stageHeight: 320,
                    //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                    slidesOnStage: false,
                    //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                    slidePosition: 'center',
                    //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                    slideStart: 'mid',
                    //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                    slideScaling: 150,
                    //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                    offsetV: -5,
                    //  Center slide contents vertically - Boolean. Default: false
                    centerV: true,
                    //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                    navButtonsOpacity: 1,
                });
            });
        </script>

 <!-- //testimonial-plugin -->
<!-- for-gallery -->
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>    
                <script type="text/javascript">
                    $(function() {
                    
                        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

                    });
                </script>
        <!-- for-gallery-rotation -->
            <script src="js/modernizr.custom.97074.js"></script>
            <!--swipebox -->    
                <link rel="stylesheet" href="css/swipebox.css">
                    <script src="js/jquery.swipebox.min.js"></script> 
                    <script type="text/javascript">
                        jQuery(function($) {
                            $(".swipebox").swipebox();
                        });
                    </script>
                <!-- //swipebox Ends -->
        <!-- //for-gallery-rotation -->
        <!-- //for-gallery -->
        <!-- smooth scrolling-bottom-to-top -->
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
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling-bottom-to-top -->
        <!-- js for Counter -->
            <script type="text/javascript" src="js/numscroller-1.0.js"></script>
        <!-- /js for Counter -->
<!-- //js-scripts -->

</body>
</html>
@endsection