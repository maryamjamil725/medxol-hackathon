<!DOCTYPE html>
<html lang="en">
<head>
<title>Dr PRO</title>
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

	


	<!-- Extra -->

	<div class="extra">
        
        <br><br>
        
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/extra.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="extra_container d-flex flex-row align-items-start justify-content-end">
						<div class="extra_content">
							<div class="extra_disc d-flex flex-row align-items-end justify-content-start">
								<div><h3>Registeration</h3></div>
								<br>
							</div>
							
							
                            <form action="RegisterSuccess.php" method="post">
                                
                                <input type="text" class="intro_input" id="cnic" name="cnic" placeholder="CNIC" required="required">
                                <input type="text" class="intro_input"  id="name" name="name" placeholder="Name" required="required">
                                <input type="email" class="intro_input"  id="email" name="email" placeholder="Email" required="required">
                                <input type="password" class="intro_input"  id="password" name="password" placeholder="Password" required="required">
                                <input type="number" class="intro_input"  id="age" name="age" placeholder="Age" required="required">
                                <input type="text" class="intro_input"  id="number" name="number" placeholder="Mobile Number" required="required">
                                <input type="text" class="intro_input"  id="gender" name="gender" placeholder="Gender" required="required">
                                <input type="text" class="intro_input"  id="address" name="address" placeholder="Address" required="required">
                                
                                <input type="text" class="intro_input"  id="city" name="city" placeholder="City" required="required">
                                <input type="text" class="intro_input"  id="landmark" name="landmark" placeholder="Landmark Area" required="required">
                            
                                <button class="button button_1 intro_button trans_200">Register</button>
                                
                            </form>
						</div>
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