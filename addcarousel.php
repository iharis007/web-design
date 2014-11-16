<?php
require_once("connection.php");
$id = null;
$upload_errors = array(
	UPLOAD_ERR_OK 				=> "No errors.",
	UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
  UPLOAD_ERR_NO_FILE 		=> "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
);
$query = "insert into members values('')";
$rs=mysql_query($query);
	if(isset($rs)){
		echo "Successfully insertion of members!!!";
	}
$query= "select id from members order by id desc limit 1";
$tid = mysql_query($query);
$iid = mysql_fetch_array($tid);
$tmp_file = explode(".", $_FILES['file_upload']['name']);
$newfile = "{$iid[0]}.".end($tmp_file);
	$upload_dir = "uploads/carousel";
 	//echo $tmp_file;
 	echo "<\br>";
 	//echo $target_file;
 	if(file_exists("uploads/carousel/$newfile")) unlink("uploads/carousel/$newfile");
	if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = $upload_errors[$error];
	}



?>