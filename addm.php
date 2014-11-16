
<?php
require_once("connection.php");
$name = null;
$collegename=null;
$email=null;
$phone=null;
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
$name = $_POST["name"];
$collegename = $_POST['college_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$query = "insert into members values('','{$name}','{$collegename}'";
$query .= ",'{$email}','{$phone}')";
if($name!=null&&$email!=null){
	$rs=mysql_query($query);
	if(isset($rs)){
		echo "Successfully insertion of members!!!";
	}
}else{
	echo "somthing went wrong";
}
$query= "select id from members where name='{$name}' and email='{$email}'";
$tid = mysql_query($query);
$iid = mysql_fetch_array($tid);
$tmp_file = explode(".", $_FILES['file_upload']['name']);
$newfile = "{$iid[0]}.".end($tmp_file);
	$upload_dir = "uploads/members";
 	//echo $tmp_file;
 	echo "<\br>";
 	//echo $target_file;
 	if(file_exists("uploads/members/$newfile")){
 	 unlink("uploads/members/$newfile");
 	 echo "file already exist!!!!!!!!!!!!!";
 	}
	if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = $upload_errors[$error];
	}

?>