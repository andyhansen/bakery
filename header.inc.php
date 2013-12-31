<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Danish Delights</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Put the import here because all pages are going to use it -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>
    <header>
    <img src="images/logo.jpg"
         alt="Danish Delights Bakery" />
    </header>
    <nav>
      <?php include "links.inc.php"; ?>
    </nav>
