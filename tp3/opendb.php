<?php if (isset($_GET['source'])) die(highlight_file(__FILE__, 1)); ?>

<?php
// opendb.php

$conn = mysql_connect( $db_host, $db_user, $db_password);
if (!$conn) 
  die("probleme de connection ". mysql_error());

mysql_select_db($db_name) or die("probleme de selection " . mysql_error());
?>