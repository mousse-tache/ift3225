<?php
include('./views/login.php');
include('./views/partials.php');
include('./views/home.php');

if(isset($_POST['submit_form'])){
	//include("config.php");
	//include("opendb.php");
	$db_user = "neveuwil";
	$db_password = "CSTRk5c8UGW_jC";
	$db_host = "mysql.iro.umontreal.ca";
	$db_name = "neveuwil_3225";
	// $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	$surnom=$_POST['user'];
	$password=$_POST['password'];
	$table_name = 'Users';

	//echo "<h2>$surnom $password</h2>";
	$sql="SELECT * FROM Users";
	$res=mysqli_query($conn,$sql);
	echo "<h2>$res</h2>";
	
	if ($result = mysqli_query($conn, $sql)) {
	    printf("Select returned %d rows.\n", mysqli_num_rows($result));

	    /* free result set */
		echo "<h2>res: $result</h2>";
	    mysqli_free_result($result);
	}
	
	// $res=mysqli_query($sql, $conn);
	// $kek = mysqli_query($conn, $sql);
	
	echo "<h2>res: $res</h2>";
>>>>>>> 78f9e17770656b7fb785a54cd59ffab489dc4bda
	$count = mysqli_num_rows($res);
	echo "<h2>count: $count</h2>";
	
	if($count >= 1) {
		while ( $range = mysqli_fetch_assoc ( $res) )  {
		  $surnom = $range['surnom'];
		  $nom = $range['nom'];
		  $prenom = $range['prenom'];
		  $admin = $range['admin'];
		}
		echo "<h2>$surnom</h2>";
		if($admin == 1) {
 			admin();
 		}
 		else {
 			home($surnom);
 		}
		tail();
	}

	else{
		echo "<h2>$surnom $surnom $surnom</h2>";
		head(false,false);
		login($user);
		tail();
	}
	include("closedb.php");
	
}

else{
	head(false,false);
	login();
	tail();
}
//echo "<h2> TEST </h2>"

?>