<?php
session_start();

if (isset($_SESSION["email"]) ) {
     $email=$_SESSION["email"]; 
}

?>

<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.2.0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	

    <?php $host = $_SERVER['HTTP_HOST'];
   $url = $host . $_SERVER['REQUEST_URI']; ?>
   <?php if ($url == 'digitalcardo.com/features.php' || $url == 'www.digitalcardo.com/features.php'): ?>
	<title>Features</title>
    <meta name="description" content="features page"/>
	<?php elseif ($url == 'digitalcardo.com/plans.php' || $url == 'www.digitalcardo.com/plans.php'): ?>
	<title>Pricings</title>
    <meta name="description" content="Pricing page"/>
	<?php elseif ($url == 'digitalcardo.com/doc.php' || $url == 'www.digitalcardo.com/doc.php'): ?>
	<title>How it Works</title>
    <meta name="description" content="How it works page"/>
	<?php else: ?>
	<title>Home</title>
    <meta name="description" content="Homepage"/>
	<?php endif; ?>
	
	
  </head>

  <body>

  <!-- N A V B A R -->
  <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon ion-md-menu"></span>
    </button>
    <img src="images/logo.png" class="img-fluid nav-logo-mobile" alt="Company Logo">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="container">
      	<img src="images/logo.png" class="img-fluid nav-logo-desktop" alt="Company Logo">
        <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="index.php">HOME <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="features.php">FEATURES <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link">
            <a class="nav-link" href="plans.php">PRICINGS <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
		  <li class="nav-item nav-custom-link">
            <a class="nav-link" href="doc.php">HOW IT WORKS <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
          <li class="nav-item nav-custom-link btn btn-demo-small">
            <a class="nav-link" href="login.php">TRY IT FOR FREE <i class="icon ion-ios-arrow-forward icon-mobile"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- E N D  N A V B A R -->