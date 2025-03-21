﻿<!DOCTYPE html>
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
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/') ?>images/favicon.png">
	<link href="<?= base_url('assets/vendor/jquery-nice-select/css/') ?>nice-select.css" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/owl-carousel/') ?>owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
	<link href="<?= base_url('assets/css/') ?>style.css" rel="stylesheet">

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
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
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
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="<?= base_url('assets/') ?>images/avatar/1.jpg"
													class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
									<li class="dlab-chat-user">
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
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
											View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to
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
										<img src="<?= base_url('assets/images/avatar/') ?>2.jpg"
											class="rounded-circle user_img_msg" alt="">
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
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card tryal-gradient">
											<div class="card-body tryal row">
												<div class="col-xl-7 col-sm-6">
													<h2>Manage your project in one touch</h2>
													<span>Let Fillow manage your project automatically with our best AI
														systems </span>
													<a href="javascript:void(0);"
														class="btn btn-rounded  fs-18 font-w500">Try Free Now</a>
												</div>
												<div class="col-xl-5 col-sm-6">
													<img src="images/chart.png" alt="" class="sd-shape">
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
												<div class="d-flex align-items-center project-tab mb-2">
													<div class="card-tabs mt-3 mt-sm-0 mb-3 ">
														<ul class="nav nav-tabs" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab"
																	href="#monthly" role="tab">Monthly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Weekly"
																	role="tab">Weekly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Today"
																	role="tab">Today</a>
															</li>
														</ul>
													</div>
													<div class="dropdown ms-2">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div
													class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div
															class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1"
																data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">Total Projects</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D">
																	</circle>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">246</h4>
																<span class="fs-16 font-w400 d-block">On Going</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7">
																	</circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">28</h4>
																<span class="fs-16 font-w400 d-block">Unfinished</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="monthly">
														<div id="chartBar" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Weekly">
														<div id="chartBar1" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Today">
														<div id="chartBar2" class="chartBar"></div>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<label class="form-check-label font-w400 fs-16 mb-0"
														for="flexSwitchCheckChecked1">Number</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox"
															id="flexSwitchCheckChecked1" checked="">

													</div>
													<label class="form-check-label font-w400 fs-16 mb-0 ms-3"
														for="flexSwitchCheckChecked2">Analytics</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox"
															id="flexSwitchCheckChecked2" checked="">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
															</circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Recent Emails</h4>
													<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);"
														class="btn btn-outline-primary btn-rounded fs-18">View More</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-success">K</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project
																management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="assets/images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram
															</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
															<div class="final-badge">
																<span class="badge text-black border"><i
																		class="far fa-file-alt me-3"></i>Master_file.fig</span>
																<span class="badge text-black border"><i
																		class="fas fa-image me-2"></i>CoverPreview.jpg</span>
																<span class="badge border bgl-primary font-w700">4 files
																	more</span>
															</div>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-warning">G</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Weekly Design Inspirations by
																Envato</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="assets/images/profile/small/pic8.jpg" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project
																management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4 pb-0 justify-content-between">
														<div>
															<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients
															</h4>
															<div class="d-flex align-items-center">
																<h2 class="fs-32 font-w700 mb-0">68</h2>
																<span class="d-block ms-4">
																	<svg width="21" height="11" viewbox="0 0 21 11"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z"
																			fill="#09BD3C"></path>
																	</svg>
																	<small
																		class="d-block fs-16 font-w400 text-success">+0,5%</small>
																</span>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body px-4 pb-0">
														<h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated"
																style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only">45% Complete</span>
															</div>
														</div>
														<div
															class="d-flex align-items-end mt-2 pb-3 justify-content-between">
															<span>76 left from target</span>
															<h4 class="mb-0">42</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">562</h2>
																<span class="fs-18 font-w500 d-block">Total
																	Clients</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-danger">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">892</h2>
																<span class="fs-18 font-w500 d-block">New
																	Projects</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-success">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress
															<small class="text-success">70%</small></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0">
														<div>
															<h4 class="fs-20 font-w700">Email Categories</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4 class="fs-18 font-w600">Legend</h4>
														</div>
														<div>
															<div
																class="d-flex align-items-center justify-content-between mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#886CC0"></rect>
																	</svg>
																	Primary (27%)
																</span>
																<span class="fs-18 font-w600">763</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#26E023"></rect>
																	</svg>
																	Promotion (11%)
																</span>
																<span class="fs-18 font-w600">321</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#61CFF1"></rect>
																	</svg>
																	Forum (22%)
																</span>
																<span class="fs-18 font-w600">69</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FFDA7C"></rect>
																	</svg>
																	Socials (15%)
																</span>
																<span class="fs-18 font-w600">154</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FF86B1"></rect>
																	</svg>
																	Spam (25%)
																</span>
																<span class="fs-18 font-w600">696</span>
															</div>
														</div>

													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Update
															Progress</a>

													</div>
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="fs-20 font-w700">Important Projects</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body pb-0">
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/big-wind.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Big Wind</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Optimization Dashboard Page
																for indexing in Google</h4>
															<div class="projects">
																<span
																	class="badge bgl-warning text-warning font-w700 me-3">SEO</span>
																<span
																	class="badge bgl-danger text-danger font-w700">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/circle-hunt.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Circle Hunt</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Redesign Landing Page
																Website for Company Profile</h4>
															<div class="projects">
																<span
																	class="badge bgl-primary text-primary font-w700 me-3">UI/UX</span>
																<span
																	class="badge bgl-danger text-danger font-w700">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Pin
															other projects</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Messages</h4>
													<span>Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);"
														class="btn btn-primary btn-rounded">+New Messages</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3 w-100 ">
															<h4 class="fs-18 font-w600">Maren Rosser</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Hei, dont forget to clear server
																	cache!</span>
																<span class="me-4 fs-12">25min ago</span>
															</div>
														</div>

													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box">
															<img src="images/profile/small/pic7.jpg" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Kaiya Bergson</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">I remember that project due is
																	tomorrow.</span>
																<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="images/profile/small/pic4.jpg" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Ruben Press</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Ok sir. I will fix it as soon as
																	possible</span>
																<span class="me-4 fs-12">December 12th, 2020 10:24
																	AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="images/profile/small/pic3.jpg" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Cristofer Torff</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">Maybe we should schedule that
																	meeting</span>
																<span class="me-4 fs-12">December 12th, 2020 10:24
																	AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="images/profile/small/pic5.jpg" alt="">
														</div>
														<div class="ms-3 w-100">
															<h4 class="fs-18 font-w600">Ann Rosser</h4>
															<div class="d-flex justify-content-between">
																<span class="me-auto">I dont’t know where that files
																	saved dude.</span>
																<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
															</div>
														</div>
													</div>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
										</div>
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
				<p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
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
	<script src="<?= base_url("assets/") ?>/vendor/global/global.min.js"></script>
	<script src="<?= base_url("assets/") ?>/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="<?= base_url("assets/") ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="<?= base_url("assets/") ?>/vendor/apexchart/apexchart.js"></script>

	<script src="<?= base_url("assets/") ?>/vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="<?= base_url("assets/") ?>/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="<?= base_url("assets/") ?>/js/dashboard/dashboard-1.js"></script>

	<script src="<?= base_url("assets/") ?>/vendor/owl-carousel/owl.carousel.js"></script>

	<script src="<?= base_url("assets/") ?>/js/custom.min.js"></script>
	<script src="<?= base_url("assets/") ?>/js/dlabnav-init.js"></script>
	<script src="<?= base_url("assets/") ?>/js/demo.js"></script>
	<script src="<?= base_url("assets/") ?>/js/styleSwitcher.js"></script>
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

	</script>

</body>

</html>