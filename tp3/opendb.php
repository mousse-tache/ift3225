<?php if (isset($_GET['source'])) die(highlight_file(__FILE__, 1)); ?>

<?php
// opendb.php

$conn = mysqli_connect($db_host, $db_user, $db_password,$db_name);
if (!$conn) 
  die("probleme de connection ". mysql_error());

if (mysqli_connect_errno())
  {
  die("Failed to connect to MySQL: ". mysqli_connect_error());
  }
?>