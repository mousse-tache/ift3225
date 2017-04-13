<?php
function home($user){?>


<div>

  <h2>Disponibilités des terrains</h2>

  <?php terrains()?>

  <h2>Réserver une plage horaire</h2>

  <?php  
      showreserve($i);
  ?>


  <h2>Réservations passées</h2>

  <?php past($user)?>


</div>

<?php }?>
 