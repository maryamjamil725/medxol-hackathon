<?php


session_start();
include('connect.php');
 $category = $_POST['category'];
echo $category;
if(isset( $_SESSION['email']) ){

                    if(  isset( $_SESSION['services'] )  ){
                        $date = $_SESSION['date'];
                        $time = $_SESSION['time'];
                        $services=$_SESSION['services'];
                        $_SESSION['ServicesS']=$services;
                       
                            $email=$_SESSION['email'];
                    $sql = "INSERT INTO services (Date, Time, Service, SubCategory, UEMail )
                    VALUES ('$date', '$time', '$services', '$category', '$email')";

                    if ($con ->query($sql) === TRUE) {
                        
                        ?>
              
              <?php
                         
                         print '<script type="text/javascript">'; 
                        print 'window.location="ServicesSuccess1.php"'; 
                        print '</script>';
                        

                           exit();
                    } 

                    }else {
     
                    }
     }         else{
    
     
                         print '<script type="text/javascript">'; 
                        print 'window.location="Login.php"'; 
                        print '</script>';
                    
                           exit();
    
}
            ?>