<?php
include ('./views/login.php');
include ('./views/admin.php');
include ('./views/home.php');
include('./views/partials.php');
if(isset($_POST['submit_form'])){
		
		$user=$_GET['user'];
		
			head(false,false);

			?>
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
			<?php

			admin();
			tail();
		


}else{
	head(false,false);
	admin();
	tail();
}

