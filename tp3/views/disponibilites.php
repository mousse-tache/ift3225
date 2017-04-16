<?php
include ('./views/login.php');
include ('./views/admin.php');
include ('./views/home.php');
include('./views/partials.php');
if(isset($_POST['dispo'])){
		
		$user=$_GET['user'];
		
			head(false,false);

			?>
			  <div class="plagehoraire">
			  <table>
			    <th>Terrain</th>

			    <th>Heure</th>

			    <th>Disponibilité</th>
			  
			  <?php 
			  	// $db_user = "neveuwil";
// 			  	$db_password = "CSTRk5c8UGW_jC";
// 			  	$db_host = "mysql.iro.umontreal.ca";
// 			  	$db_name = "neveuwil_3225";
// 			  	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
				
				
			  for ($i=1; $i < 6; $i++) { 
			  
			    for ($j=6; $j < 22 ; $j++) { 
					//$sql="SELECT * FROM Reservations WHERE date = 4 AND debut = '$j' AND terrain = '$i'";
					//$disp = "non";
					// if ($result = mysqli_query($conn, $sql)) {
// 						echo "allo";
// 						if (mysqli_num_rows($result) > 0) $disp = "oui";
// 					}
// 					mysqli_free_result($result);
			        echo "

			          <tr>

			            <td>".$i."</td>
			            <td>".$j."h</td>
			            <td></td>

			          </tr>";
			    }

			  }
			  //mysqli_close($conn);
			  
			   ?>

			   </table>
			  </div>
			<?php

}
