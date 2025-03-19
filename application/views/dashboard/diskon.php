<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">

    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->

    <link rel="shortcut icon" type="image/png" href="<?= base_url("assets/") ?>images/favicon.png">
    <link href="<?= base_url("assets/") ?>vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="<?= base_url("assets/") ?>vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url("assets/") ?>vendor/nouislider/nouislider.min.css">

    <!-- Style css -->
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">
    <!-- datatable css -->
    <link href="<?= base_url("assets/") ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .btn.active {
            background-color: #4885ed;
            /* Change to your desired color */
            color: white;
            /* Change text color if needed */
        }
    </style>
</head>


<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
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
                <!-- <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                        fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg> -->
                <div class="brand-title">
                    <img src="<?= base_url('assets/images/svg/walmart.svg') ?>" width="150px" alt="">
                </div>
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
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-data-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-data">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
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
                        <div class="card chat dlab-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dlab-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1"></rect>
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) ">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewbox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-data-circle text-primary me-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-datas text-primary me-2"></i> Add to
                                            btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to
                                            group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
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
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
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
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero"></path>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
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
        <!-- <div class="header"> -->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                    </div>
                </nav>
                <a href="<?= base_url('log_out/') ?>" class="dropdown-item ai-icon">
                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18"
                        viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                </a>
            </div>
        </div>
        <!-- </div> -->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="" href="<?= base_url('Das_admin') ?>" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a class="" href="<?= base_url('user/') ?>" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="nav-text">User</span>
                        </a>
                    </li>
                    <li><a class="" href="<?= base_url('kategori/') ?>" aria-expanded="false">
                            <i class="fas fa-layer-group"></i>
                            <span class="nav-text">Kategori</span>
                        </a>
                    </li>
                    <li><a class="" href="<?= base_url('produk/') ?>" aria-expanded="false">
                            <i class="fas fa-box"></i>
                            <span class="nav-text">Produk</span>
                        </a>
                    </li>
                    <li><a class="" href="<?= base_url('diskon/') ?>" aria-expanded="false">
                            <i class="fas fa-tags"></i>
                            <span class="nav-text">Diskon</span>
                        </a>
                    </li>
                    <li><a class="" href="<?= base_url('penjualan/') ?>" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="nav-text">Penjualan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Manajemen</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Diskon</a></li>
                    </ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <div class="menu">
                                    <button class="btn btn-outline-primary" onclick="filterData('produk', this)">Diskon
                                        Produk</button>
                                    <button class="btn btn-outline-primary" onclick="filterData('paket', this)">Diskon
                                        Paket</button>
                                    <button class="btn btn-outline-primary" onclick="filterData('musiman', this)">Diskon
                                        Musiman</button>
                                    <button class="btn btn-outline-primary" onclick="filterData('member', this)">Diskon
                                        Member</button>
                                </div>
                                <button type="button" class="btn btn-rounded btn-info btn-primary" id="tambahDataBtn"
                                    data-bs-toggle="modal" data-bs-target="#tambahDataProduk">
                                    <span class="btn-icon-start btn-primary text-info">
                                        <i class="fa fa-plus color-info" style="color:#4885ed;"></i>
                                    </span>
                                    Tambah Data
                                </button>
                            </div>

                            <!-- ADD Form for Diskon Produk -->
                            <div class="modal fade" id="tambahDataProduk" tabindex="-1"
                                aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Diskon Produk
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="tambahDataFormProduk" method="post"
                                                action="<?= base_url('Add_diskon_produk') ?>"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="productSearch" class="form-label">Pilih Produk</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" id="productSearch"
                                                            placeholder="Cari produk..."
                                                            onkeyup="searchProducts(this, 'results1')"
                                                            class="form-control">
                                                    </div>
                                                    <div id="results1" class="search-results-container"
                                                        style="border: 1px solid #ccc; padding: 10px; display: none;">
                                                        <!-- Search results will be populated here -->
                                                    </div>
                                                    <div class="produk" style="border: 1px solid #ccc; padding: 10px;">
                                                        <ul id="selectedProductsList1"></ul>
                                                        <input type="hidden" id="id_produk" name="id_produk" required>
                                                        <!-- Hidden input for selected product ID -->
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_diskon" class="form-label">Pilih Jenis
                                                        Diskon</label>
                                                    <select name="jenis_diskon" id="jenis_diskon" class="form-control"
                                                        required>
                                                        <option value="">Pilih Jenis Diskon</option>
                                                        <option value="persentase">Persentase</option>
                                                        <option value="potongan_nominal">Potongan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk" class="form-label">Nilai
                                                        Diskon</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_produk"
                                                        name="nilai_diskon" placeholder="Masukkan nilai diskon"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_mulai_produk" class="form-label">Tanggal
                                                        Mulai</label>
                                                    <input type="date" class="form-control" id="tgl_mulai_produk"
                                                        name="tgl_mulai" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_selesai_produk" class="form-label">Tanggal
                                                        Selesai</label>
                                                    <input type="date" class="form-control" id="tgl_selesai_produk"
                                                        name="tgl_selesai" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ADD Form for Diskon Paket -->
                            <div class="modal fade" id="tambahDataPaket" tabindex="-1"
                                aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Diskon Paket
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="tambahDataFormPaket2" method="post"
                                                action="<?= base_url('Add_diskon_paket') ?>"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk" class="form-label">Nama
                                                        Diskon</label>
                                                    <input type="text" class="form-control" id="nilai_diskon_produk"
                                                        name="nama" placeholder="Masukkan nama diskon" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productSearch" class="form-label">Pilih Produk</label>
                                                    <div id="example_filter" class="dataTables_filter">
                                                        <input type="search" id="productSearch"
                                                            placeholder="Search for products..."
                                                            onkeyup="searchProducts(this, 'results2')"
                                                            class="form-control">
                                                    </div>
                                                    <div id="results2" class="search-results-container"
                                                        style="border: 1px solid #ccc; padding: 10px; display: none;">
                                                        <!-- Search results will be populated here -->
                                                    </div>
                                                    <div class="produk" style="border: 1px solid #ccc; padding: 10px;">
                                                        <ul id="selectedProductsList2">
                                                            <p class="empty-message">Tidak ada produk yang dipilih.</p>
                                                        </ul>
                                                        <input type="hidden" id="id_produk" name="id_produk" required>
                                                        <!-- Hidden input for selected product ID -->
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_diskon" class="form-label">Pilih Jenis
                                                        Diskon</label>
                                                    <select name="jenis_diskon" id="jenis_diskon" class="form-control"
                                                        required>
                                                        <option value="">Pilih Jenis Diskon</option>
                                                        <option value="persentase">Persentase</option>
                                                        <option value="potongan_nominal">Potongan</option>
                                                        <option value="harga_tetap">Harga Tetap</option>
                                                        <option value="beli_x_gratis_y">Beli X Gratis Y </option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk" class="form-label">Nilai
                                                        Diskon</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_produk"
                                                        name="nilai_diskon" placeholder="Masukkan nilai diskon"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk" class="form-label">Jumlah
                                                        Beli</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_produk"
                                                        name="jumlah_beli" placeholder="Masukkan nilai diskon" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk" class="form-label">Jumlah
                                                        Bonus</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_produk"
                                                        name="jumlah_bonus" placeholder="Masukkan nilai diskon"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_mulai_produk" class="form-label">Tanggal
                                                        Mulai</label>
                                                    <input type="date" class="form-control" id="tgl_mulai_produk"
                                                        name="tgl_mulai" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_selesai_produk" class="form-label">Tanggal
                                                        Selesai</label>
                                                    <input type="date" class="form-control" id="tgl_selesai_produk"
                                                        name="tgl_selesai" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ADD Form for Diskon Musiman -->
                            <div class="modal fade" id="tambahDataMusiman" tabindex="-1"
                                aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Diskon Musiman
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="tambahDataFormMusiman" method="post"
                                                action="<?= base_url('Add_diskon_musiman/') ?>"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="nama_diskon_musiman" class="form-label">Nama
                                                        Diskon</label>
                                                    <input type="text" class="form-control" id="nama_diskon_musiman"
                                                        name="nama_diskon" placeholder="Masukkan nama diskon" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_diskon" class="form-label">Pilih Jenis
                                                        Diskon</label>
                                                    <select name="jenis_diskon" id="jenis_diskon" class="form-control"
                                                        required>
                                                        <option value="">Pilih Jenis Diskon</option>
                                                        <option value="persentase">Persentase</option>
                                                        <option value="potongan_nominal">Potongan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_musiman" class="form-label">Nilai
                                                        Diskon</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_musiman"
                                                        name="nilai_diskon" placeholder="Masukkan nilai diskon"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_musiman" class="form-label">Minimal
                                                        Belanja</label>
                                                    <input type="number" class="form-control" id="min_belanja"
                                                        name="min_belanja" placeholder="Masukkan Minimal Belanja"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_mulai_musiman" class="form-label">Tanggal
                                                        Mulai</label>
                                                    <input type="date" class="form-control" id="tgl_mulai_musiman"
                                                        name="tgl_mulai" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_selesai_musiman" class="form-label">Tanggal
                                                        Selesai</label>
                                                    <input type="date" class="form-control" id="tgl_selesai_musiman"
                                                        name="tgl_selesai" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ADD Form for Diskon Member -->
                            <div class="modal fade" id="tambahDataMember" tabindex="-1"
                                aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Diskon Member
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="tambahDataFormMember" method="post"
                                                action="<?= base_url('Add_diskon_member/') ?>"
                                                enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="jenis_diskon" class="form-label">Tipe Member</label>
                                                    <select name="type" id="jenis_diskon" class="form-control" required>
                                                        <option value="">Pilih Type Member Diskon</option>
                                                        <option value="baru">Baru</option>
                                                        <option value="biasa">Biasa</option>
                                                        <option value="lama">Lama</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="poin_min" class="form-label">Poin Minimum</label>
                                                    <input type="number" class="form-control" id="poin_min"
                                                        name="poin_min" placeholder="Masukkan poin minimum" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="jenis_diskon" class="form-label">Pilih Jenis
                                                        Diskon</label>
                                                    <select name="jenis_diskon" id="jenis_diskon" class="form-control"
                                                        required>
                                                        <option value="">Pilih Jenis Diskon</option>
                                                        <option value="persentase">Persentase</option>
                                                        <option value="potongan_nominal">Potongan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_member" class="form-label">Nilai
                                                        Diskon</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_member"
                                                        name="nilai_diskon" placeholder="Masukkan nilai diskon"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_mulai_member" class="form-label">Tanggal
                                                        Mulai</label>
                                                    <input type="date" class="form-control" id="tgl_mulai_member"
                                                        name="tgl_mulai" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_selesai_member" class="form-label">Tanggal
                                                        Selesai</label>
                                                    <input type="date" class="form-control" id="tgl_selesai_member"
                                                        name="tgl_selesai" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-sm" id="example">
                                        <thead class="thead-primary" id="table-header">
                                            <tr>
                                                <th>NO.</th>
                                                <th>Produk Diskon</th>
                                                <th>Jenis Diskon</th>
                                                <th>Nilai Diskon</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Status</th>
                                                <th><strong>Aksi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody id="data-table-body">
                                            <?php $no = 1; ?>

                                            <!-- Diskon Produk -->
                                            <?php foreach ($diskon_produk as $data): ?>
                                                <tr class="data-row" data-jenis="produk">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['nama_produk'] ?></td>
                                                    <td><?= $data['jenis_diskon'] ?></td>
                                                    <td><?= $data['nilai_diskon'] ?></td>
                                                    <td><?= $data['tgl_mulai'] ?></td>
                                                    <td><?= $data['tgl_selesai'] ?></td>
                                                    <td><?= $data['status'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#editDiskonProduk<?= $data['id_diskon_produk'] ?>"
                                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"
                                                                onclick="deleteDiskonProduk(<?= $data['id_diskon_produk'] ?>)"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php $no = 1; ?>
                                            <!-- Diskon Paket -->
                                            <?php foreach ($diskon_paket as $data): ?>
                                                <tr class="data-row" data-jenis="paket">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['nama'] ?></td>
                                                    <td><?= $data['jenis_diskon'] ?></td>
                                                    <td><?= $data['nilai_diskon'] ?></td>
                                                    <td><?= $data['jumlah_beli'] ?></td>
                                                    <td><?= $data['jumlah_bonus'] ?></td>
                                                    <td><?= $data['tgl_mulai'] ?></td>
                                                    <td><?= $data['tgl_selesai'] ?></td>
                                                    <td><?= $data['status'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#editDiskonPaket<?= $data['id_diskon_paket'] ?>"
                                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"
                                                                onclick="deleteDiskonPaket(<?= $data['id_diskon_paket'] ?>)"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php $no = 1; ?>
                                            <!-- Diskon Musiman -->
                                            <?php foreach ($diskon_musiman as $data): ?>
                                                <tr class="data-row" data-jenis="musiman">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['nama_event'] ?></td>
                                                    <td><?= $data['jenis_diskon'] ?></td>
                                                    <td><?= $data['total_min_belanja'] ?></td>
                                                    <td><?= $data['nilai_diskon'] ?></td>
                                                    <td><?= $data['tgl_mulai'] ?></td>
                                                    <td><?= $data['tgl_selesai'] ?></td>
                                                    <td><?= $data['status'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#editDiskonMusiman<?= $data['id_diskon_musiman'] ?>"
                                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"
                                                                onclick="deleteDiskonMusiman(<?= $data['id_diskon_musiman'] ?>)"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            <?php $no = 1; ?>
                                            <!-- Diskon Member -->
                                            <?php foreach ($diskon_member as $data): ?>
                                                <tr class="data-row" data-jenis="member">
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $data['type'] ?></td>
                                                    <td><?= $data['poin_min'] ?></td>
                                                    <td><?= $data['jenis_diskon'] ?></td>
                                                    <td><?= $data['nilai_diskon'] ?></td>
                                                    <td><?= $data['tgl_mulai'] ?></td>
                                                    <td><?= $data['tgl_selesai'] ?></td>
                                                    <td><?= $data['status'] ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#editDiskonMember<?= $data['id_diskon_member'] ?>"
                                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                    class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"
                                                                onclick="deleteDiskonMember(<?= $data['id_diskon_member'] ?>)"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <script>
                            function updateTableHeader(jenis) {
                                const tableHeader = document.getElementById('table-header');
                                let headerHTML = '';

                                switch (jenis) {
                                    case 'produk':
                                        headerHTML = `<th>NO.</th><th>Produk Diskon</th><th>Jenis Diskon</th><th>Nilai Diskon</th>
                                            <th>Tanggal Mulai</th><th>Tanggal Selesai</th><th>Status</th><th><strong>Aksi</strong></th>`;
                                        break;
                                    case 'paket':
                                        headerHTML = `<th>NO.</th>
                                                      <th>Nama Paket</th>
                                                      <th>Jenis Diskon</th>
                                                      <th>Nilai Diskon</th>
                                                      <th>Jumlah Beli</th>
                                                      <th>Jumlah Bonus</th>
                                                      <th>Tanggal Mulai</th>
                                                      <th>Tanggal Selesai</th>
                                                      <th>Status</th>
                                                      <th><strong>Aksi</strong></th>`;
                                        break;
                                    case 'musiman':
                                        headerHTML = `<th>NO.</th>
                                                    <th>Nama Event</th>
                                                    <th>Jenis Diskon</th>
                                                    <th>Minimal Belanja</th>
                                                    <th>Nilai Diskon</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Status</th>
                                                    <th><strong>Aksi</strong></th>`;
                                        break;
                                    case 'member':
                                        headerHTML = `<th>NO.</th>
                                                    <th>Type</th>
                                                    <th>Poin Minimum</th>
                                                    <th>Jenis Diskon</th>
                                                    <th>Nilai Diskon</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Status</th>
                                                    <th><strong>Aksi</strong></th>`;
                                        break;
                                    default:
                                        headerHTML = `<th>NO.</th><th>Produk Diskon</th><th>Jenis Diskon</th><th>Nilai Diskon</th>
                                            <th>Tanggal Mulai</th><th>Tanggal Selesai</th><th>Status</th><th><strong>Aksi</strong></th>`;
                                }
                                tableHeader.innerHTML = headerHTML;
                            }

                            function filterData(jenis, button) {
                                updateTableHeader(jenis);

                                const rows = document.querySelectorAll('.data-row');
                                rows.forEach(row => {
                                    if (row.getAttribute('data-jenis') === jenis || jenis === '') {
                                        row.style.display = '';
                                    } else {
                                        row.style.display = 'none';
                                    }
                                });

                                const buttons = document.querySelectorAll('.menu .btn');
                                buttons.forEach(btn => {
                                    btn.classList.remove('active', 'btn-primary');
                                    btn.classList.add('btn-outline-primary');
                                });

                                button.classList.add('active', 'btn-primary');
                                button.classList.remove('btn-outline-primary');

                                const tambahDataBtn = document.getElementById('tambahDataBtn');
                                switch (jenis) {
                                    case 'produk':
                                        tambahDataBtn.setAttribute('data-bs-target', '#tambahDataProduk');
                                        break;
                                    case 'paket':
                                        tambahDataBtn.setAttribute('data-bs-target', '#tambahDataPaket');
                                        break;
                                    case 'musiman':
                                        tambahDataBtn.setAttribute('data-bs-target', '#tambahDataMusiman');
                                        break;
                                    case 'member':
                                        tambahDataBtn.setAttribute('data-bs-target', '#tambahDataMember');
                                        break;
                                }
                            }
                        </script>

                        <!-- Modal Edit Diskon Produk -->
                        <!-- Edit Form for Diskon Produk -->
                        <?php foreach ($diskon_produk as $data): ?>
                            <div class="modal fade" id="editDiskonProduk<?= $data['id_diskon_produk'] ?>" tabindex="-1"
                                aria-labelledby="editDiskonProdukLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editDiskonProdukLabel">Edit Data Diskon Produk</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editDataFormProduk<?= $data['id_diskon_produk'] ?>" method="post"
                                                action="<?= base_url('Edit_diskon_produk/' . $data['id_diskon_produk']) ?>"
                                                enctype="multipart/form-data">
                                                <input type="hidden" name="id_diskon_produk"
                                                    value="<?= $data['id_diskon_produk'] ?>">

                                                <div class="mb-3">
                                                    <label for="productSearchEdit<?= $data['id_diskon_produk'] ?>"
                                                        class="form-label">Pilih Produk</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text"
                                                            id="productSearchEdit<?= $data['id_diskon_produk'] ?>"
                                                            placeholder="Cari produk..."
                                                            onkeyup="searchProducts(this, 'resultsEdit<?= $data['id_diskon_produk'] ?>')"
                                                            class="form-control" value="<?= $data['nama_produk'] ?>">
                                                    </div>
                                                    <div id="resultsEdit<?= $data['id_diskon_produk'] ?>"
                                                        class="search-results-container"
                                                        style="border: 1px solid #ccc; padding: 10px; display: none;">
                                                        <!-- Search results will be populated here -->
                                                    </div>
                                                    <div class="produk" style="border: 1px solid #ccc; padding: 10px;">
                                                        <ul id="selectedProductsListEdit<?= $data['id_diskon_produk'] ?>">
                                                            <li>
                                                                <?= $data['nama_produk'] ?>
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="removeProduct(this, 'selectedProductsListEdit<?= $data['id_diskon_produk'] ?>')">Remove</button>
                                                            </li>
                                                        </ul>
                                                        <input type="hidden" id="id_produk_edit" name="id_produk"
                                                            value="<?= $data['id_produk'] ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="jenis_diskon_edit" class="form-label">Pilih Jenis
                                                        Diskon</label>
                                                    <select name="jenis_diskon" id="jenis_diskon_edit" class="form-control"
                                                        required>
                                                        <option value="">Pilih Jenis Diskon</option>
                                                        <option value="persentase" <?= $data['jenis_diskon'] == 'persentase' ? 'selected' : '' ?>>
                                                            Persentase</option>
                                                        <option value="potongan_nominal"
                                                            <?= $data['jenis_diskon'] == 'potongan_nominal' ? 'selected' : '' ?>>Potongan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nilai_diskon_produk_edit" class="form-label">Nilai
                                                        Diskon</label>
                                                    <input type="number" class="form-control" id="nilai_diskon_produk_edit"
                                                        name="nilai_diskon" placeholder="Masukkan nilai diskon"
                                                        value="<?= $data['nilai_diskon'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_mulai_produk_edit" class="form-label">Tanggal
                                                        Mulai</label>
                                                    <input type="date" class="form-control" id="tgl_mulai_produk_edit"
                                                        name="tgl_mulai" value="<?= $data['tgl_mulai'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tgl_selesai_produk_edit" class="form-label">Tanggal
                                                        Selesai</label>
                                                    <input type="date" class="form-control" id="tgl_selesai_produk_edit"
                                                        name="tgl_selesai" value="<?= $data['tgl_selesai'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status_edit" class="form-label">Status</label>
                                                    <select name="status" id="status_edit" class="form-control" required>
                                                        <option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                                        <option value="tidak_aktif" <?= $data['status'] == 'tidak_aktif' ? 'selected' : '' ?>>Tidak
                                                            Aktif</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Modal Edit Diskon Paket -->
                        <?php foreach ($diskon_paket as $data): ?>
                            <div class="modal fade" id="editDiskonPaket<?= $data['id_diskon_paket'] ?>" tabindex="-1"
                                role="dialog" aria-labelledby="editDiskonPaketLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editDiskonPaketLabel">Edit Diskon Paket</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('Edit_diskon_paket/' . $data['id_diskon_paket']) ?>"
                                                method="post">
                                                <input type="hidden" name="id_diskon_paket"
                                                    value="<?= $data['id_diskon_paket'] ?>">

                                                <div class="form-group">
                                                    <label for="nama">Nama Paket</label>
                                                    <input type="text" class="form-control" name="nama"
                                                        value="<?= $data['nama'] ?>" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="productSearchEdit<?= $data['id_diskon_paket'] ?>"
                                                        class="form-label">Pilih
                                                        Produk</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="id_produk"
                                                            id="productSearchEdit<?= $data['id_diskon_paket'] ?>"
                                                            placeholder="Cari produk..."
                                                            onkeyup="searchProducts(this, 'resultsEdit<?= $data['id_diskon_paket'] ?>')"
                                                            class="form-control"
                                                            value="<?= isset($data['nama_produk']) ? $data['nama_produk'] : '' ?>">
                                                    </div>
                                                    <div id="resultsEdit<?= $data['id_diskon_paket'] ?>"
                                                        class="search-results-container"
                                                        style="border: 1px solid #ccc; padding: 10px; display: none;">
                                                        <!-- Search results will be populated here -->
                                                    </div>
                                                    <div class="produk" style="border: 1px solid #ccc; padding: 10px;">
                                                        <ul id="selectedProductsListEdit<?= $data['id_diskon_paket'] ?>">
                                                            <ul
                                                                id="selectedProductsListEdit<?= $data['id_diskon_paket'] ?>">
                                                                <?php if (!empty($data['produk'])): ?>
                                                                    <?php foreach ($data['produk'] as $item): ?>
                                                                        <li data-product-id="<?= $item['id_produk'] ?>">
                                                                            <?= $item['nama_produk'] ?>
                                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                                onclick="removeProduct(this, 'selectedProductsListEdit<?= $data['id_diskon_paket'] ?>')">Remove</button>
                                                                            <input type="hidden" name="id_produk[]"
                                                                                value="<?= $item['id_produk'] ?>" required>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <li>Produk tidak ditemukan</li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jenis_diskon">Jenis Diskon</label>
                                                    <input type="text" class="form-control" name="jenis_diskon"
                                                        value="<?= $data['jenis_diskon'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nilai_diskon">Nilai Diskon</label>
                                                    <input type="number" class="form-control" name="nilai_diskon"
                                                        value="<?= $data['nilai_diskon'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jumlah_beli">Jumlah Beli</label>
                                                    <input type="number" class="form-control" name="jumlah_beli"
                                                        value="<?= $data['jumlah_beli'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jumlah_bonus">Jumlah Bonus</label>
                                                    <input type="number" class="form-control" name="jumlah_bonus"
                                                        value="<?= $data['jumlah_bonus'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                                    <input type="date" class="form-control" name="tgl_mulai"
                                                        value="<?= $data['tgl_mulai'] ?>" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tgl_selesai">Tanggal Selesai</label>
                                                    <input type="date" class="form-control" name="tgl_selesai"
                                                        value="<?= $data['tgl_selesai'] ?>" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="status_edit" class="form-label">Status</label>
                                                    <select name="status" id="status_edit" class="form-control" required>
                                                        <option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                                        <option value="tidak_aktif" <?= $data['status'] == 'tidak_aktif' ? 'selected' : '' ?>>Tidak
                                                            Aktif</option>
                                                    </select>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Modal Edit Diskon Musiman -->
                        <?php foreach ($diskon_musiman as $data): ?>
                            <div class="modal fade" id="editDiskonMusiman<?= $data['id_diskon_musiman'] ?>" tabindex="-1"
                                role="dialog" aria-labelledby="editDiskonMusimanLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editDiskonMusimanLabel">Edit Diskon Musiman</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="<?= base_url('Edit_diskon_musiman/') . $data['id_diskon_musiman'] ?>"
                                                method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_diskon_musiman"
                                                    value="<?= $data['id_diskon_musiman'] ?>">
                                                <div class="form-group">
                                                    <label for="nama_event">Nama Event</label>
                                                    <input type="text" class="form-control" name="nama_event"
                                                        value="<?= $data['nama_event'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_diskon">Jenis Diskon</label>
                                                    <input type="text" class="form-control" name="jenis_diskon"
                                                        value="<?= $data['jenis_diskon'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_diskon">Minimal Belanja</label>
                                                    <input type="text" class="form-control" name="total_min_belanja"
                                                        value="<?= $data['total_min_belanja'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai_diskon">Nilai Diskon</label>
                                                    <input type="number" class="form-control" name="nilai_diskon"
                                                        value="<?= $data['nilai_diskon'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                                    <input type="date" class="form-control" name="tgl_mulai"
                                                        value="<?= $data['tgl_mulai'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_selesai">Tanggal Selesai</label>
                                                    <input type="date" class="form-control" name="tgl_selesai"
                                                        value="<?= $data['tgl_selesai'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status_edit" class="form-label">Status</label>
                                                    <select name="status" id="status_edit" class="form-control" required>
                                                        <option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                                        <option value=" tidak_aktif" <?= $data['status'] == 'tidak_aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Modal Edit Diskon Member -->
                        <?php foreach ($diskon_member as $data): ?>
                            <div class="modal fade" id="editDiskonMember<?= $data['id_diskon_member'] ?>" tabindex="-1"
                                role="dialog" aria-labelledby="editDiskonMemberLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editDiskonMemberLabel">Edit Diskon Member</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="<?= base_url('Edit_diskon_member/') . $data['id_diskon_member'] ?>"
                                                method="post">
                                                <input type="hidden" name="id_diskon_member"
                                                    value="<?= $data['id_diskon_member'] ?>">
                                                <div class="form-group">
                                                    <label for="jenis_diskon">Type</label>
                                                    <select name="type" id="status_edit" class="form-control" required>
                                                        <option value="baru" <?= $data['status'] == 'baru' ? 'selected' : '' ?>>Baru</option>
                                                        <option value=" biasa" <?= $data['status'] == 'biasa' ? 'selected' : '' ?>>Biasa</option>
                                                        <option value=" lama" <?= $data['status'] == 'lama' ? 'selected' : '' ?>>Lama</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_diskon">Poin Minimum</label>
                                                    <input type="text" class="form-control" name="poin_min"
                                                        value="<?= $data['poin_min'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_diskon">Jenis Diskon</label>
                                                    <input type="text" class="form-control" name="jenis_diskon"
                                                        value="<?= $data['jenis_diskon'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai_diskon">Nilai Diskon</label>
                                                    <input type="number" class="form-control" name="nilai_diskon"
                                                        value="<?= $data['nilai_diskon'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                                    <input type="date" class="form-control" name="tgl_mulai"
                                                        value="<?= $data['tgl_mulai'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_selesai">Tanggal Selesai</label>
                                                    <input type="date" class="form-control" name="tgl_selesai"
                                                        value="<?= $data['tgl_selesai'] ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="status_edit" class="form-label">Status</label>
                                                    <select name="status" id="status_edit" class="form-control" required>
                                                        <option value="aktif" <?= $data['status'] == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                                                        <option value=" tidak_aktif" <?= $data['status'] == 'tidak_aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
            <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021
            </p>
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
    <!-- <script src="vendor/global/global.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
     -->
    <script>
        function searchProducts(inputElement, resultsId) {
            const query = inputElement.value.trim();
            const resultsContainer = document.getElementById(resultsId);

            if (query.length < 2) {
                resultsContainer.style.display = 'none';
                return;
            }

            fetch(`<?= base_url('search_products/') ?>?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    displaySearchResults(data, resultsId);
                })
                .catch(error => console.error('Error fetching search results:', error));
        }

        function displaySearchResults(products, resultsId) {
            const resultsContainer = document.getElementById(resultsId);
            resultsContainer.innerHTML = ''; // Clear previous results

            let listId = resultsId.startsWith("results")
                ? resultsId.replace("results", "selectedProductsList")
                : `selectedProductsList${resultsId.charAt(resultsId.length - 1)}`;

            if (products.length > 0) {
                resultsContainer.style.display = 'block'; // Show results
                products.forEach(product => {
                    const productElement = document.createElement('div');
                    productElement.className = 'product-item';
                    productElement.innerHTML = `
                <h5>${product.nama_produk}</h5>
                <p>Price: ${product.harga_jual}</p>
                <button class="btn btn-success btn-sm" type="button" onclick="addProduct('${product.id_produk}', '${product.nama_produk}', '${listId}')">
                    <i class="fa fa-plus"></i> Add
                </button>
            `;
                    resultsContainer.appendChild(productElement);
                });
            } else {
                resultsContainer.style.display = 'none'; // Hide if no results
            }
        }

        function addProduct(productId, productName, listId) {
            const selectedProductsList = document.getElementById(listId);

            // Cek apakah produk sudah ada di dalam daftar
            const existingProduct = Array.from(selectedProductsList.children).find(li => li.dataset.productId === productId);
            if (existingProduct) {
                alert("Produk sudah ditambahkan!");
                return;
            }

            // Hapus pesan awal jika ada
            const emptyMessage = selectedProductsList.querySelector(".empty-message");
            if (emptyMessage) {
                emptyMessage.remove();
            }

            // Buat elemen <li> untuk menampilkan produk yang dipilih
            const productElement = document.createElement("li");
            productElement.dataset.productId = productId;
            productElement.innerHTML = `${productName} 
                                 <button class="btn btn-danger btn-sm" onclick="removeProduct(this, '${listId}')">Remove</button>`;

            // Tambahkan elemen <li> ke dalam <ul>
            selectedProductsList.appendChild(productElement);

            // Update hidden input
            updateHiddenInput(selectedProductsList);
        }

        function updateHiddenInput(selectedProductsList) {
            // Ambil semua item dari daftar produk yang dipilih
            const selectedItems = selectedProductsList.querySelectorAll('li');
            const ids = [];

            // Loop melalui setiap item dan ambil ID-nya
            selectedItems.forEach(item => {
                const productId = item.dataset.productId; // Gunakan dataset
                if (productId) {
                    ids.push(productId);
                }
            });

            // Hapus semua input tersembunyi yang ada
            const hiddenInputsContainer = selectedProductsList.closest('.produk');
            const existingHiddenInputs = hiddenInputsContainer.querySelectorAll("input[name='id_produk[]']");
            existingHiddenInputs.forEach(input => input.remove());

            // Buat input tersembunyi baru untuk setiap ID produk
            ids.forEach(id => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'id_produk[]';
                input.value = id;
                hiddenInputsContainer.appendChild(input);
            });

            console.log("Updated hidden input values:", ids);
        }

        function updateHiddenInput(selectedProductsList) {
            // Ambil semua item dari daftar produk yang dipilih
            const selectedItems = selectedProductsList.querySelectorAll('li');
            const ids = [];

            // Loop melalui setiap item dan ambil ID-nya
            selectedItems.forEach(item => {
                const productId = item.dataset.productId; // Gunakan dataset
                if (productId) {
                    ids.push(productId);
                }
            });

            // Update input tersembunyi dengan ID produk yang dipilih
            const hiddenInput = selectedProductsList.closest('.produk').querySelector("input[type='hidden']");
            hiddenInput.value = ids.join(','); // Jika Anda ingin menyimpan beberapa ID, pisahkan dengan koma
            console.log("Updated hidden input value:", hiddenInput.value);
        }

        function removeProduct(button, listId) {
            const selectedProductsList = document.getElementById(listId);
            const productElement = button.parentElement;
            selectedProductsList.removeChild(productElement);

            // Update hidden input
            const hiddenInput = selectedProductsList.closest('.produk').querySelector("input[type='hidden']");
            if (hiddenInput) {
                let currentValues = hiddenInput.value ? hiddenInput.value.split(',') : [];
                const productId = productElement.dataset.productId;
                currentValues = currentValues.filter(id => id !== productId); // Remove the deleted product
                hiddenInput.value = currentValues.join(',');
            }

            // If no products are left, add back the "no products selected" message
            if (selectedProductsList.children.length === 0) {
                const emptyMessage = document.createElement("p");
                emptyMessage.className = "empty-message";
                emptyMessage.textContent = "Tidak ada produk yang dipilih.";
                selectedProductsList.appendChild(emptyMessage);
            }
        }

    </script>


    <script src="<?= base_url("assets/sweetalert2/dist/") ?>sweetalert2.all.min.js"></script>
    <?= $this->session->flashdata('success') ?>
    <script>
        function deleteDiskonProduk(id) {
            Swal.fire({
                title: "Anda yakin ?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, saya yakin"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= base_url('Delete_diskon_produk/') ?>" + id;
                }
            });
        }
        function deleteDiskonPaket(id) {
            Swal.fire({
                title: "Anda yakin ?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, saya yakin"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= base_url('Delete_diskon_paket/') ?>" + id;
                }
            });
        }
        function deleteDiskonMusiman(id) {
            Swal.fire({
                title: "Anda yakin ?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, saya yakin"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= base_url('Delete_diskon_musiman/') ?>" + id;
                }
            });
        }
        function deleteDiskonMember(id) {
            Swal.fire({
                title: "Anda yakin ?",
                text: "Data yang sudah dihapus tidak bisa dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, saya yakin"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?= base_url('Delete_diskon_member/') ?>" + id;
                }

            }
            );
        }
    </script>



    // <!-- Required vendors -->
    <script src="<?= base_url("assets/") ?>vendor/global/global.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url("assets/") ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="<?= base_url("assets/") ?>vendor/apexchart/apexchart.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="<?= base_url("assets/") ?>vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="<?= base_url("assets/") ?>js/dashboard-1.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/owl-carousel/owl.carousel.js"></script>

    <script src="<?= base_url("assets/") ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/custom.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/dlabnav-init.js"></script>
    <script src="<?= base_url("assets/") ?>js/demo.js"></script>
    <script src="<?= base_url("assets/") ?>js/styleSwitcher.js"></script>

    <!-- //init datatable -->
    <script>
        $('#example').DataTable({
            createdRow: function (row, data, index) {
                $(row).addClass('selected')
            },
            language: {
                paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>'
                }
            }
        });
    </script>

    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function () {
            setTimeout(function () {
                cardsCenter();
            }, 1000);
        });
        jQuery(document).ready(function () {
            setTimeout(function () {
                dlabSettingsOptions.version = 'light';
                new dlabSettings(dlabSettingsOptions);
            }, 1500)
        });

    </script>
</body>

</html>