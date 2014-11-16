<!DOCTYPE html>
<html>
<head>
  <title>Admin Area - Add Office Bearers</title>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/bootstrap-theme.min.css">
</head>
<body class="home">
<section class="container">
  <?php include "_/components/php/header.php"; ?>
  <div class="content row" style="padding-left:20px; padding-bottom:20px;">
    <form action="addcarousel.php"enctype="multipart/form-data" method="POST">
      <legend> <h2> Add Office Bearers </h2></legend>
    
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file_upload" />
      	<button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  <?php include "_/components/php/footer.php"; ?>
</section>
</body>
</html>