<?php

session_start();

unset($_SESSION['email']);
unset($_SESSION['password']);

session_destroy();

print '<script type="text/javascript">'; 
    print 'window.location="Login.php"'; 
	print '</script>';
	 
	   exit();
            ?>