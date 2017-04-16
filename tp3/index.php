<?php
include('./views/login.php');
include('./views/partials.php');
include('./views/home.php');
include('./views/admin.php');
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
	$sql="SELECT * FROM Users WHERE surnom = '".$surnom."' AND mdp = '".$password."'";
	head(false,false);
	if ($result = mysqli_query($conn, $sql)) {
		//echo "<h2>Test</h2>";
	    //$count=mysqli_num_rows($result);
	    /* free result set */
		//echo "<h2>res: $result</h2>";
	    //mysqli_free_result($result);

		if(mysqli_num_rows($result)) {
			while ( $range = mysqli_fetch_assoc ( $result) )  {
			  $surnom = $range['surnom'];
			  $nom = $range['nom'];
			  $prenom = $range['prenom'];
			  $admin = $range['admin'];
			}
			if($admin == 1) {
	 			admin();
	 		}
	 		else {
	 			home($user);
	 		}
			tail();
		}
		else{
			//echo "<h2>$surnom $surnom $surnom</h2>";
			head(false,false);
			login($user);
			tail();
		}
		mysqli_free_result($result);

	}
	else{
			//echo "<h2>$surnom $surnom $surnom</h2>";
			head(false,false);
			login($user);
			tail();
		}
	
	// $res=mysqli_query($sql, $conn);
	// $kek = mysqli_query($conn, $sql);
	
	//echo "<h2>res: $res</h2>";
	//$count = mysqli_num_rows($res);
	//echo "<h2>count: $count</h2>";
	
	include("closedb.php");
	
}
elseif (isset($_POST['reserver'])) {
	# sql query to look up si c'est disponible
}
else{
	head(false,false);
	login();
	tail();
}
//echo "<h2> TEST </h2>"
?>