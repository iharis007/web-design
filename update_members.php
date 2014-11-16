<!DOCTYPE html>
<html>
<head>
  <title>Upload Members</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<?php require_once("connection.php");?>
<body class="home">
  <section class="container">
    <?php include "_/components/php/header.php"; ?>
    <div class="content row col-lg-6" style="padding-left:20px; padding-bottom:20px;">
      <form action="addm.php" enctype="multipart/form-data" method="POST">
      <div class="form-group has-success">
        <label class="control-label" >*Name</label>
      <?php 
        $query = "select *from members where id=2";
        $rs = mysql_query($query);
        while ($row = mysql_fetch_array($rs)) {
          echo "<input type=\"text\" class=\"form-control\" placeholder=\"Enter Name\" name=\"name\" id=\"name\" value=\"{$row[1]}\">
            <br/>
           <label class=\"control-label\" >College Name</label>
           <input type=\"text\" class=\"form-control\" name=\"college_name\" placeholder=\"Enter College\" id=\"college_name\" value=\"{$row[2]}\"><br/>
           <label class=\"control-label\" >*Email</label>
        <div class=\"input-group\">
        <div class=\"input-group-addon\">@</div>
        <input type=\"text\" class=\"form-control\" placeholder=\"Enter Email\" name=\"email\"id=\"email\" value=\"{$row[3]}\"><br/>
        </div></br>
        <label class=\"control-label\" >Phone</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Enter Phone No.\" name=\"phone\"id=\"phone\"value=\"{$row[4]}\" ><br/> <label class=\"control-label\" >Old Image</label>
        <img src=\"uploads/members/{$row[0]}.jpg\">
        <br/> <label class=\"control-label\" >New Image</label>";
        }

      ?>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file_upload" />
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>	
      </form>
    </div>
    <?php include "_/components/php/footer.php"; ?>
  </section>
</body>
</html>