<?php
require_once("connection.php");
$name = null;
$about=null;

$name = $_POST['name'];
$about = $_POST['about'];
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
$query = "insert into events values('','{$name}','{$about}')";
if($name!=null&&$about!=null){
	//echo $query;
	$rs=mysql_query($query);
	if(isset($rs)){
		echo "Successfully insertion of members!!!";
	}
}else{
	echo "name and email are comp!!!";
}
?>
<?php
$query= "select id from events where name='{$name}' and about='{$about}'";
$tid = mysql_query($query);
$iid = mysql_fetch_array($tid);
$tmp_file = explode(".", $_FILES['file_upload']['name']);
$newfile = "{$iid[0]}.".end($tmp_file);
	$upload_dir = "uploads/events";
 	//echo $tmp_file;
 	echo "<\br>";
 	//echo $target_file;
 	if(file_exists("uploads/events/$newfile")) unlink("uploads/events/$newfile");
	if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_dir."/".$newfile)) {
		$message = "File uploaded successfully.";
	} else {
		$error = $_FILES['file_upload']['error'];
		$message = $upload_errors[$error];
	}



?>