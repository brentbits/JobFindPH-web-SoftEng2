<?php
	include 'class.php';
	$App->addBranch();
	$App->companyProfile();
    $userdetails = $App->get_userdata();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ableproadmin.com/bootstrap/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 15:13:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Employer Page</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Employer User <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="index.php" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label></label>
					</li>					
									
					<li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Main</span></a>
						<ul class="pcoded-submenu">
                            <li><a href="">Dashboards</a></li>
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Candidates</a></li>
							<li><a href="">Screened Candidates</a></li>
                            <li><a href="">Applications</a></li>
                            <li><a href="">Company Branches</a></li>
						</ul>
					</li>
																																																												
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Account</span></a>
						<ul class="pcoded-submenu">
                            <li><a href="employer_account_profile.php"><i class="fad fa-file-user"></i>Company Profile</a></li>	
                            <li><a href=""></i>Staff</a></li>			
                            <li><a href=""></i>Report Issue</a></li>									
							<li><a href="change-password.php"><i class="fas fa-key"></i>Change password</a></li>							
                            <li><a href="index.php"><i class="fas fa-power-off"></i>Logout</a></li>
                           
						</ul>
					</li>																																			
				</ul>												
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<h4>JobFindPH</h4>
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">					
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar.png" class="img-radius" alt="User-Profile-Image">
										<span>Employer User</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="" class="dropdown-item"><i class="feather icon-home"></i> Home</a></li>
										<li><a href="" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                        <li><a href="change-password.php" class="dropdown-item"><i class="fas fa-key"></i> Change Password</a></li>
                                        <li><a href="index.php" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/user/avatar.png" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
								<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
								<a class="dropdown-item" href="#"><i class="feather icon-film mr-2"></i> upload video</a>
								<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-100" src="assets/images/user/avatar.png" alt="User image">
											</div>
											<div class="overlay">
												<span>change</span>
											</div>
										</div>
										<div class="certificated-badge">
											<i class="fas fa-certificate text-c-blue bg-icon"></i>
											<i class="fas fa-check front-icon text-white"></i>
										</div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
										<a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
										<a class="dropdown-item" href="#"><i class="feather icon-shield mr-2"></i>Protact</a>
										<a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
									</div>
								</div>
							</div>
							<h5 class="mb-1">Employer User</h5>
							<p class="mb-2 text-muted">UI/UX Designer</p>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-globe mr-2 f-18"></i>www.phoenixcoded.net</a>
									<div class="clearfix"></div>
									<a href="mailto:demo@domain.com" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i>demo@domain.com</a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i>+1 9999-999-999</a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
										<div class="media-body">
											<p class="mb-0 text-muted">4289 Calvin Street</p>
											<p class="mb-0 text-muted">Baltimore, near MD Tower Maryland,</p>
											<p class="mb-0 text-muted">Maryland (21201)</p>
										</div>
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs profile-tabs nav-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-reset active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="feather icon-home mr-2"></i>Branches</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-reset" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather icon-user mr-2"></i>Company Profile</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-8 order-md-2">
				<div class="tab-content" id="myTabContent">
					
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="card">
							<!-- [Showing The company profile form] start -->
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Company details</h5>
								<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-det-edit" aria-expanded="false" aria-controls="pro-det-edit-1 pro-det-edit-2">
									<i class="feather icon-edit"></i>
								</button>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Company Name</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Contact Person</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Contact Phone</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Company Address</label>
										<div class="col-sm-9">
											<p class="mb-0 text-muted"></p>
											<p class="mb-0 text-muted"></p>
											<p class="mb-0 text-muted"></p>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Zip Code</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Industry Type</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Country</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Province</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">City</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Website URL</label>
										<div class="col-sm-9">
											
										</div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Company Description</label>
										<div class="col-sm-9">
											<p class="mb-0 text-muted"></p>
											<p class="mb-0 text-muted"></p>
											<p class="mb-0 text-muted"></p>
										</div>
									</div>
								</form>
							</div>
							<!-- [Showing The company profile form] end -->
							<!-- [Filling The company profile form] start -->
							<div class="card-body border-top pro-det-edit collapse " id="pro-det-edit-2">
								<form action="" method="post">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="companyName">Company Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Name" value="">
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="contactPerson">Contact Person</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="contactPerson" id="contactPerson" placeholder="Full Name" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="contact_phone">Contact Phone</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" name="contact_phone" id="contact_phone" placeholder="Company Phone" value="">
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="companyAddress">Company Address</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="companyAddress" id="companyAddress"> </textarea>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="zip_code">Zip Code</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" name="zip_code" id="zip_code" placeholder="" value="">
										</div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="industry_type">Industry Type</label>
										<div class="col-sm-9">
											<select class="form-control" id="exampleFormControlSelect1" name="industry_type" id="industry_type">
												<option>Software</option>
												<option>Others</option>
												<option selected>SELECT</option>
											</select>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="country">Country</label>
										<div class="col-sm-9">
											<select class="form-control" id="exampleFormControlSelect1" name="country" id="country">
												<option>Philippines</option>
												<option selected>SELECT</option>
											</select>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="province">Province</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="province" id="province" placeholder="" value="">
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="city">City</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="city" id="city" placeholder="" value="">
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="website_url">Website URL</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="website_url" id="website_url" placeholder="URL" value="">
										</div>
                                    </div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="description">Company Description</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="description" id="description"> </textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary" name="save">Save</button>
										</div>
									</div>
								</form>
							</div>
							<!-- [Filling The company profile form] end -->
						</div>
						
					</div>
					<!-- [Showing The form] start -->
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Add Branch Location</h5>
								<button type="button" class="btn btn-primary btn-sm rounded m-0 float-right" data-toggle="collapse" data-target=".pro-dont-edit" aria-expanded="false" aria-controls="pro-dont-edit-1 pro-dont-edit-2">
									<i class="feather icon-edit"></i>
								</button>
							</div>
							<div class="card-body border-top pro-dont-edit collapse show" id="pro-dont-edit-1">
								<form>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Branch Name</label>
										<div class="col-sm-9">
                                            
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Branch Phone</label>
										<div class="col-sm-9">
											
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder">Branch Address</label>
										<div class="col-sm-9">
											
										</div>
									</div>
									
								</form>
							</div>
							<!-- [Showing The form] end -->
							<!-- [Filling up The form] start -->
							<div class="card-body border-top pro-dont-edit collapse " id="pro-dont-edit-2">
								<form action="" method="post">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="branchName">Branch Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="branchName" id="branchName" placeholder="Branch Name" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="branchPhone">Branch Phone</label>
										<div class="col-sm-9">
											<input type="number" class="form-control" name="branchPhone" id="branchPhone" placeholder="Phone" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 col-form-label font-weight-bolder" for="branchAddress">Branch Address</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="branchAddress" id="branchAddress" placeholder="Address" required>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary" name="addbranch">Save</button>
										</div>
									</div>
								</form>
							</div>
							<!-- [Filling up The form] end -->
						</div>
                    </div>
				</div>
			</div>
		</div>
		<!-- profile body end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>



<!-- ekko-lightbox Js -->
<script src="assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="assets/js/plugins/lightbox.min.js"></script>
<script src="assets/js/pages/ac-lightbox.js"></script>
<script>
	// [ customer-scroll ] start
	var px = new PerfectScrollbar('.cust-scroll', {
		wheelSpeed: .5,
		swipeEasing: 0,
		wheelPropagation: 1,
		minScrollbarLength: 40,
	});
	// [ customer-scroll ] end
</script>
</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 15:25:08 GMT -->
</html>
<?php
include('footer.php');
?>