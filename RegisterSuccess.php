<?php
session_start();
include('connect.php');
 

                    if(  isset( $_POST['email'] ) and isset( $_POST['password'] ) ){
                        $cnic = $_POST['cnic'];
                        $name = $_POST['name'];
                        $email=$_POST['email'];
                        
                        
                       $password = $_POST['password'];
                        $_SESSION['Password']=$password;
                        
                        $age = $_POST['age'];
                        $number=$_POST['number'];
                        
                        $gender = $_POST['gender'];
                        $address = $_POST['address'];
                        $city=$_POST['city'];
                        
                        $landmark = $_POST['landmark'];
                        
                        
                    $sql = "INSERT INTO userinfo (CNIC, Name, Email, Password, Age, Number, Gender, Address, City, Landmark )
                    VALUES ('$cnic', '$name', '$email', '$password', '$age', '$number', '$gender', '$address', '$city', '$landmark' )";

                    if ($con ->query($sql) === TRUE) {
                        
                        $_SESSION['email']=$email;
                        
                        ?>
              
              <?php
                         
                         print '<script type="text/javascript">'; 
                        print 'window.location="LoginPanel.php"'; 
                        print '</script>';
                        

                           exit();
                    } 

                    }else {
     
                    }
              
            ?>