@extends("layouts.front")
@section("css")
@endsection
@section("content")
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="contact-us-page-area section-space--pt_70 section-space--pb_100">
                <div class="container">


                    <div class="contact-from section-space--pt_80">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="section-title" data-aos="fade-up">
                                    <h3 class="title mb-30">Get In Touch</h3>
                                </div>
                                <form id="#contact-form" class="contact-us-form" action="http://whizthemes.com/mail-php/jowel/bunzo/mail.php" method="post">
                                    <div class="single-input-box">
                                        <input type="text" name="con_name" placeholder="Name">
                                    </div>
                                    <div class="single-input-box">
                                        <input type="email" name="con_email" placeholder="Email">
                                    </div>
                                    <div class="single-input-box">
                                        <input type="text" name="con_phone" placeholder="Phone">
                                    </div>
                                    <div class="single-input-box">
                                        <textarea name="con_message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="single-input-box">
                                        <button type="submit" class="btn-primary btn-large">Send Message <i class="icofont-long-arrow-right"></i></button>
                                    </div>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                            <div class="col-lg-6 offset-lg-1" data-aos="fade-up">
                                <div class="contact-us-map">
                                    <iframe title="Google Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
@section("js")
@endsection
