<?php
session_start();
include('connect.php');
 
                        
                        if($_SESSION['ServicesS']="HouseKeeping"){
                            $_SESSION['ServiceCharge'] ="Rs. 1500";
                            
                        }else if($_SESSION['ServicesS']="Companionship"){
                            
                            $_SESSION['ServiceCharge'] ="Rs. 1500";
                            
                        }else if($_SESSION['ServicesS']="Personal Care & Medical Lab"){
                            $_SESSION['ServiceCharge'] ="As Per Request";
                            
                        }else if($_SESSION['ServicesS']="Meals & Transportation"){
                            $_SESSION['ServiceCharge'] ="As Per Request";
                            
                        }else {
                            
                          print '<script type="text/javascript">'; 
                        print 'window.location="Prices.php"'; 
                        print '</script>';
                        

                           exit(); 
                        }
                        
                         
                         print '<script type="text/javascript">'; 
                        print 'window.location="Prices.php"'; 
                        print '</script>';
                        
            ?>