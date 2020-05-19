<?php 
unset($_SESSION['alogin']);
session_destroy(); // destroy session
header("location:login.php"); 




 ?>