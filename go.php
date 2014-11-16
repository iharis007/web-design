<?php
$user = $_POST['email'];
$pass = sha1($_POST['pass']);
require_once("connection.php");
$query = "insert into login_info values ('{$user}','{$pass}')";
if(mysql_query($query)){
	echo $query;
	echo "done!!!!!!!!!!!1";
}

?>