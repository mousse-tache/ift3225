<?php
include ('./views/login.php');
include('./views/partials.php');
include('./views/home.php');

if(isset($_POST['submit_form'])){
	include("config.php");
	include("opendb.php");
	$surnom=$_POST['user'];
	$password=$_POST['password'];
	$table_name = 'Users';
	echo "<h2>$surnom $password</h2>";
	$sql="SELECT * FROM $tbl_name";
	$res=mysqli_query($sql, $conn);
	echo "<h2>$res</h2>";
	$count = mysqli_num_rows($res);
	echo "<h2>$count</h2>";
	
	if($count >= 1) {
		while ( $range = mysqli_fetch_assoc ( $res) )  {
		  $surnom = $range['surnom'];
		  $nom = $range['nom'];
		  $prenom = $range['prenom'];
		  $admin = $range['admin'];
		}
		echo "<h2>$surnom</h2>";
		// if($admin == 1) {
// 			admin();
// 		}
// 		else() {
// 			home();
// 		}
		echo "<h2> $admin </h2>";
		//admin();
	}

	else{
		echo "<h2>$surnom $surnom $surnom</h2>";
		head(false,false);
		login($user);
		tail();
	}
	include("closdb.php");
	
}

else{
	head(false,false);
	login();
	tail();
}
//echo "<h2> TEST </h2>"

?>