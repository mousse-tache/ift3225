<?php
function head($admin,$user){?>
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
            echo '<li><a href="./admin.php?user='.$user.'">Administration</a></li>';
            }
          if($user) {
            echo '<li><a href="./reserve.php?user='.$user.'">Réservations</a></li>';
          }
             ?>
        </ul>
      </nav>
<?php }?>
 <?php
function tail(){?>

          
    </main>
 </body>
</html>
<?php }?>
<?php
function past($user){?>
  <div class="plagehoraire">
    <ul>

  <?php

      for ($i=4; $i > 0; $i--) { 
        echo "<li>Réservation de la semaine ".$i."</li>";
      }
   ?>
   </ul>
  </div>
<?php }?>
<?php
function terrains(){?>
  <div class="plagehoraire">
  <table>
    <th>Terrain</th>

    <th>Heure</th>

    <th>Disponibilité</th>
  
  <?php 

  for ($i=1; $i < 6; $i++) { 
  
    for ($j=6; $j < 22 ; $j++) { 
        echo "

          <tr>

            <td>".$i."</td>
            <td>".$j."h</td>
            <td></td>

          </tr>";
    }

  }
  
   ?>
   </table>
  </div>
<?php }?>
<?php
function showreserve(){?>
<form action="index.php">
  <div class="plagehoraire">
      <div>
      <label>Plage horaire: </label>
  
    <select id="plage" name="plage">
    <?php 
        for ($i=6; $i < 22; $i++) { 
            echo '<option value="'.$i.'">'.$i.'h</option>';
          }  

     ?> 
      </select>
      </div>
      <div>
      <label>Terrain: </label>

    <select id="terrain" name="terrain">
    <?php 
        for ($i=1; $i < 6; $i++) { 
            echo '<option value="'.$i.'">Terrain '.$i.'</option>';
          }  

     ?> 
      </select>
      </div>
      <div>
      <input type="submit" name="reserver" value="Réserver">
      </div>
  </div>
</form>
<?php }?>