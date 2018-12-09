<?php


/*
$servername = "localhost";
$username = "mjaissoftware";
$password = "*7{IgA8!59J7";
$dbname = "mjaissof_employment";
*/



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medxol";




$con = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}else{
   // echo "success";
}

?>