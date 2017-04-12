<?php if (isset($_GET['source'])) die(highlight_file(__FILE__, 1)); ?>


<?php
// session_start();
// // exemple1.php
// // les champs de la base sont connus
//
// include("config.php");
// include("opendb.php");
//
	$surnom=$_POST['surnom'];
	$password=$_POST['password'];
	echo "$surnom $password !";
//
// //$sql="SELECT * FROM $tbl_name WHERE username='$surnom' and password='$password'";
// $res=mysql_query("SELECT * FROM $tbl_name WHERE username='$surnom' and password='$password';", $conn);
//
// while ( $range = mysql_fetch_assoc ( $res) )  {
//   $surnom = $range['surnom'];
//   $nom = $range['nom'];
//   $prenom = $range['prenom'];
//   $admin = $range['admin'];
// }
// $link = 'www-ens.iro.umontreal.ca/~neveuwil/tp3/';
// if($admin == 1) {
// 	$link .= "admin.html";
// }
//
// else($admin == 0) {
// 	$link .= "user.html";
// }
// $_SESSION["surnom"] = $surnom;
// $_SESSION["admin"] = $admin;
//
//
// header("Location: ".$link."");
//
// mysql_free_result($res);
// include('closedb.php');
?>