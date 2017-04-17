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

  <body>

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
    <footer>
      <ul>
        <li>Système de réservation DIRO</li>
        <li>Félix Bélanger-Robillard</li>
        <li>William Neveu</li>
      </ul>
    </footer>
 </body>
</html>
<?php }?>
<?php
function past($user){

  ?>
  <h2>Mes réservations</h2>
  <div class="plagehoraire">
    <div>

  <?php

      session_start(); 
      $surnom=$_SESSION["surnom"];
      $sql="SELECT * FROM Reservations WHERE surnom='$surnom'";
      $db_user = "neveuwil";
      $db_password = "CSTRk5c8UGW_jC";
      $db_host = "mysql.iro.umontreal.ca";
      $db_name = "neveuwil_3225";
      $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
      $result = mysqli_query($conn, $sql);
      if ($result) {    
         while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
          echo "<form action='index.php' method='POST'>";
          echo "<input name='debut' type='hidden' value='".$row[1]."'></input>";
          echo "<input name='terrain' type='hidden' value='".$row[3]."'></input>";
             echo "<li>Semaine ".$row[0].", sur le terrain ".$row[3]." à ".$row[1]."h
                  <input type='submit' value='Annuler' name='annuler'></input></li>
  
             \n";
          echo "</form>";
          } 
      }
      else echo "<li>Aucune réservation enregistrée</li>";
   ?>
   </div>
  </div>
<?php 
mysqli_close($conn);
}
?>
<?php
function terrains(){?>

<h2>Disponibilités restantes</h2>
  <div class="plagehoraire">
  <table>
    <th>Terrain</th>

    <th>Heure</th>
    
    <th>Disponible</th>
  <?php 
  $db_user = "neveuwil";
  $db_password = "CSTRk5c8UGW_jC";
  $db_host = "mysql.iro.umontreal.ca";
  $db_name = "neveuwil_3225";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  


    for ($i=1; $i < 6; $i++) { 
    
      for ($j=6; $j < 22 ; $j++) { 

        $sql="SELECT * FROM Reservations WHERE date='4' AND terrain=$i AND debut=$j";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_NUM);        

        if ($row) {
            echo "

            <tr>

              <td>".$i."</td>
              <td>".$j."h</td>
              <td class='reserved'></td>
              

            </tr>";
        }
        else {
          echo "

            <tr>

              <td>".$i."</td>
              <td>".$j."h</td>
              <td class='dispo'></td>
              

            </tr>";
        }
        /*  


        */
      }

    }    
  
  mysqli_close($conn);

   ?>
   </table>
  </div>
<?php }?>
<?php
function showreserve(){?>
<form action="index.php" method="POST">
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