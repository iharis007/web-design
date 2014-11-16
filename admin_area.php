<?php session_start();?>
<?php if(!isset($_SESSION['username'])){
     header("Location:admin_login.php");
   };?> 
<!DOCTYPE html>
<html>
<head>
  <title>Admin Area</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
 <!-- authenticate the user -->
   <ul>
      <li> <a href="addofficebearers.php"> Add New Office Bearers </a> </li>
      <li> <a href="addmembers.php"> Add New Members </a> </li>
      <li> <a href="upload_carousel.php"> Add New Carousel images</a> </li>
      <li> <a href="addevent.php"> Add New Event</a> </li>
      <li> <a href="upload.php"> Upload Images </a> </li>
   </ul>
  
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>