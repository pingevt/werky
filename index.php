<?php

include_once "incs/funcs.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Werky Farms</title>

  <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

	<link type="text/css" href="css/styles.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/tab.js"></script>
  <script type="text/javascript" src="bootstrap/js/transition.js"></script>
  <script type="text/javascript" src="bootstrap/js/carousel.js"></script>
  <script type="text/javascript" src="bootstrap/js/modal.js"></script></script>
</head>
<body>

  <div id="wrapper">
    <header>
      <div class="container">
        <a href="#home" data-toggle="tab" id="logo"><div id="logo-div"><h1>Werky Farms</h1></div></a>

        <div class="tabbable">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#history" data-toggle="tab">History</a></li>
            <li><a href="#eggs-chicken" data-toggle="tab">Eggs/Chicken</a></li>
            <li><a href="#goats" data-toggle="tab">Goats</a></li>
            <li><a href="#produce" data-toggle="tab">Produce</a></li>
            <li><a href="#projects" data-toggle="tab">Projects</a></li>
          </ul>
        </div>
      </div>
    </header>

    <article>
      <div class="container">
        <img src="imgs/img_header.png" alt="" id="barn" />


        <div class="tab-content">

          <!-- HOME -->
          <?php include_once('incs/page--home.tpl.php'); ?>

          <!-- History -->
          <?php include_once('incs/page--history.tpl.php'); ?>

          <!-- Eggs/Chicken -->
          <?php include_once('incs/page--eggs-chicken.tpl.php'); ?>

          <!-- Goats -->
          <?php include_once('incs/page--goats.tpl.php'); ?>

          <!-- Produce -->
          <?php include_once('incs/page--produce.tpl.php'); ?>

          <!-- Projects -->
          <?php include_once('incs/page--projects.tpl.php'); ?>

        </div>
      </div>
    </article>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div id="logo-div"><h1>Werky Farms</h1></div>
            <p>
              6031 Kesslersville Rd<br />
              Nazareth Pa 18964<br />
              (610) 588-8273<br />
              <a href="mailto:rwerky2@yahoo.com">rwerky2@yahoo.com</a>
            </p>
          </div>
          <div class="col-md-6">
            <p class="description">The parking area is located at the bottom of the barn. There is an open rolling door with an "EGGS" sign on it.  We have a refrigerator for eggs and a freezer for chicken.  Payment is on the honor system in the cash box and prices are marked. We sell first come first serve.</p>
          </div>
        </div>
      </div>
    </footer>


  </div>
</body>
</html>
