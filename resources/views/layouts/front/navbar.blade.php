

<!--========  header area =========-->
<header class="header">
    <div class="header-mid-area">

        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 col-5">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/front/images/logo/logo.png" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-md-block d-none">
                    <div class="header-add-banner text-center">
                        <a href="#">
                            <img src="assets/front/images/banners/header-add-banner.jpg" alt=""/>
                            <h6 class="header-add-text">All Food Item
                                <span>50% Off</span>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-7">

                   @include("layouts.front.register")

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-9">
                @include("layouts.front.social")
                    </div>
                <div class="col-lg-8 col-3">
                    <div class="main-menu-area text-end">
                        <nav class="navigation-menu">
                            <ul>
                                <li class="has-children">
                                    <a href="index.html"><span>Home</span></a>
                                    <ul class="submenu">
                                        <li><a href="index-2.html"><span>Home Two</span></a></li>
                                        <li><a href="index-3.html"><span>Home Three</span></a></li>
                                        <li><a href="index-4.html"><span>Home Four</span></a></li>
                                        <li><a href="index-5.html"><span>Home Five</span></a></li>
                                        <li><a href="index-6.html"><span>Home Six</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-us.html"><span>About</span></a>
                                </li>
                                <li class="has-children"><a href="category.html"><span>Category</span></a>
                                    <ul class="submenu">
                                        <li><a href="category.html"><span>Category List</span></a></li>
                                        <li><a href="category-grid.html"><span>Category Grid</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span>Pages</span></a>
                                    <ul class="submenu">
                                        <li><a href="blog-details.html"><span>Blog Details</span></a></li>
                                        <li><a href="blog-details-two.html"><span>Blog Details Two</span></a></li>
                                        <li><a href="error-404.html"><span>Error 404</span></a></li>
                                        <li><a href="faq.html"><span>FAQ's</span></a></li>
                                        <li><a href="author-post.html"><span>Author post</span></a></li>
                                        <li><a href="register.html"><span>Register</span></a></li>
                                        <li><a href="write-post.html"><span>Write Post</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact </span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu -->
                    <div class="mobile-menu-right">
                        <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--======== End of header area  =========-->
