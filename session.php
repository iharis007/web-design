<?php session_start();
  fuction logged_in(){
  	retrun isset($_SESSION['username']);
  }
  fuction confirm_logged_in(){
  	if(!logged_in()){
     header("Location:admin_login.php");
 	 }
  }
?>