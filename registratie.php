<html>
<head>


    <title>Registratie</title>

     <!--Bootstrap CSS + meta viewport-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="public_html/css/style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


        <!--icon libary-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Real favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

<body>

<!-- Responsieve navigatiebalk 3 breekpunten-->
<nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-myblack">
    <div class="container bg-myblack txt-mygreennav">
        <a class="navbar-brand txt-mygreennav" href="public_html/index.html#">Battle of Wisdom</a>
        <button class="navbar-toggler txt-mygreennav bg-myblack" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto bg-light float-right bg-myblack">
                <li class="nav-item bg-myblack">
                    <a class="nav-link txt-mygreennav" href="public_html/index.html#titel">Over Battle of Wisdom</a>
                </li>
                <li class="nav-item bg-myblack txt-mygreennav">
                    <a class="nav-link txt-mygreennav" href="public_html/index.html#artikel">Artikels</a>
                </li>
                <li class="nav-item bg-myblack txt-mygreennav">
                    <a class="nav-link txt-mygreennav" href="public_html/index.html#tools">Interessante tools</a>
                </li>
                <li class="nav-item bg-myblack txt-mygreennav">
                    <a class="nav-link txt-mygreennav" href="public_html/index.html#login">Registreer</a>
                </li>
            </ul>

        </div>
    </div>

</nav>


<div class="container" id="succes">


<?php
// Check for empty fields
if(empty($_POST['name']))

{ echo '<p class="Error"> Vul uw gebruikersnaam correct in . </p>'; }

if(empty($_POST['wachtwoord']))
{echo '<p class="Error"> Vul een wachtwoord in . </p>'; }

if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) || empty($_POST['email']))
   {
	echo '<p class="Error"> Vul uw email correct in . </p>';
	return false;
   }

   if(!empty($_POST['name']) && (!empty($_POST['email'])) && (!empty($_POST['wachtwoord']))) {
   echo '<p>Uw registratie is succevol. Welkom Wisdom Warrior.</p>';
   	echo '<p> De ingevulde informatie is:</p>';
    echo '<ul>';
    echo '<li> Naam: '. $_POST['name'] . '</li>';
    echo '<li> Wachtwoord: '. $_POST['wachtwoord'] . '</li>';
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

