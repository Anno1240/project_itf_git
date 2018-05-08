<html>
<head>
<title>Contactformulier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hashbreakers: Professionele webdesigners voor aanmaak van Onepage website met Bootstrap">
    <meta name="author" content="Farshad Nour, Dries Mangelschots">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>HashBreakers</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <!--<link href="css/freelancer.min.css" rel="stylesheet">-->
    <link href="css/freelancer.css" rel="stylesheet">
    </head>
<body class= "bg-blok1">

<!-- Navigation -->
   <!-- Navigatiebalk -->
   <nav>
   <div class="container">
       <nav>
           <div class="btn-group">
               <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
               </button>
               <div class="dropdown-menu">
                   <a class="dropdown-item" href="index.html">Over Battle of Wisdom</a>
                   <a class="dropdown-item" href="www.youtube.be">Beschikbare artikels</a>
                   <a class="dropdown-item" href="www.pornhub.com">Informatie over webmasters</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="www.facebook.com">Maak een account aan!</a>
               </div>
           </div>
       </nav>
   </div>
</nav>


<h1 class="text-uppercase">Welkom Wisdom Warrior!</h1>
<p class="font-italic"> Uw registratie werd succesvol geregistreerd</p></div>

<div class="container float-left" >


<?php
// Check for empty fields
if(empty($_POST['name']))

{ echo '<p class="Error"> Vul uw gebruikersnaam correct in . </p>'; }

if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) || empty($_POST['email']))
   {
	echo '<p class="Error"> Vul uw email correct in . </p>';
	return false;
   }

   if(!empty($_POST['name']) && (!empty($_POST['name']))) {
   echo '<p>Uw registratie is succevol. Welkom Wisdom Warrior.</p>';
   	echo '<p> De ingevulde informatie is:</p>';
    echo '<ul>';
    echo '<li> Naam: '. $_POST['name'] . '</li>';
    echo '<li> Email: ' . $_POST['email'] . '</li>';

    if(isset($_POST['interesse1'])) {

   echo '<li> Interesse: ' . $_POST['interesse1'] . '</li>'; }

if(isset($_POST['interesse2'])) {

      echo '<li> Interesse: ' . $_POST['interesse2'] . '</li>'; }

if(isset($_POST['interesse3'])) {

         echo '<li> Interesse: ' . $_POST['interesse3'] . '</li>'; }

if(isset($_POST['interesse4'])) {

            echo '<li> Interesse: ' . $_POST['interesse4'] . '</li>'; }

if(isset($_POST['interesse5'])) {

echo '<li> Interesse: ' . $_POST['interesse5'] . '</li>'; }

   echo '</ul>'; }
?>
<p>Gebruik de navigatiebalk om terug te gaan naar Battle of Wisdom</p>
</div>

</section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</head>
</html>

