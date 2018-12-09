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
							<div class="section_subtitle">Orders Placed by Users
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="Logout.php"> Logout</a>
                            </div>
							
						</div>
                        <br><br>
						 <table>
                        <tr>
                            <td><div class="milestone_text">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Services&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            
                            <td><div class="milestone_text">Sub Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            <td><div class="milestone_text">Users Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                            
                            </tr>
                        <?php 
              
              $sql = "SELECT Date, Time, Service, SubCategory, UEmail FROM services  ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       $Date=$row["Date"];
                        $Time=$row["Time"];
                        $Service=$row["Service"];
                        $SubCategory=$row["SubCategory"];
                        
                        $UEmail=$row["UEmail"];
                        ?>
                        
                       
                            
                            <tr>
                            <td><p><?php echo $Date;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Time; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $Service;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $SubCategory;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                <td><p><?php echo $UEmail; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
                                
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
