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
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src={{asset("assets/admin/images/logo.png")}} alt="">
            <img class="logo-compact" src={{asset("assets/admin/images/logo-text.png")}} alt="">
            <img class="brand-title" src={{asset("assets/admin/images/logo-text.png")}} alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Chat List</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="name-first-letter">A</li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Archie Parker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Alfie Mason</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/3.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/4.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">B</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/5.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Bashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Breddie Ronan</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Ceorge Carson</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">D</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/3.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Darry Parker</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/4.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Denry Hunter</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">J</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/5.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jack Ronan</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jacob Tucker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>James Logan</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/3.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Joshua Weston</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">O</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/4.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oliver Acker</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="{{asset("assets/admin/images/avatar/5.jpg")}}" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oscar Weston</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box d-none">
                        <div class="card-header chat-list-header text-center">
                            <a href="#" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                            </a>
                            <div>
                                <h6 class="mb-1">Chat with Khelesh</h6>
                                <p class="mb-0 text-success">Online</p>
                            </div>
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/2.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="{{asset("assets/admin/images/avatar/1.jpg")}}" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="alerts" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notications</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                            <ul class="contacts">
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">KK</div>
                                        <div class="user_info">
                                            <span>David Nester Birthday</span>
                                            <p class="text-primary">Today</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SOCIAL</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                        <div class="user_info">
                                            <span>Perfection Simplified</span>
                                            <p>Jame Smith commented on your status</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="card mb-sm-3 mb-md-0 note_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notes</h6>
                                <p class="mb-0">Add New Nots</p>
                            </div>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                            <ul class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>New order placed..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Youtube, a video-sharing website..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>john just buy your product..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#6418C3"/>
                                </svg>
                                <span class="badge light text-white bg-primary">12</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <img alt="image" width="50" src={{asset("assets/admin/images/avatar/1.jpg")}}>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-info">
                                                    KG
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-success">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <img alt="image" width="50" src={{asset("assets/admin/images/avatar/1.jpg")}}>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-danger">
                                                    KG
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Resport created successfully</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-primary">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                    <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link bell bell-link" href="#">
                                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.4604 0.848877H3.31682C2.64742 0.849612 2.00565 1.11586 1.53231 1.58919C1.05897 2.06253 0.792727 2.7043 0.791992 3.3737V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.4141 2.64742 17.6803 3.31682 17.6811C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5227V20.3168C4.15843 20.6215 4.24112 20.9204 4.39768 21.1818C4.55423 21.4431 4.77879 21.6571 5.04741 21.8009C5.31602 21.9446 5.61861 22.0128 5.92292 21.9981C6.22723 21.9834 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.6811H17.187C17.7383 17.68 18.2742 17.4994 18.7136 17.1664C19.1531 16.8335 19.472 16.3664 19.6222 15.8359L22.8965 4.05011C22.9998 3.67481 23.0152 3.28074 22.9413 2.89856C22.8674 2.51637 22.7064 2.15639 22.4707 1.84663C22.2349 1.53687 21.9309 1.28568 21.5822 1.11263C21.2336 0.939571 20.8497 0.849312 20.4604 0.848877ZM21.2732 3.60304L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8275C17.5496 15.9381 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5227C5.84091 17.8533 5.57467 17.2115 5.10133 16.7382C4.62799 16.2648 3.98622 15.9986 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.3737C2.47534 3.15054 2.56406 2.93655 2.72186 2.77874C2.87966 2.62094 3.09365 2.53223 3.31682 2.5321H20.4604C20.5905 2.53243 20.7187 2.56277 20.8352 2.62076C20.9516 2.67875 21.0531 2.76283 21.1318 2.86646C21.2104 2.97008 21.2641 3.09045 21.2886 3.21821C21.3132 3.34597 21.3079 3.47766 21.2732 3.60304Z" fill="#6418C3"/>
                                    <path d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z" fill="#6418C3"/>
                                    <path d="M13.4161 10.1066H5.84161C5.6184 10.1066 5.40433 10.1952 5.2465 10.3531C5.08867 10.5109 5 10.725 5 10.9482C5 11.1714 5.08867 11.3855 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3855 14.2577 11.1714 14.2577 10.9482C14.2577 10.725 14.169 10.5109 14.0112 10.3531C13.8534 10.1952 13.6393 10.1066 13.4161 10.1066Z" fill="#6418C3"/>
                                </svg>
                                <span class="badge light text-white bg-primary">5</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.625 5.12506H21.75V1.62506C21.75 1.47268 21.7102 1.32295 21.6345 1.19068C21.5589 1.05841 21.45 0.948189 21.3186 0.870929C21.1873 0.79367 21.0381 0.75205 20.8857 0.750187C20.7333 0.748325 20.5831 0.786285 20.4499 0.860311L13 4.99915L5.55007 0.860311C5.41688 0.786285 5.26667 0.748325 5.11431 0.750187C4.96194 0.75205 4.8127 0.79367 4.68136 0.870929C4.55002 0.948189 4.44113 1.05841 4.36547 1.19068C4.28981 1.32295 4.25001 1.47268 4.25 1.62506V5.12506H3.375C2.67904 5.12582 2.01181 5.40263 1.51969 5.89475C1.02757 6.38687 0.750764 7.0541 0.75 7.75006V10.3751C0.750764 11.071 1.02757 11.7383 1.51969 12.2304C2.01181 12.7225 2.67904 12.9993 3.375 13.0001H4.25V22.6251C4.25076 23.321 4.52757 23.9882 5.01969 24.4804C5.51181 24.9725 6.17904 25.2493 6.875 25.2501H19.125C19.821 25.2493 20.4882 24.9725 20.9803 24.4804C21.4724 23.9882 21.7492 23.321 21.75 22.6251V13.0001H22.625C23.321 12.9993 23.9882 12.7225 24.4803 12.2304C24.9724 11.7383 25.2492 11.071 25.25 10.3751V7.75006C25.2492 7.0541 24.9724 6.38687 24.4803 5.89475C23.9882 5.40263 23.321 5.12582 22.625 5.12506ZM20 5.12506H16.3769L20 3.11256V5.12506ZM6 3.11256L9.62311 5.12506H6V3.11256ZM6 22.6251V13.0001H12.125V23.5001H6.875C6.64303 23.4998 6.42064 23.4075 6.25661 23.2434C6.09258 23.0794 6.0003 22.857 6 22.6251ZM20 22.6251C19.9997 22.857 19.9074 23.0794 19.7434 23.2434C19.5794 23.4075 19.357 23.4998 19.125 23.5001H13.875V13.0001H20V22.6251ZM23.5 10.3751C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1575 22.857 11.2498 22.625 11.2501H3.375C3.14303 11.2498 2.92064 11.1575 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.3751V7.75006C2.5003 7.51809 2.59258 7.2957 2.75661 7.13167C2.92064 6.96764 3.14303 6.87536 3.375 6.87506H22.625C22.857 6.87536 23.0794 6.96764 23.2434 7.13167C23.4074 7.2957 23.4997 7.51809 23.5 7.75006V10.3751Z" fill="#3E4954"/>
                                </svg>
                                <span class="badge light text-white bg-primary">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <div class="header-info">
                                    <span class="text-black">Hello, <strong>Thomas</strong></span>
                                    <p class="fs-12 mb-0">Super Admin</p>
                                </div>
                                <img src={{asset("assets/admin/images/profile/pic1.jpg")}} width="20" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./app-profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <span class="ml-2">Inbox </span>
                                </a>
                                <a href="./page-login.html" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="my-wallet.html">My Wallet</a></li>
                        <li><a href="coin-details.html">Coin Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="transactions.html">Transactions</a></li>
                        <li><a href="market-capital.html">Market Capital</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./app-profile.html">Profile</a></li>
                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Email</a>
                            <ul aria-expanded="false">
                                <li><a href="./email-compose.html">Compose</a></li>
                                <li><a href="./email-inbox.html">Inbox</a></li>
                                <li><a href="./email-read.html">Read</a></li>
                            </ul>
                        </li>
                        <li><a href="./app-calender.html">Calendar</a></li>
                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Shop</a>
                            <ul aria-expanded="false">
                                <li><a href="./ecom-product-grid.html">Product Grid</a></li>
                                <li><a href="./ecom-product-list.html">Product List</a></li>
                                <li><a href="./ecom-product-detail.html">Product Details</a></li>
                                <li><a href="./ecom-product-order.html">Order</a></li>
                                <li><a href="./ecom-checkout.html">Checkout</a></li>
                                <li><a href="./ecom-invoice.html">Invoice</a></li>
                                <li><a href="./ecom-customers.html">Customers</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./chart-flot.html">Flot</a></li>
                        <li><a href="./chart-morris.html">Morris</a></li>
                        <li><a href="./chart-chartjs.html">Chartjs</a></li>
                        <li><a href="./chart-chartist.html">Chartist</a></li>
                        <li><a href="./chart-sparkline.html">Sparkline</a></li>
                        <li><a href="./chart-peity.html">Peity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Accordion</a></li>
                        <li><a href="./ui-alert.html">Alert</a></li>
                        <li><a href="./ui-badge.html">Badge</a></li>
                        <li><a href="./ui-button.html">Button</a></li>
                        <li><a href="./ui-modal.html">Modal</a></li>
                        <li><a href="./ui-button-group.html">Button Group</a></li>
                        <li><a href="./ui-list-group.html">List Group</a></li>
                        <li><a href="./ui-media-object.html">Media Object</a></li>
                        <li><a href="./ui-card.html">Cards</a></li>
                        <li><a href="./ui-carousel.html">Carousel</a></li>
                        <li><a href="./ui-dropdown.html">Dropdown</a></li>
                        <li><a href="./ui-popover.html">Popover</a></li>
                        <li><a href="./ui-progressbar.html">Progressbar</a></li>
                        <li><a href="./ui-tab.html">Tab</a></li>
                        <li><a href="./ui-typography.html">Typography</a></li>
                        <li><a href="./ui-pagination.html">Pagination</a></li>
                        <li><a href="./ui-grid.html">Grid</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-heart"></i>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./uc-select2.html">Select 2</a></li>
                        <li><a href="./uc-nestable.html">Nestedable</a></li>
                        <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="./uc-toastr.html">Toastr</a></li>
                        <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                    </ul>
                </li>
                <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Widget</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./form-element.html">Form Elements</a></li>
                        <li><a href="./form-wizard.html">Wizard</a></li>
                        <li><a href="./form-editor-summernote.html">Summernote</a></li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                        <li><a href="table-datatable-basic.html">Datatable</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./page-register.html">Register</a></li>
                        <li><a href="./page-login.html">Login</a></li>
                        <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="./page-error-400.html">Error 400</a></li>
                                <li><a href="./page-error-403.html">Error 403</a></li>
                                <li><a href="./page-error-404.html">Error 404</a></li>
                                <li><a href="./page-error-500.html">Error 500</a></li>
                                <li><a href="./page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>

            <div class="add-menu-sidebar">
                <p>Generate Monthly Credit Report</p>
                <a href="javascript:void(0)">
                    <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.725 5.14889C23.7248 5.14861 23.7245 5.14828 23.7242 5.148L18.8256 0.272997C18.4586 -0.0922062 17.865 -0.0908471 17.4997 0.276184C17.1345 0.643169 17.1359 1.23675 17.5028 1.602L20.7918 4.875H0.9375C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75H20.7917L17.5029 10.023C17.1359 10.3882 17.1345 10.9818 17.4998 11.3488C17.865 11.7159 18.4587 11.7172 18.8256 11.352L23.7242 6.477C23.7245 6.47672 23.7248 6.47639 23.7251 6.47611C24.0923 6.10964 24.0911 5.51414 23.725 5.14889Z" fill="white"/>
                    </svg>
                </a>
            </div>
            <div class="copyright">
                <p><strong>Chrev - Crypto Admin Dashboard</strong> © 2020 All Rights Reserved</p>
                <p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="form-head d-flex mb-4 mb-md-5 align-items-start">
                <div class="input-group search-area d-inline-flex">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search here">
                </div>
                <a href="javascript:void(0)" class="btn btn-primary ml-auto">+ Add New Cyrpto</a>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0">
                            <div class="mr-auto">
                                <h2 class="text-black mb-2 font-w600">$65,123</h2>
                                <p class="mb-1 fs-13">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13.5C1.91797 12.4157 4.89728 9.22772 6.5 7.5L12.5 10.5L19.5 1.5" stroke="#2BC155" stroke-width="2"/>
                                        <path d="M6.5 7.5C4.89728 9.22772 1.91797 12.4157 1 13.5H19.5V1.5L12.5 10.5L6.5 7.5Z"/>
                                        <defs>
                                            <linearGradient x1="10.25" y1="3" x2="11" y2="13.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#2BC155" offset="1" stop-opacity="0.73"/>
                                                <stop offset="1" stop-color="#2BC155" stop-opacity="0"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    4%(30 days)</p>
                            </div>
                            <img src={{asset("assets/admin/images/svg/bitcoin-1.svg")}} alt="">
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart1" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0">
                            <div class="mr-auto">
                                <h2 class="text-black mb-2 font-w600">$2,551</h2>
                                <p class="mb-1 fs-13">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13.5C1.91797 12.4157 4.89728 9.22772 6.5 7.5L12.5 10.5L19.5 1.5" stroke="#2BC155" stroke-width="2"/>
                                        <path d="M6.5 7.5C4.89728 9.22772 1.91797 12.4157 1 13.5H19.5V1.5L12.5 10.5L6.5 7.5Z"/>
                                        <defs>
                                            <linearGradient x1="10.25" y1="3" x2="11" y2="13.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#2BC155" offset="1"  stop-opacity="0.73"/>
                                                <stop offset="1" stop-color="#2BC155" stop-opacity="0"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    4%(30 days)</p>
                            </div>
                            <img src={{asset("assets/admin/images/svg/ethereum-1.svg")}} alt="">
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart2" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0">
                            <div class="mr-auto">
                                <h2 class="text-black mb-2 font-w600">$0,55</h2>
                                <p class="mb-1 fs-13">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13.5C1.91797 12.4157 4.89728 9.22772 6.5 7.5L12.5 10.5L19.5 1.5" stroke="#2BC155" stroke-width="2"/>
                                        <path d="M6.5 7.5C4.89728 9.22772 1.91797 12.4157 1 13.5H19.5V1.5L12.5 10.5L6.5 7.5Z"/>
                                        <defs>
                                            <linearGradient x1="10.25" y1="3" x2="11" y2="13.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#2BC155" offset="1" stop-opacity="0.73"/>
                                                <stop offset="1" stop-color="#2BC155" stop-opacity="0"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    4%(30 days)</p>
                            </div>
                            <img src={{asset("assets/admin/images/svg/ripple-1.svg")}} alt="">
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart3" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0">
                            <div class="mr-auto">
                                <h2 class="text-black mb-2 font-w600">$65,123</h2>
                                <p class="mb-1 fs-13">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 13.5C1.91797 12.4157 4.89728 9.22772 6.5 7.5L12.5 10.5L19.5 1.5" stroke="#2BC155" stroke-width="2"/>
                                        <path d="M6.5 7.5C4.89728 9.22772 1.91797 12.4157 1 13.5H19.5V1.5L12.5 10.5L6.5 7.5Z"/>
                                        <defs>
                                            <linearGradient x1="10.25" y1="3" x2="11" y2="13.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#2BC155" offset="1" stop-opacity="0.73"/>
                                                <stop offset="1" stop-color="#2BC155" stop-opacity="0"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    4%(30 days)</p>
                            </div>
                            <img src={{asset("assets/admin/images/svg/litecoin-1.svg")}} alt="">
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart4" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="text-black fs-20">Market Overview</h4>
                                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown mt-sm-0 mt-3">
                                <button type="button" class="btn rounded-0 text-black bgl-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Monthly (2020)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Link 1</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Link 2</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Link 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" id="user-activity">
                            <div class="d-flex flex-wrap justify-content-between mb-5">
                                <div class="card-action card-tabs icontabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#user" role="tab" aria-selected="true">
                                                ALL
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#bounce" role="tab" aria-selected="false">
                                                <i class="fa fa-btc" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab" aria-selected="false">
                                                <i class="lab la-ethereum"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center mt-3 mt-sm-0">
                                    <p class="mb-0 fs-13 mr-3">Average</p>
                                    <h2 class="mb-0 text-black font-w600">45%</h2>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="user" role="tabpanel">
                                    <canvas id="activityLine" height="350"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-block d-sm-flex border-0 pb-0">
                            <div>
                                <h4 class="text-black fs-20">Cards</h4>
                                <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown custom-dropdown mb-0 mt-3 mt-sm-0">
                                <div class="btn text-black bgl-light rounded-0" data-toggle="dropdown">
                                    Settings
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0)">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="owl-bank-wallet owl-carousel owl-loaded owl-drag mb-4">
                                <div class="items">
                                    <img class="mw-100" src={{asset("assets/admin/images/card/card1.jpg")}} alt="">
                                </div>
                                <div class="items">
                                    <img  class="mw-100" src={{asset("assets/admin/images/card/card2.jpg")}} alt="">
                                </div>
                                <div class="items">
                                    <img  class="mw-100" src={{asset("assets/admin/images/card/card3.jpg")}} alt="">
                                </div>
                            </div>
                            <div class="media align-items-center d-none d-sm-flex">
                                <div class="d-inline-block relative donut-chart-sale mr-4">
                                    <span class="donut" data-peity='{ "fill": ["rgb(60, 75, 165)", "rgba(236, 236, 236, 1)"],   "innerRadius": 32, "radius": 10}'>7/8</span>
                                    <small class="text-primary">71%</small>
                                </div>
                                <div class="media-body">
                                    <p class="mb-2">Monthly Limits</p>
                                    <h4 class="mb-0 text-black font-w600 fs-20">$20,000 of $100,000</h4>
                                </div>
                                <a class="btn btn-link ml-auto font-w700" href="javascript:void(0)">View details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header d-block d-sm-flex border-0">
                            <div>
                                <h4 class="fs-20 text-black">Recent Trading Activities</h4>
                                <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="card-action card-tabs mt-3 mt-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
                                            Monthly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
                                            Weekly
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Today" role="tab">
                                            Today
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body tab-content p-0">
                            <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table shadow-hover card-table">
                                        <tbody>
                                        <tr>
                                            <td>
														<span class="bgl-success p-3 d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600 wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
															</span>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$5,553</td>
                                            <td><a class="btn-link text-success float-right" href="javascript:void(0)">Completed</a></td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3 d-inline-block">
														<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
														</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600  wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.3181 13.6532C12.1138 13.7348 11.8862 13.7348 11.6819 13.6532L9.48938 12.7761L12 17.7974L14.5107 12.7761L12.3181 13.6532Z" fill="#DC3CCC"/>
																	<path d="M12 11.9341L15.0155 10.7279L12 5.90306L8.9845 10.7279L12 11.9341Z" fill="#DC3CCC"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#DC3CCC"/>
																</svg>
															</span>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$542</td>
                                            <td>
                                                <a class="btn-link text-dark float-right" href="javascript:void(0)">Pending</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3 d-inline-block ">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600  wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM17.8879 10.6801C17.4417 11.0743 16.9263 11.3824 16.3679 11.5885C15.9726 11.7164 15.6111 11.9312 15.3098 12.2174C14.9098 13.1698 15.1554 14.2713 15.9227 14.9637C15.9488 14.9899 15.9734 15.0179 15.9962 15.0474C16.9614 16.2842 16.8633 18.0438 15.7668 19.1657C14.5528 20.3776 12.5865 20.3776 11.3722 19.1657C10.6039 18.2437 10.3528 16.9962 10.7044 15.8486C10.7894 15.1855 10.5626 14.5201 10.0899 14.0471C9.62093 13.5951 8.97064 13.383 8.32532 13.4711C7.17777 13.8222 5.93055 13.5703 5.009 12.8017C3.79553 11.5898 3.79448 9.6238 5.00639 8.41059C5.00717 8.40955 5.00822 8.40876 5.009 8.40798C6.1304 7.31065 7.89083 7.21256 9.12732 8.17857C9.99289 9.03394 11.2752 9.32194 11.9566 8.86339C12.2438 8.56283 12.4588 8.20107 12.5859 7.8053C12.7921 7.24735 13.0997 6.73256 13.4934 6.28682C14.7068 5.07335 16.6739 5.07335 17.8874 6.28656C19.1011 7.50003 19.1011 9.46712 17.8879 10.6806V10.6801Z" fill="#2B98D6"/>
																	<path d="M14.6784 7.39816C14.4502 7.69123 14.2697 8.01851 14.1441 8.368C13.9151 9.05703 13.4924 9.66563 12.9269 10.1211C11.3324 10.9773 9.36089 10.6462 8.13349 9.31614C7.59153 8.95261 6.86908 9.01592 6.39859 9.4683C5.8676 9.99853 5.86709 10.8591 6.39732 11.3901C6.39783 11.3904 6.39808 11.3909 6.39859 11.3911C6.71872 11.71 7.17465 11.7605 8.1483 11.5823C8.34563 11.5466 8.54577 11.5285 8.74643 11.5285C9.72186 11.5443 10.6549 11.9298 11.3572 12.6068C12.2081 13.4577 12.6027 14.6632 12.4194 15.8526C12.2382 16.8239 12.2887 17.2814 12.6091 17.6023C13.1404 18.1326 14.0007 18.1326 14.5319 17.6023C14.9909 17.1119 15.0363 16.3647 14.6399 15.8224C13.3436 14.5927 13.0316 12.6469 13.8786 11.0736C14.3341 10.5083 14.9426 10.0861 15.6317 9.85787C15.9816 9.73175 16.3092 9.55024 16.602 9.32048C17.1327 8.78948 17.1327 7.92865 16.6017 7.3979C16.0705 6.86715 15.2099 6.86741 14.6792 7.39841L14.6784 7.39816Z" fill="#2B98D6"/>
																</svg>
															</span>
                                                    Ripple
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$912</td>
                                            <td>
                                                <a class="btn-link text-danger float-right" href="javascript:void(0)">Canceled</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
													<span class="bgl-success p-3 d-inline-block">
														<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
														</svg>
													</span>
                                            </td>
                                            <td>
                                                <div class="font-w600 wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z" fill="#5F5F5F"/>
																</svg>
															</span>
                                                    Litecoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$7,762</td>
                                            <td>
                                                <a class="btn-link text-success float-right" href="javascript:void(0)">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-success p-3 d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600 wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
															</span>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$5,553</td>
                                            <td>
                                                <a class="btn-link text-success float-right" href="javascript:void(0)">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600 wspace-no">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM17.8879 10.6801C17.4417 11.0743 16.9263 11.3824 16.3679 11.5885C15.9726 11.7164 15.6111 11.9312 15.3098 12.2174C14.9098 13.1698 15.1554 14.2713 15.9227 14.9637C15.9488 14.9899 15.9734 15.0179 15.9962 15.0474C16.9614 16.2842 16.8633 18.0438 15.7668 19.1657C14.5528 20.3776 12.5865 20.3776 11.3722 19.1657C10.6039 18.2437 10.3528 16.9962 10.7044 15.8486C10.7894 15.1855 10.5626 14.5201 10.0899 14.0471C9.62093 13.5951 8.97064 13.383 8.32532 13.4711C7.17777 13.8222 5.93055 13.5703 5.009 12.8017C3.79553 11.5898 3.79448 9.6238 5.00639 8.41059C5.00717 8.40955 5.00822 8.40876 5.009 8.40798C6.1304 7.31065 7.89083 7.21256 9.12732 8.17857C9.99289 9.03394 11.2752 9.32194 11.9566 8.86339C12.2438 8.56283 12.4588 8.20107 12.5859 7.8053C12.7921 7.24735 13.0997 6.73256 13.4934 6.28682C14.7068 5.07335 16.6739 5.07335 17.8874 6.28656C19.1011 7.50003 19.1011 9.46712 17.8879 10.6806V10.6801Z" fill="#2B98D6"/>
																	<path d="M14.6784 7.39816C14.4502 7.69123 14.2697 8.01851 14.1441 8.368C13.9151 9.05703 13.4924 9.66563 12.9269 10.1211C11.3324 10.9773 9.36089 10.6462 8.13349 9.31614C7.59153 8.95261 6.86908 9.01592 6.39859 9.4683C5.8676 9.99853 5.86709 10.8591 6.39732 11.3901C6.39783 11.3904 6.39808 11.3909 6.39859 11.3911C6.71872 11.71 7.17465 11.7605 8.1483 11.5823C8.34563 11.5466 8.54577 11.5285 8.74643 11.5285C9.72186 11.5443 10.6549 11.9298 11.3572 12.6068C12.2081 13.4577 12.6027 14.6632 12.4194 15.8526C12.2382 16.8239 12.2887 17.2814 12.6091 17.6023C13.1404 18.1326 14.0007 18.1326 14.5319 17.6023C14.9909 17.1119 15.0363 16.3647 14.6399 15.8224C13.3436 14.5927 13.0316 12.6469 13.8786 11.0736C14.3341 10.5083 14.9426 10.0861 15.6317 9.85787C15.9816 9.73175 16.3092 9.55024 16.602 9.32048C17.1327 8.78948 17.1327 7.92865 16.6017 7.3979C16.0705 6.86715 15.2099 6.86741 14.6792 7.39841L14.6784 7.39816Z" fill="#2B98D6"/>
																</svg>
															</span>
                                                    Ripple
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$912</td>
                                            <td>
                                                <a class="btn-link text-danger float-right" href="javascript:void(0)">Canceled</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="Weekly" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table shadow-hover  card-table">
                                        <tbody>
                                        <tr>
                                            <td>
														<span class="bgl-success p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
															</span>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$5,553</td>
                                            <td><a class="btn-link text-success float-right" href="#">Completed</a></td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
														<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
														</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.3181 13.6532C12.1138 13.7348 11.8862 13.7348 11.6819 13.6532L9.48938 12.7761L12 17.7974L14.5107 12.7761L12.3181 13.6532Z" fill="#DC3CCC"/>
																	<path d="M12 11.9341L15.0155 10.7279L12 5.90306L8.9845 10.7279L12 11.9341Z" fill="#DC3CCC"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#DC3CCC"/>
																</svg>
															</span>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$542</td>
                                            <td>
                                                <a class="btn-link text-dark float-right" href="#">Pending</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM17.8879 10.6801C17.4417 11.0743 16.9263 11.3824 16.3679 11.5885C15.9726 11.7164 15.6111 11.9312 15.3098 12.2174C14.9098 13.1698 15.1554 14.2713 15.9227 14.9637C15.9488 14.9899 15.9734 15.0179 15.9962 15.0474C16.9614 16.2842 16.8633 18.0438 15.7668 19.1657C14.5528 20.3776 12.5865 20.3776 11.3722 19.1657C10.6039 18.2437 10.3528 16.9962 10.7044 15.8486C10.7894 15.1855 10.5626 14.5201 10.0899 14.0471C9.62093 13.5951 8.97064 13.383 8.32532 13.4711C7.17777 13.8222 5.93055 13.5703 5.009 12.8017C3.79553 11.5898 3.79448 9.6238 5.00639 8.41059C5.00717 8.40955 5.00822 8.40876 5.009 8.40798C6.1304 7.31065 7.89083 7.21256 9.12732 8.17857C9.99289 9.03394 11.2752 9.32194 11.9566 8.86339C12.2438 8.56283 12.4588 8.20107 12.5859 7.8053C12.7921 7.24735 13.0997 6.73256 13.4934 6.28682C14.7068 5.07335 16.6739 5.07335 17.8874 6.28656C19.1011 7.50003 19.1011 9.46712 17.8879 10.6806V10.6801Z" fill="#2B98D6"/>
																	<path d="M14.6784 7.39816C14.4502 7.69123 14.2697 8.01851 14.1441 8.368C13.9151 9.05703 13.4924 9.66563 12.9269 10.1211C11.3324 10.9773 9.36089 10.6462 8.13349 9.31614C7.59153 8.95261 6.86908 9.01592 6.39859 9.4683C5.8676 9.99853 5.86709 10.8591 6.39732 11.3901C6.39783 11.3904 6.39808 11.3909 6.39859 11.3911C6.71872 11.71 7.17465 11.7605 8.1483 11.5823C8.34563 11.5466 8.54577 11.5285 8.74643 11.5285C9.72186 11.5443 10.6549 11.9298 11.3572 12.6068C12.2081 13.4577 12.6027 14.6632 12.4194 15.8526C12.2382 16.8239 12.2887 17.2814 12.6091 17.6023C13.1404 18.1326 14.0007 18.1326 14.5319 17.6023C14.9909 17.1119 15.0363 16.3647 14.6399 15.8224C13.3436 14.5927 13.0316 12.6469 13.8786 11.0736C14.3341 10.5083 14.9426 10.0861 15.6317 9.85787C15.9816 9.73175 16.3092 9.55024 16.602 9.32048C17.1327 8.78948 17.1327 7.92865 16.6017 7.3979C16.0705 6.86715 15.2099 6.86741 14.6792 7.39841L14.6784 7.39816Z" fill="#2B98D6"/>
																</svg>
															</span>
                                                    Ripple
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$912</td>
                                            <td>
                                                <a class="btn-link text-danger float-right" href="#">Canceled</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM17.8879 10.6801C17.4417 11.0743 16.9263 11.3824 16.3679 11.5885C15.9726 11.7164 15.6111 11.9312 15.3098 12.2174C14.9098 13.1698 15.1554 14.2713 15.9227 14.9637C15.9488 14.9899 15.9734 15.0179 15.9962 15.0474C16.9614 16.2842 16.8633 18.0438 15.7668 19.1657C14.5528 20.3776 12.5865 20.3776 11.3722 19.1657C10.6039 18.2437 10.3528 16.9962 10.7044 15.8486C10.7894 15.1855 10.5626 14.5201 10.0899 14.0471C9.62093 13.5951 8.97064 13.383 8.32532 13.4711C7.17777 13.8222 5.93055 13.5703 5.009 12.8017C3.79553 11.5898 3.79448 9.6238 5.00639 8.41059C5.00717 8.40955 5.00822 8.40876 5.009 8.40798C6.1304 7.31065 7.89083 7.21256 9.12732 8.17857C9.99289 9.03394 11.2752 9.32194 11.9566 8.86339C12.2438 8.56283 12.4588 8.20107 12.5859 7.8053C12.7921 7.24735 13.0997 6.73256 13.4934 6.28682C14.7068 5.07335 16.6739 5.07335 17.8874 6.28656C19.1011 7.50003 19.1011 9.46712 17.8879 10.6806V10.6801Z" fill="#2B98D6"/>
																	<path d="M14.6784 7.39816C14.4502 7.69123 14.2697 8.01851 14.1441 8.368C13.9151 9.05703 13.4924 9.66563 12.9269 10.1211C11.3324 10.9773 9.36089 10.6462 8.13349 9.31614C7.59153 8.95261 6.86908 9.01592 6.39859 9.4683C5.8676 9.99853 5.86709 10.8591 6.39732 11.3901C6.39783 11.3904 6.39808 11.3909 6.39859 11.3911C6.71872 11.71 7.17465 11.7605 8.1483 11.5823C8.34563 11.5466 8.54577 11.5285 8.74643 11.5285C9.72186 11.5443 10.6549 11.9298 11.3572 12.6068C12.2081 13.4577 12.6027 14.6632 12.4194 15.8526C12.2382 16.8239 12.2887 17.2814 12.6091 17.6023C13.1404 18.1326 14.0007 18.1326 14.5319 17.6023C14.9909 17.1119 15.0363 16.3647 14.6399 15.8224C13.3436 14.5927 13.0316 12.6469 13.8786 11.0736C14.3341 10.5083 14.9426 10.0861 15.6317 9.85787C15.9816 9.73175 16.3092 9.55024 16.602 9.32048C17.1327 8.78948 17.1327 7.92865 16.6017 7.3979C16.0705 6.86715 15.2099 6.86741 14.6792 7.39841L14.6784 7.39816Z" fill="#2B98D6"/>
																</svg>
															</span>
                                                    Ripple
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$912</td>
                                            <td>
                                                <a class="btn-link text-danger float-right" href="#">Canceled</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="Today" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table shadow-hover card-table">
                                        <tbody>
                                        <tr>
                                            <td>
														<span class="bgl-success p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
															</span>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$5,553</td>
                                            <td><a class="btn-link text-success float-right" href="#">Completed</a></td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
														<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
														</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.3181 13.6532C12.1138 13.7348 11.8862 13.7348 11.6819 13.6532L9.48938 12.7761L12 17.7974L14.5107 12.7761L12.3181 13.6532Z" fill="#DC3CCC"/>
																	<path d="M12 11.9341L15.0155 10.7279L12 5.90306L8.9845 10.7279L12 11.9341Z" fill="#DC3CCC"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#DC3CCC"/>
																</svg>
															</span>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$542</td>
                                            <td>
                                                <a class="btn-link text-dark float-right" href="#">Pending</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-danger p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M5.13185 13.9043L5.13185 13.9043L5.11515 6.99607C5.11511 6.99224 5.11513 6.98868 5.11517 6.98542M5.13185 13.9043L5.61517 6.99089L5.11517 6.99005C5.11519 6.97692 5.11575 6.96665 5.116 6.96234L5.11608 6.96082C5.11588 6.96411 5.11535 6.97298 5.11519 6.98431C5.11518 6.98468 5.11517 6.98505 5.11517 6.98542M5.13185 13.9043C5.13378 14.6982 5.77881 15.3403 6.57281 15.3384C7.36672 15.3365 8.00877 14.6914 8.00689 13.8975L8.00689 13.8975L7.99856 10.4687M5.13185 13.9043L7.99856 10.4687M5.11517 6.98542C5.11755 6.19684 5.75739 5.55451 6.54875 5.55238C6.55044 5.55236 6.5522 5.55235 6.554 5.55234L6.55606 5.55234L6.57321 5.55239L13.4671 5.56905L13.4658 6.06905L13.4671 5.56905C14.2608 5.57098 14.903 6.21593 14.9011 7.01004C14.8992 7.80394 14.2541 8.44597 13.4602 8.44409L13.4602 8.4441L10.0315 8.43582L23.2141 21.6184C23.7755 22.1798 23.7755 23.0899 23.2141 23.6513C22.6527 24.2127 21.7426 24.2127 21.1812 23.6513L7.99856 10.4687M5.11517 6.98542C5.11516 6.98743 5.11517 6.98943 5.11517 6.99144L7.99856 10.4687M6.5541 5.55237C6.55474 5.55237 6.5554 5.55237 6.55606 5.55238L6.5541 5.55237Z" fill="#FF2E2E" stroke="#FF2E2E"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM17.8879 10.6801C17.4417 11.0743 16.9263 11.3824 16.3679 11.5885C15.9726 11.7164 15.6111 11.9312 15.3098 12.2174C14.9098 13.1698 15.1554 14.2713 15.9227 14.9637C15.9488 14.9899 15.9734 15.0179 15.9962 15.0474C16.9614 16.2842 16.8633 18.0438 15.7668 19.1657C14.5528 20.3776 12.5865 20.3776 11.3722 19.1657C10.6039 18.2437 10.3528 16.9962 10.7044 15.8486C10.7894 15.1855 10.5626 14.5201 10.0899 14.0471C9.62093 13.5951 8.97064 13.383 8.32532 13.4711C7.17777 13.8222 5.93055 13.5703 5.009 12.8017C3.79553 11.5898 3.79448 9.6238 5.00639 8.41059C5.00717 8.40955 5.00822 8.40876 5.009 8.40798C6.1304 7.31065 7.89083 7.21256 9.12732 8.17857C9.99289 9.03394 11.2752 9.32194 11.9566 8.86339C12.2438 8.56283 12.4588 8.20107 12.5859 7.8053C12.7921 7.24735 13.0997 6.73256 13.4934 6.28682C14.7068 5.07335 16.6739 5.07335 17.8874 6.28656C19.1011 7.50003 19.1011 9.46712 17.8879 10.6806V10.6801Z" fill="#2B98D6"/>
																	<path d="M14.6784 7.39816C14.4502 7.69123 14.2697 8.01851 14.1441 8.368C13.9151 9.05703 13.4924 9.66563 12.9269 10.1211C11.3324 10.9773 9.36089 10.6462 8.13349 9.31614C7.59153 8.95261 6.86908 9.01592 6.39859 9.4683C5.8676 9.99853 5.86709 10.8591 6.39732 11.3901C6.39783 11.3904 6.39808 11.3909 6.39859 11.3911C6.71872 11.71 7.17465 11.7605 8.1483 11.5823C8.34563 11.5466 8.54577 11.5285 8.74643 11.5285C9.72186 11.5443 10.6549 11.9298 11.3572 12.6068C12.2081 13.4577 12.6027 14.6632 12.4194 15.8526C12.2382 16.8239 12.2887 17.2814 12.6091 17.6023C13.1404 18.1326 14.0007 18.1326 14.5319 17.6023C14.9909 17.1119 15.0363 16.3647 14.6399 15.8224C13.3436 14.5927 13.0316 12.6469 13.8786 11.0736C14.3341 10.5083 14.9426 10.0861 15.6317 9.85787C15.9816 9.73175 16.3092 9.55024 16.602 9.32048C17.1327 8.78948 17.1327 7.92865 16.6017 7.3979C16.0705 6.86715 15.2099 6.86741 14.6792 7.39841L14.6784 7.39816Z" fill="#2B98D6"/>
																</svg>
															</span>
                                                    Ripple
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">-$912</td>
                                            <td>
                                                <a class="btn-link text-danger float-right" href="#">Canceled</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
													<span class="bgl-success p-3  d-inline-block">
														<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
														</svg>
													</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z" fill="#5F5F5F"/>
																</svg>
															</span>
                                                    Litecoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$7,762</td>
                                            <td>
                                                <a class="btn-link text-success float-right" href="#">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
														<span class="bgl-success p-3  d-inline-block">
															<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M23.6186 15.7207L23.6186 15.7207L23.6353 22.6289C23.6354 22.6328 23.6354 22.6363 23.6353 22.6396M23.6186 15.7207L23.1353 22.6341L23.6353 22.635C23.6353 22.6481 23.6347 22.6583 23.6345 22.6627L23.6344 22.6642C23.6346 22.6609 23.6351 22.652 23.6353 22.6407C23.6353 22.6403 23.6353 22.64 23.6353 22.6396M23.6186 15.7207C23.6167 14.9268 22.9717 14.2847 22.1777 14.2866C21.3838 14.2885 20.7417 14.9336 20.7436 15.7275L20.7436 15.7275L20.7519 19.1563M23.6186 15.7207L20.7519 19.1563M23.6353 22.6396C23.6329 23.4282 22.9931 24.0705 22.2017 24.0726C22.2 24.0726 22.1983 24.0727 22.1965 24.0727L22.1944 24.0727L22.1773 24.0726L15.2834 24.056L15.2846 23.556L15.2834 24.056C14.4897 24.054 13.8474 23.4091 13.8494 22.615C13.8513 21.8211 14.4964 21.179 15.2903 21.1809L15.2903 21.1809L18.719 21.1892L5.53639 8.0066C4.975 7.44521 4.975 6.53505 5.53639 5.97367C6.09778 5.41228 7.00793 5.41228 7.56932 5.97367L20.7519 19.1563M23.6353 22.6396C23.6353 22.6376 23.6353 22.6356 23.6353 22.6336L20.7519 19.1563M22.1964 24.0726C22.1957 24.0726 22.1951 24.0726 22.1944 24.0726L22.1964 24.0726Z" fill="#2BC155" stroke="#2BC155"/>
															</svg>
														</span>
                                            </td>
                                            <td>
                                                <div class="font-w600">
															<span class="mr-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
															</span>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td class="font-w500">06:24:45 AM</td>
                                            <td class="font-w600 text-center">+$5,553</td>
                                            <td>
                                                <a class="btn-link text-success float-right" href="javascript:void(0)">Completed</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="mb-0 text-black fs-20">Sell Order</h4>
                            <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0)">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="dropdown custom-dropdown d-block">
                                <div class="btn bgl-light d-flex align-items-center rounded-0 svg-btn " data-toggle="dropdown">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.5567 23.8931C21.1992 24.0359 20.8009 24.0359 20.4434 23.8931L16.6064 22.3582L21.0001 31.1454L25.3937 22.3582L21.5567 23.8931Z" fill="#DC3CCC"/>
                                        <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#DC3CCC"/>
                                        <path d="M20.9999 9.15527e-05C9.40201 9.15527e-05 0 9.4021 0 21C0 32.5979 9.40201 41.9999 20.9999 41.9999C32.5978 41.9999 41.9998 32.5979 41.9998 21C41.987 9.40759 32.5923 0.0129089 20.9999 9.15527e-05ZM29.8416 20.171L22.3416 35.171C21.9713 35.9121 21.0699 36.2124 20.3293 35.8421C20.0386 35.697 19.8033 35.4617 19.6582 35.171L12.1582 20.171C11.9252 19.7032 11.9518 19.1479 12.2282 18.7043L19.7282 6.7045C20.2267 6.00229 21.1995 5.83658 21.9017 6.33508C22.045 6.43671 22.17 6.56122 22.2716 6.7045L29.7711 18.7043C30.0481 19.1479 30.0746 19.7032 29.8416 20.171Z" fill="#DC3CCC"/>
                                    </svg>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">Ethereum</span>
                                    </div>
                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">4 June 2020 - 4 July 2020</a>
                                    <a class="dropdown-item" href="javascript:void(0)">5 july 2020 - 4 Aug 2020</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table text-center bg-secondary-hover card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Price</th>
                                        <th>Amount</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">82.3</td>
                                        <td>0.15</td>
                                        <td class="text-right">$134,12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">83.9</td>
                                        <td>0.18</td>
                                        <td class="text-right">$237,31</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">84.2</td>
                                        <td>0.25</td>
                                        <td class="text-right">$252,58</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">86.2</td>
                                        <td>0.35</td>
                                        <td class="text-right">$126,26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">91.6</td>
                                        <td>0.75</td>
                                        <td class="text-right">$46,92</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">92.6</td>
                                        <td>0.21</td>
                                        <td class="text-right">$123,27</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">93.9</td>
                                        <td>0.55</td>
                                        <td class="text-right">$212,56</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">94.2</td>
                                        <td>0.18</td>
                                        <td class="text-right">$129,26</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="javascript:void(0)" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                            <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0)">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="dropdown custom-dropdown d-block">
                                <div class="btn bgl-light d-flex align-items-center rounded-0 svg-btn " data-toggle="dropdown">
                                    <svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.0048 9.15527e-05C9.40689 9.15527e-05 0.00488281 9.4021 0.00488281 21C0.00488281 32.5979 9.40689 41.9999 21.0048 41.9999C32.6027 41.9999 42.0047 32.5979 42.0047 21C41.9914 9.40759 32.5972 0.0133667 21.0048 9.15527e-05ZM31.3086 18.6901C30.5276 19.38 29.6259 19.9192 28.6485 20.2799C27.9568 20.5038 27.3242 20.8796 26.7969 21.3804C26.097 23.0471 26.5268 24.9748 27.8694 26.1865C27.9152 26.2322 27.9582 26.2812 27.998 26.3329C29.6872 28.4973 29.5155 31.5766 27.5966 33.54C25.4721 35.6608 22.0311 35.6608 19.9062 33.54C18.5617 31.9264 18.1223 29.7433 18.7375 27.7351C18.8863 26.5746 18.4894 25.4101 17.6622 24.5825C16.8414 23.7914 15.7034 23.4202 14.5741 23.5745C12.5659 24.1888 10.3833 23.748 8.7706 22.403C6.64703 20.2822 6.6452 16.8417 8.76602 14.7186C8.7674 14.7167 8.76923 14.7154 8.7706 14.714C10.733 12.7937 13.8138 12.622 15.9776 14.3125C17.4924 15.8094 19.7363 16.3134 20.9288 15.511C21.4314 14.985 21.8077 14.3519 22.0302 13.6593C22.3909 12.6829 22.9292 11.782 23.6182 11.002C25.7417 8.87842 29.1841 8.87842 31.3077 11.0015C33.4317 13.1251 33.4317 16.5675 31.3086 18.691V18.6901Z" fill="#2B98D6"/>
                                        <path d="M25.7396 13.1205C25.3303 13.646 25.0067 14.2329 24.7815 14.8596C24.3709 16.0951 23.6128 17.1864 22.5989 18.003C19.7397 19.5384 16.2044 18.9446 14.0034 16.5597C13.0316 15.9078 11.7361 16.0214 10.8925 16.8325C9.94033 17.7833 9.93941 19.3264 10.8902 20.2786C10.8911 20.279 10.8916 20.2799 10.8925 20.2804C11.4665 20.8521 12.2841 20.9428 14.03 20.6233C14.3838 20.5592 14.7427 20.5267 15.1025 20.5267C16.8516 20.555 18.5248 21.2463 19.7841 22.4603C21.3098 23.986 22.0175 26.1475 21.6888 28.2803C21.3638 30.0221 21.4545 30.8424 22.029 31.4178C22.9816 32.3686 24.5242 32.3686 25.4768 31.4178C26.2999 30.5384 26.3814 29.1985 25.6705 28.2263C23.3459 26.0212 22.7865 22.5321 24.3054 19.7109C25.1221 18.6974 26.2134 17.9403 27.4489 17.5311C28.0765 17.3049 28.6638 16.9795 29.1888 16.5675C30.1405 15.6153 30.1405 14.0717 29.1884 13.1201C28.2358 12.1684 26.6926 12.1688 25.741 13.121L25.7396 13.1205Z" fill="#2B98D6"/>
                                    </svg>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">Ripple</span>
                                    </div>
                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">4 June 2020 - 4 July 2020</a>
                                    <a class="dropdown-item" href="javascript:void(0)">5 july 2020 - 4 Aug 2020</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table text-center bg-info-hover card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Price</th>
                                        <th>Amount</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-left">83.9</td>
                                        <td>0.18</td>
                                        <td class="text-right">$237,31</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">82.3</td>
                                        <td>0.15</td>
                                        <td class="text-right">$134,12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">84.2</td>
                                        <td>0.25</td>
                                        <td class="text-right">$252,58</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">91.6</td>
                                        <td>0.75</td>
                                        <td class="text-right">$46,92</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">94.2</td>
                                        <td>0.18</td>
                                        <td class="text-right">$129,26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">86.2</td>
                                        <td>0.35</td>
                                        <td class="text-right">$126,26</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">93.9</td>
                                        <td>0.55</td>
                                        <td class="text-right">$212,56</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">92.6</td>
                                        <td>0.21</td>
                                        <td class="text-right">$123,27</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="javascript:void(0)" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header border-0 pb-0 d-block d-md-flex">
                            <div>
                                <h4 class="fs-20 text-black">Quick Trade</h4>
                                <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0">
                                <div class="btn bgl-light d-flex align-items-center rounded-0 svg-btn btn-md" data-toggle="dropdown">
                                    <i class="fa fa-angle-down scale5 mr-3"></i>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">561,511 Btc</span>
                                    </div>
                                    <svg class="ml-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.5001 16.5002C28.4987 14.844 27.1561 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.1561 19.4985 28.4987 18.1559 28.5001 16.5002Z" fill="#FFAB2D"></path>
                                        <path d="M16.5002 28.5H25.5003C27.157 28.5 28.5001 27.157 28.5001 25.5003C28.5001 23.8432 27.157 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
                                        <path d="M20.9999 0.00012207C9.40201 0.00012207 0 9.40213 0 21C0 32.5979 9.40201 41.9999 20.9999 41.9999C32.5978 41.9999 41.9998 32.5979 41.9998 21C41.9865 9.40762 32.5923 0.0133972 20.9999 0.00012207ZM31.5001 25.4998C31.496 28.8122 28.8121 31.4961 25.5002 31.4998V32.9998C25.5002 33.8284 24.8282 34.4999 24.0001 34.4999C23.1715 34.4999 22.5 33.8284 22.5 32.9998V31.4998H19.5003V32.9998C19.5003 33.8284 18.8283 34.4999 18.0002 34.4999C17.1716 34.4999 16.5001 33.8284 16.5001 32.9998V31.4998H12.0003C11.1717 31.4998 10.5002 30.8282 10.5002 30.0001C10.5002 29.1716 11.1717 28.5 12.0003 28.5H13.4999V13.5H12.0003C11.1717 13.5 10.5002 12.8285 10.5002 11.9999C10.5002 11.1714 11.1717 10.4998 12.0003 10.4998H16.5001V9.00021C16.5001 8.17166 17.1716 7.50012 18.0002 7.50012C18.8287 7.50012 19.5003 8.17166 19.5003 9.00021V10.4998H22.5V9.00021C22.5 8.17166 23.1715 7.50012 24.0001 7.50012C24.8286 7.50012 25.5002 8.17166 25.5002 9.00021V10.4998C28.7997 10.4861 31.4859 13.1494 31.5001 16.4489C31.5074 18.1962 30.7498 19.8593 29.4264 21C30.7375 22.128 31.4941 23.77 31.5001 25.4998Z" fill="#FFAB2D"></path>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">4 June 2020 - 4 July 2020</a>
                                    <a class="dropdown-item" href="javascript:void(0)">5 july 2020 - 4 Aug 2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border rounded-0">Amount BTC</span>
                                            </div>
                                            <input type="number" class="form-control rounded-0" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border  rounded-0">Price BPL</span>
                                            </div>
                                            <input type="number" class="form-control rounded-0" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border rounded-0">Fee (1%)</span>
                                            </div>
                                            <input type="number" class="form-control rounded-0" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border rounded-0">Total BPL</span>
                                            </div>
                                            <input type="number" class="form-control rounded-0" placeholder="0,000000">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                </div>
                                <div class="col-md-7 text-left mt-3 mt-sm-0 text-sm-right">
                                    <a href="javascript:void(0)" class="btn btn-success rounded-0 mb-2">
                                        BUY
                                        <svg class="ml-4 scale3" width="16" height="16" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z" fill="white" stroke="white"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="btn ml-3 btn-danger rounded-0 mb-2">
                                        SELL
                                        <svg class="ml-4 scale5" width="16" height="16" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z" fill="white" stroke="white"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                        <div class="card-header d-block d-sm-flex border-0 pb-0">
                            <div>
                                <h4 class="fs-20 text-black">Quick Transfer</h4>
                                <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0">
                                <div class="btn bgl-light d-flex align-items-center rounded-0 svg-btn " data-toggle="dropdown">
                                    <i class="fa fa-angle-down scale5 mr-3"></i>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">23,511 Ltc</span>
                                    </div>
                                    <svg class="ml-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.9999 0.00012207C9.40201 0.00012207 0 9.40213 0 21C0 32.5979 9.40201 41.9999 20.9999 41.9999C32.5978 41.9999 41.9998 32.5979 41.9998 21C41.9865 9.40762 32.5923 0.0133972 20.9999 0.00012207ZM28.4999 31.5002H16.5001C15.6715 31.5002 15 30.8287 15 30.0001C15 29.9292 15.005 29.8582 15.0151 29.7877L16.144 21.8844L13.8638 22.4548C13.7448 22.485 13.6226 22.5001 13.4999 22.5001C12.6714 22.4992 12.0007 21.8272 12.0012 20.9987C12.0021 20.3111 12.4699 19.7123 13.1369 19.5448L16.6017 18.6787L18.0148 8.78735C18.132 7.96704 18.8919 7.39758 19.7122 7.51477C20.5325 7.63196 21.102 8.39185 20.9848 9.21216L19.7443 17.8932L25.1363 16.5451C25.9387 16.3405 26.7549 16.8252 26.9591 17.6277C27.1637 18.4301 26.6789 19.2463 25.8765 19.451C25.8719 19.4519 25.8673 19.4532 25.8627 19.4542L19.2856 21.0984L18.2286 28.5H28.4999C29.3285 28.5 30 29.1716 30 30.0001C30 30.8282 29.3285 31.5002 28.4999 31.5002Z" fill="#5F5F5F"/>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0)">4 June 2020 - 4 July 2020</a>
                                    <a class="dropdown-item" href="javascript:void(0)">5 july 2020 - 4 Aug 2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white border rounded-0">Amount BTC</span>
                                            </div>
                                            <input type="number" class="form-control rounded-0" placeholder="0,000000">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fs-20 text-black mb-0">Recent Contacts</h4>
                                <a href="javascript:void(0)" class="btn btn-link">View more</a>
                            </div>
                            <div class="testimonial-one owl-right-nav owl-carousel owl-loaded owl-drag">
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/10.jpg")}} alt="">
                                        <h5 class="text-black mb-0">Samuel</h5>
                                        <span class="fs-12">@sam224</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/11.jpg")}} alt="">
                                        <h5 class="text-black mb-0">Cindy</h5>
                                        <span class="fs-12">@cindyss</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/12.jpg")}} alt="">
                                        <h5 class="text-black mb-0">David</h5>
                                        <span class="fs-12">@davidxc</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/13.jpg")}} alt="">
                                        <h5 class="text-black mb-0">Martha </h5>
                                        <span class="fs-12">@marthaa</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/14.jpg")}} alt="">
                                        <h5 class="text-black mb-0">Olivia </h5>
                                        <span class="fs-12">@oliv62</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src={{asset("assets/admin/images/profile/15.jpg")}} alt="">
                                        <h5 class="text-black mb-0">Bella</h5>
                                        <span class="fs-12">@bellazz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="javascript:void(0)" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
                                        TRANSFER NOW
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
        </div>
    </div>
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
<script src={{asset("assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}></script>
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

</body>
</html>
