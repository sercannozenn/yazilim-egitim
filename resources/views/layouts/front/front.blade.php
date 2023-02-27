<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="icon" href={{asset("assets/images/favicon.png")}}>

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("assets/css/vendor/bootstrap.min.css")}}>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icofont CSS -->
    <link rel="stylesheet" href={{ asset("assets/css/vendor/icofont.min.css") }} />

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href={{ asset("assets/css/plugins/lightgallery.min.css") }}>

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href={{ asset("assets/css/plugins/swiper-bundle.min.css") }} />

    <!-- AOS CSS -->
    <link rel="stylesheet" href={{ asset("assets/css/plugins/aos.css") }}>


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href={{ asset("assets/css/style.css") }}>
    @yield("css")
</head>
<body class="theme-color-two">
@include("layouts.front.navbar")
@yield("content")
@include("layouts.front.footer")



<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top icofont-swoosh-up"></i>
    <i class="arrow-bottom icofont-swoosh-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html"><span>Home Two</span></a></li>
                            <li><a href="index-3.html"><span>Home Three</span></a></li>
                            <li><a href="index-4.html"><span>Home Four</span></a></li>
                            <li><a href="index-5.html"><span>Home Five</span></a></li>
                            <li><a href="index-6.html"><span>Home Six</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html"><span>About</span></a></li>
                    <li class="has-children">
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <li><a href="category.html"><span>Category List</span></a> </li>
                            <li><a href="category-grid.html"><span>Category Grid</span></a> </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="blog-details.html"><span>Blog Details</span></a> </li>
                            <li><a href="blog-details-two.html"><span>Blog Details Two</span></a> </li>
                            <li><a href="error-404.html"><span>Error 404</span></a> </li>
                            <li><a href="faq.html"><span>FAQ's</span></a> </li>
                            <li><a href="author-post.html"><span>Author post</span></a> </li>
                            <li><a href="register.html"><span>Register</span></a> </li>
                            <li><a href="write-post.html"><span>Write Post</span></a> </li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html"><span>Contact </span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->







<!-- JS
    ============================================ -->
<!-- Modernizer JS -->
<script src={{ asset("assets/js/vendor/modernizr-2.8.3.min.js") }}></script>

<!-- jQuery JS -->
<script src={{ asset("assets/js/vendor/jquery-3.5.1.min.js") }}></script>
<script src={{ asset("assets/js/vendor/jquery-migrate-3.3.0.min.js") }}></script>

<!-- Bootstrap JS -->
<script src={{ asset("assets/js/vendor/bootstrap.min.js") }}></script>

<!-- Light gallery JS -->
<script src={{ asset("assets/js/plugins/lightgallery.min.js") }}></script>

<!-- Isotope JS -->
<script src={{ asset("assets/js/plugins/isotope.min.js") }}></script>

<!-- Masonry JS -->
<script src={{ asset("assets/js/plugins/masonry.min.js") }}></script>

<!-- ImagesLoaded JS -->
<script src={{ asset("assets/js/plugins/images-loaded.min.js") }}></script>

<!-- Swiper Bundle JS -->
<script src={{ asset("assets/js/plugins/swiper-bundle.min.js") }}></script>

<!-- AOS JS -->
<script src={{ asset("assets/js/plugins/aos.js") }}></script>

<!-- Ajax JS -->
<script src={{ asset("assets/js/plugins/ajax.mail.js") }}></script>

<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->


<!-- Main JS -->
<script src={{ asset("assets/js/main.js") }}></script>

@yield("js")
</body>

</html>
