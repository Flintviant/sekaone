<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="assets/logotanpateks.webp">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>
			<?php
        if(isset($_GET["home"])){ echo "Sekaone - Home";}
        else if(isset($_GET["about"])){ echo "Sekaone - About Us";}
        else if(isset($_GET["services"])){ echo "Sekaone - Services";}
        else if(isset($_GET["contact"])){ echo "Sekaone - Contact Us";}
        else { echo "Home"; }
    	?>
    </title>

    <style type="text/css">
      .orange-bg{
      background-color: #3C7945;
    }
    </style>
</head>