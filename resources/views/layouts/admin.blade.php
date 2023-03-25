<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Chrev - Crypto Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("assets/admin/images/favicon.png")}}>
    <link href={{asset("assets/admin/vendor/jqvmap/css/jqvmap.min.css")}} rel="stylesheet">
    <link rel="stylesheet" href={{asset("assets/admin/vendor/chartist/css/chartist.min.css")}}>
    <link href={{asset("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css")}} rel="stylesheet">
    <link href={{asset("assets/admin/css/style.css")}} rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href={{asset("assets/admin/vendor/owl-carousel/owl.carousel.css")}} rel="stylesheet">
@yield("css")
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include("layouts.admin.components.header-logo")
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
  @include("layouts.admin.components.chatbox")
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
        @include("layouts.admin.components.header")
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
   @include("layouts.admin.components.sidebar")
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @yield("content")
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
 @include("layouts.admin.components.front")
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src={{asset("assets/admin/vendor/global/global.min.js")}}></script>
{{--<script src={{asset("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}></script>--}}
<script src={{asset("assets/admin/vendor/chart.js/Chart.bundle.min.js")}}></script>
<script src={{asset("assets/admin/js/custom.min.js")}}></script>
<script src={{asset("assets/admin/js/deznav-init.js")}}></script>
<script src={{asset("assets/admin/vendor/owl-carousel/owl.carousel.js")}}></script>



<!-- Chart piety plugin files -->
<script src={{asset("assets/admin/vendor/peity/jquery.peity.min.js")}}></script>


<!-- Dashboard 1 -->
<script src={{asset("assets/admin/js/dashboard/dashboard-1.js")}}></script>
<script>
    function carouselReview(){
        /*  testimonial one function by = owl.carousel.js */
        /*  testimonial one function by = owl.carousel.js */
        jQuery('.owl-bank-wallet').owlCarousel({
            loop:true,
            autoplay:false,
            margin:0,
            nav:false,
            center:true,
            dots: false,
            navText: [''],
            responsive:{
                0:{
                    items:2
                },

                480:{
                    items:2
                },

                991:{
                    items:3
                },
                1200:{
                    items:3
                },
                1600:{
                    items:2
                }
            }
        })

        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:15,
            nav:true,
            dots: false,
            center:true,
            navText: ['', '<i class="las la-long-arrow-alt-right"></i>'],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:5
                },
                991:{
                    items:8
                },

                1200:{
                    items:8
                },
                1600:{
                    items:6
                }
            }
        })
    }

    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>
@yield("js")
</body>
</html>
