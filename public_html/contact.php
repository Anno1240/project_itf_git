<html>
<head>
<title>Contactformulier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hashbreakers: Professionele webdesigners voor aanmaak van Onepage website met Bootstrap">
    <meta name="author" content="Farshad Nour, Dries Mangelschots">
    <title>HashBreakers</title>

    <!-- Bootstrap core CSS -->
    <link href="Hashbreakers/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--favicon -->
    <link rel="shortcut icon" href="/favicon.png"/>
    <!-- font awesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="Hashbreakers/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <!--<link href="Hashbreakers/css/freelancer.min.css" rel="stylesheet">-->
    <link href="Hashbreakers/css/freelancer.css" rel="stylesheet">
    </head>
<body class= "bg-blok1">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-nav fixed-top text-nav text-uppercase" id="mainNav">
      <div class="container">
        <i class="fas fa-key fa-2x"></i>
        <a class="navbar-brand js-scroll-trigger text-nav marginkey" href="Hashbreakers/index.html#page-top">Hashbreakers</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-nav text-nav rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-nav" href="Hashbreakers/index.html#teamleden">Teamleden</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-nav" href="Hashbreakers/index.html#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-nav" href="Hashbreakers/index.html#contact">Contact</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-nav" href="Hashbreakers/index.html#info">Info</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<p></p>
<section class= "text-blok1">
<div class=" container  text-center marginphp">

<h1 class="text-uppercase">Bedankt!</h1>
<p class="font-italic"> We gaan er nu mee aan de slag</p></div>

<div class="container float-left text-white" >

<p>Uw contactformulier werd succesvol geregistreerd</p>
<p>De ingevulde informatie is:</p>

<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Niet alle vakjes zijn correct ingevuld";
	return false;
   }
    echo '<ul>';
    echo '<li> Naam: '. $_POST['name'] . '</li>';
    echo '<li> Email: ' . $_POST['email'] . '</li>';

   echo '<li> Telefoonnummer: ' . $_POST['phone'] . '</li>';

   echo '<li> Bericht: ' . $_POST['message'] . '</li>';
   echo '</ul>';
?>
<p>Gebruik de navigatiebalk om terug te gaan naar Hashbreakers</p>
</div>

</section>

</body>
</head>
</html>

