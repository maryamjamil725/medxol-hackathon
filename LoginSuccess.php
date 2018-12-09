<?php
session_start();
include('connect.php');

                    
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                       
                     $sql = "SELECT  Name FROM userinfo  WHERE Email='$email' AND Password='$password' ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       $Name=$row["Name"];
                        
                         $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['Username'] = $Name;
                        
                        
                        print '<script type="text/javascript">'; 
                        print 'window.location="LoginPanel.php"'; 
                        print '</script>';

                           exit();
                     
                    }
               
                }
            ?>