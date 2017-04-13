<?php
function admin(){?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Réservation de terrain</title>

    <link href="css/style.css" rel="stylesheet">
   </head>

  <body style="background:#F7F7F7;">

    <main>
      <?php if($user) {
        echo "<h3>Bienvenue " . $user . "!</h3>"; 
        }
      ?>
      <nav>
        <ul>
          
          <?php 
          if($admin) {
            echo '<li><a href="./admin.php">Administration</a></li>';
            }
          if($user) {
            echo '<li><a href="./reserve.php">Réservations</a></li>';
          }
             ?>
        </ul>
      </nav>
<?php }?>