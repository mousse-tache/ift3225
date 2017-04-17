<?php
function admin(){?>

<h2>Administration du système</h2>
<div class="plagehoraire">
    <h3>Disponibilités</h2>

    <form action="index.php" method="POST">
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
      <input name='dispo' type="submit" value="Montrer disponibilités">
      </div>
    
    </form>
</div>

<div class="plagehoraire">
  <h3>Réservations des joueurs</h2>
  
<?php 


  $sql="SELECT * FROM Users";
  $db_user = "neveuwil";
  $db_password = "CSTRk5c8UGW_jC";
  $db_host = "mysql.iro.umontreal.ca";
  $db_name = "neveuwil_3225";
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) { 
    echo "<div>";
    echo "<p>";
    echo $row[2]." ".$row[1].", surnom: ".$row[0];
    echo "<ul>";

    $resql="SELECT * FROM Reservations WHERE surnom='".$row[0]."'";
    $reresult=mysqli_query($conn, $resql);
    while ($rerow = mysqli_fetch_array($reresult, MYSQLI_NUM)) {
      echo "<li>";
      echo "Semaine ".$rerow[0].", à ".$rerow[1]."h sur le terrain ".$rerow[3];
      echo "</li>";
    }

    echo "</ul>";
    echo "</p>";
    echo "</div>";
  }
  mysqli_close($conn);
?>
</div>

<?php }?>