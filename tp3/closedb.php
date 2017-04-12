<?php if (isset($_GET['source'])) die(highlight_file(__FILE__, 1)); ?>

<?php
// close.db

mysql_close($conn) or die("Probleme lors de la fermeture de la connection ". msql_error());
?>