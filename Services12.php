<?php
session_start();

include('connect.php');
$services=$_POST['services'];
$_SESSION['services']=$services;
$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
if( $services=="Personal Care & Medical Lab"   ){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MedXol || Specialized HealthCare Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Dr PRO template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<?php include('menu.php');?>

	<br><br>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">This is MedXol</div>
							<div class="section_title"><h2>Welcome to our Solution</h2></div>
						</div>
						<div class="intro_text">
							<p>MedXol innovates to resolve your medical issues with flex.We bring Services/products to your doorstep. Our mission is to provide high quality home health care services to every individual at home with amazing discounts.
</p>
						</div>
						<div class="milestones">
							<div class="row milestones_row">
							
                                <!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="40+" data-sign-before="">0</div>
										<div class="milestone_text">Medicines Delivery</div>
									</div>
								</div>
                                
                                <!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="30+" data-sign-before="">0</div>
										<div class="milestone_text">Companions</div>
									</div>
								</div>
                                
                                <!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="30+" data-sign-before="">0</div>
										<div class="milestone_text">Meal Types</div>
									</div>
								</div>
                                
								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="20+" data-sign-before="">0</div>
										<div class="milestone_text">Labs</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="500+">0</div>
										<div class="milestone_text">Doctors</div>
									</div>
								</div>

								<!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="20+">0</div>
										<div class="milestone_text">Hospitals</div>
									</div>
								</div>
                                
                                <!-- Milestone -->
								<div class="col-md-4 milestone_col">
									<div class="milestone">
										<div class="milestone_counter" data-end-value="5+">0</div>
										<div class="milestone_text">Medical Stores</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title">Make an Appointment</div>
						
                        

    <form action="ServicesSuccess.php" method="post" class="intro_form" id="intro_form">
<!--                        <form action="ServicesSuccess.php" method="post" class="intro_form" id="intro_form">-->
							
                            
                            <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                
                                
                                
								<select id="category" name="category" class="intro_select intro_input" required>
									<option disabled="" selected="" value="">Categories</option>
									 
                                    <option>Lab Sampling</option>
									<option>Physyo Theraphy</option>
									<option>Nursing Care</option>
									<option>Specialized Doctor</option>
									
								</select>

								
							</div>
							<button class="button button_1 intro_button trans_200">make an appointment</button>
						</form>
    
    				</div>
				</div>

			</div>
		</div>
	</div>

	

<?php include('footer.php');?>

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
<?php
    
}else{
    
     print '<script type="text/javascript">'; 
                        print 'window.location="ServicesSuccess.php"'; 
                        print '</script>';

                           exit();
}
                        ?>
	