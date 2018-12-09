<?php
session_start();
include('connect.php');

                    
                        $Aemail = $_POST['aemail'];

                        $APassword = $_POST['apassword'];
                       
                     $sql = "SELECT  AdminID FROM admin  WHERE Email='$Aemail' AND Password='$APassword' ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                       $AdminID=$row["AdminID"];
                        
                         $_SESSION['adminemail'] = $Aemail;
                        $_SESSION['adminpassword'] = $APassword;
                        $_SESSION['AdminID'] = $AdminID;
                        
                        
                        print '<script type="text/javascript">'; 
                        print 'window.location="AdminPanel.php"'; 
                        print '</script>';

                           exit();

                     
                    }
               
                }
            ?>