<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="msapplication-TitleImage" content="images/assets/ogg.png">
		<meta name="keywords" content="Data Science, Analytics, Data, sass, software company">
		<meta name="description" content="Rezlytix">
      	<meta property="og:site_name" content="Rezlytix">
      	<meta property="og:url" content="https://www.rezlytix.com/">
      	<meta property="og:type" content="website">
      	<meta property="og:title" content="Rezlytix">
		<meta name='og:image' content='images/assets/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#913BFF">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#913BFF">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">
		<title>Demo</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/logo/rezlytix_icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
		<style>
		::-webkit-scrollbar-thumb {
    background: #029ddf !important;
   
}
		    .fade.in{
   opacity:1;
}
.alert {
   
    padding: 0.3rem 1rem !important;
    
  border: none !important;
    
}

@media only screen and (max-width: 600px) {
  #service1,#service2,#service3,#service4{
 display:block;
}
 #label-1,#label-2,#label-3,#label-4{
 display:block !important;
 margin-left:80px;
 margin-top:-22px;
}
}
		</style>
		
	</head>

	<body>
		<div class="main-page-wrapper">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/logo/rezlytix_icon.png" alt="" class="m-auto d-block" width="38"></div>
							<div class="txt-loading mt-2">
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="E" class="letters-loading">
									E
								</span>
								<span data-text-preloader="Z" class="letters-loading">
									Z
								</span>
								<span data-text-preloader="L" class="letters-loading">
									L
								</span>
								<span data-text-preloader="Y" class="letters-loading">
									Y
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="I" class="letters-loading">
									I
								</span>
								<span data-text-preloader="X" class="letters-loading">
									X
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>


					<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
			<header class="theme-main-menu theme-menu-two" style="padding-top: 25px;">
				<div class="inner-content">
					<div class="container d-flex align-items-center text-center justify-content-between">
						<div class="logo order-lg-0" style="width: 100%;"><a href="index.html" class="d-block text-center"><img src="images/logo/rezlytix logo-01.png" class="mx-auto" alt="" width="200"></a></div>
					</div>
				</div> <!-- /.inner-content -->
				<hr/>
			</header> <!-- /.theme-main-menu -->
			
			

			<!-- 
			=============================================
				Contact Section One
			============================================== 
			-->
			<div class="pt-100 mb-170 lg-mb-120 ">
				<div class="mt-100 lg-mt-70">
					<div class="container">
						<div class="row gx-xxl-5">
							<div class="col-lg-6 d-flex">
								<div class="demo-form">
                                    <div class="form-style-one">
                                         <?php
if(isset($_GET["success"]) && !empty($_GET["success"])){
                            if($_GET["success"]==3){
              echo '<div class="alert alert-danger alert-dismissible fade in" style="background:#02a823;color: #fff;" id="subscription-alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="float:right" >&times;</a>
    <span style="margin-right:7px">&#10003;</span> Your response has been submitted
  </div>';
                            }
                          }

?>
                                        <form action="demo1.php" method="POST" id="contact-form"  data-toggle="validator">
                                            <div class="messages"></div>
                                            <div class="row controls">
                                                
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <label>Full Name*</label>
                                                        <input type="text" placeholder="Please enter your full name" name="name" required="required" data-error="Full name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <label>Company Name*</label>
                                                        <input type="text" placeholder="Please enter the company name" name="company_name" required="required" data-error="Company name is required">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <label>Work Email*</label>
                                                        <input type="email" placeholder="Please enter your work email" name="email" required="required" data-error="Work email is required">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
												<div class="col-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <label>Position</label>
                                                        <input type="text" placeholder="Please enter your position in the company" name="position">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <label>Phone Number</label>
                                                        <input type="number" name="phone_no" placeholder="Enter your phone number">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group-meta form-group mb-30">
                                                        <p style="margin-bottom:0;color:  rgba(0, 40, 78, 0.5);">Please select the services you want to subscribe to:</p>
													  <input type="checkbox" id="service1" name="services[]" value="PROLYTIX" style="width:4%;margin-left: 8px;">
													  <label for="service1" id="label-1" style="position:relative;top: -25px;display: inline-block;padding: 7px;color:rgb(0 0 0 / 60%);">PROLYTIX</label>
													  <input type="checkbox" id="service2" name="services[]" value="STORM" style="width:4%;margin-left: 8px;">
													  <label for="service2" id="label-2" style="position:relative;top: -25px;display: inline-block;padding: 7px;color:rgb(0 0 0 / 60%)"> STORM 2.0</label>
													  <input type="checkbox" id="service3" name="services[]" value="WEDGE" style="width:4%;margin-left: 8px;">
													  <label for="service3" id="label-3" style="position:relative;top: -25px;display: inline-block;padding: 7px;color:rgb(0 0 0 / 60%)"> WEDGE</label>
													  <input type="checkbox" id="service4" name="services[]" value="STRIKE" style="width:4%;margin-left: 8px;">
													  <label for="service4" id="label-4" style="position:relative;top: -25px;display: inline-block;padding: 7px;color:rgb(0 0 0 / 60%)"> STRIKE</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="_captcha" value="false">
                                                <div class="col-12"><button class="btn-one ripple-btn submit">Request a demo</button></div>
                                            </div>
                                        </form>
                                    </div> <!-- /.form-style-one -->
                                </div>
							</div>

							<div class="col-lg-6 d-flex order-first">
								<div class=" mt-10 me-lg-4 md-mt-50 block-style-nine">
                                    <div class="title-style-one">
                                        <h3 class="main-title">Request a Rezlytix Business Demo</h3>
                                    </div>
                                        <p><strong>Fill out the form and one of our Rezlytix experts will give you a detailed demo of our services.</strong></p>
                                        <p style="margin-bottom: 0px;">A demo with rezlytix includes:</p>
                                        <ul class="">
                                            <li>A tour of Rezlytix services for you (How it works and how it can meet your needs)</li>
                                            <li>Pricing details and engagement models.</li>
                                            <li>A Q&A with our expert.</li>
                                        </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.contact-section-one -->





		

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<div class="footer-style-two theme-basic-footer">
				<div class="container">
					<div class="inner-wrapper">
						<div class="row">
							<div class="col-lg-3 footer-intro mb-40">
								<div class="logo"><a href="index.html"><img src="images/logo/rezlytix logo_white.png" alt=""
											width="200" style="margin-top:-38px;margin-left: -8px;"></a></div>
								
								<ul class="d-flex social-icon style-none">
									
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 mb-30">
								<h5 class="footer-title">Links</h5>
								<ul class="footer-nav-link style-none">
									<li><a href="index.html">Home</a></li>
									<li><a href="service.html">Deep Learning Products</a></li>
									<li><a href="about-us.html">About us</a></li>
									<li><a href="contact-us.php">Contact Us</a></li>
								</ul>
							</div>
							<!-- <div class="col-xl-2 col-md-3 col-sm-6 mb-30">
										<h5 class="footer-title">Legal</h5>
										<ul class="footer-nav-link style-none">
											<li><a href="faq.html">Terms of use</a></li>
											<li><a href="faq.html">Terms & conditions</a></li>
											<li><a href="faq.html">Privacy policy</a></li>
											<li><a href="faq.html">Cookie policy</a></li>
										</ul>
									</div> -->
							<div class="col-lg-3 col-md-3 col-sm-6 mb-30">
								<div class="newsletter ps-xl-5">
									<h5 class="footer-title">Address </h5>
									<p>2nd Floor, 39, Suite 425, NGEF Lane Indiranagar Bengaluru(Bangalore) Urban, Karnataka, 560038</p>
								</div> <!-- /.newsletter -->
		
								
							</div>
		
							<div class="col-lg-3 col-md-3 col-sm-6 mb-30">
								<div class="newsletter ps-xl-5">
									<h5 class="footer-title">Email</h5>
									<p>info@rezlytix.com</p>
								</div> <!-- /.newsletter -->
								
							</div>
						</div>
		
						<div class="bottom-footer">
							<div class="d-lg-flex justify-content-between align-items-center">
								<ul class="order-lg-1 pb-15 d-flex justify-content-center footer-nav style-none">
									<!-- <li><a href="faq.html">Privacy &amp; Terms.</a></li>
											<li><a href="faq.html">FAQ</a></li> -->
									
								</ul>
								<p class="copyright text-center order-lg-0 pb-15">Copyright @2022 Rezlytix inc.</p>
							</div>
						</div>
					</div> <!-- /.inner-wrapper -->
				</div>
			</div> <!-- /.footer-style-two -->


			<button class="scroll-top" style="background: #029ddf;">
				<i class="bi bi-arrow-up-short"></i>
			</button>
			
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- Slick Slider -->
		<script src="vendor/slick/slick.min.js"></script>
		<!-- js Counter -->
		<script src="vendor/jquery.counterup.min.js"></script>
		<script src="vendor/jquery.waypoints.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- validator js -->
    	<script src="vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
