<?php

include ('./views/login.php');
include('./views/partials.php');
include('./views/home.php');
if(isset($_POST['submit_form'])){
	
	$result_array=array();

	$nuser=$_POST['user'];
	$firstname=$_POST['firstname'];
	$name=$_POST['name'];
	$npassword=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$admin;

	head(false,false);
	if ($cpassword==$npassword) {
		echo '<h2 class="error">Inscription effectuée</h2>';
		
		include("config.php");
		
		include("opendb.php");
		
		$table_name = 'Users';
		
		$sql = "SELECT * FROM $tbl_name WHERE surnom='$nuser'";
		$res = mysqli_query($sql, $conn);
		
		$count = mysqli_num_rows($res);
		head(false, false);
		if($count == 0) {
			$sql= "INSERT INTO Users VALUES ('$nuser', '$name', '$firstname', 0, '$npassword')";
			
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$res = mysqli_query($sql, $conn);
			echo "<h2> INSCRIPTION RÉUSSIE </h2>";
			login();
		}
		
		else {
			echo "<h2 class='error'> CHOISIR UN AUTRE NOM D'UTILISATEUR </h2>";
			insc($nuser,$firstname,$name);
		}
		tail();
	}
	else
	{
		echo '<h2 class="error">Mots de passe différents!</h2>';
		insc($nuser,$firstname,$name);
		tail();
	}
			
		
	
	
}else{
	head(false,false);
	insc($user,$firstname,$name);
	tail();
}
mysqli_free_result($res);
include('closedb.php');
?>