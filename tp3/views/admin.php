<?php
function admin(){?>

<h2>Administration du système</h2>
<div class="plagehoraire">
      
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
  <h3>Réservations des joueurs</h3>
  <label>Jour du mois:</label>
  <select>
  <?php 
        for ($i=5; $i < 31; $i=$i+7) { 
            echo '<option value="'.$i.'">'.$i.'</option>';
          }  

     ?> 
  </select>
<?php 

  for ($i=0; $i < 1; $i++) { 
    echo "<div>";
    echo "<p>";
    echo "User ".$i;
    echo "<ul>";

    for ($j=0; $j < 2; $j++) { 
      echo "<li>";
      echo "Réservation".$j;
      echo "</li>";
    }

    echo "</ul>";
    echo "</p>";
    echo "</div>";
  }
?>
</div>

<?php }?>