<?php
session_start();
include('connect.php');
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

	

	<!-- Intro -->

	<div class="intro">
		<div class="container">
            
            
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">Bio Data  of Users
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="Logout.php"> Logout</a>
                            </div>
							
						</div>
						 <table>
                        <tr>
                            <td><div class="milestone_text">CNIC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            
                            <td><div class="milestone_text">Contact Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            
                            <td><div class="milestone_text">Landmark&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            </tr>
                       
                        <?php 
              
              $sql = "SELECT CNIC, Name,Email, Age, Number, Gender, Address, City, Landmark FROM userinfo  ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       $CNIC=$row["CNIC"];
                        $Name=$row["Name"];
                        $Email=$row["Email"];
                        
                        $Age=$row["Age"];
                        
                        $Number=$row["Number"];
                        $Gender=$row["Gender"];
                        $Address=$row["Address"];
                       
                        $City=$row["City"];
                        $Landmark=$row["Landmark"];
                        
                        
                        ?>
                        
                            
                            <tr>
                            <td><p><?php echo $CNIC;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Name; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Email;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                
                                <td><p><?php echo $Age; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td> <p><?php echo $Number; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Gender; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                
                                <td> <p><?php echo $Address;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $City;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Landmark; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                
                            </tr>
                            
                        
                         
              <?php
                    }
                } else {
                    echo "0 results";
                }
              ?>
                        </table>
                        
						<div class="milestones">
							
                              
                             

							</div>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</div>

	
	

	<!-- Footer -->

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
