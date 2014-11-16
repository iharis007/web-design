<?php session_start();?>
<?php if(isset($_SESSION['username'])){
     header("Location:admin_area.php");
   };?> 
<?php require_once("connection.php");?>
<!DOCTYPE html>
  <?php 
  $msg=null;
  if(isset($_POST['submit'])){
       require_once("connection.php");
       $email =$_POST['email'];
       $pass = sha1($_POST['pass']);
       $query = "select username from login_info where username='{$email}' and password ='{$pass}' limit 1";
       $rs = mysql_query($query);
       if(mysql_num_rows($rs) == 1){
        $fnd = mysql_fetch_array($rs);
        $_SESSION['username']=$fnd['username'];
           header("Location:admin_area.php");
       }else{
        $msg = "username and password combination is wrong!!!!!!";
       }
 }
   ?> 
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
    <?php echo $msg;?>
    <form action="admin_login.php" method="POST">
      <legend> <h2> Login</h2></legend>
    <div class="form-group has-success col-lg-6">
      <label class="control-label" >Email</label>
      <div class="input-group">
      <div class="input-group-addon">@</div>
        <input type="text" class="form-control" placeholder="Enter Email" name="email"id="email"><br/>
      </div></br>
      <label class="control-label" >Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="pass"id="pass"><br/>
      <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </div>	
    </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>