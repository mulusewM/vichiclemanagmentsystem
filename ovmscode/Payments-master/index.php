<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo_small.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>


<div class="goto">

  <?php
  $a='';
  if(isset($_GET['page']))
      $a=$_GET['page'];
      
			switch($a)
			{
			case '':
			case '1': 
			include('index.php');
			break;
			case '2': 
			include('details.php');
			break;
			}
			?>
    
</div>


 

</body>
</html>
