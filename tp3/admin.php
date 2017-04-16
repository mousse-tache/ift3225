<?php
include ('./views/login.php');
include ('./views/admin.php');
include ('./views/home.php');
include('./views/partials.php');
if(isset($_POST['dispo'])){
			start_session();
			head(false,false);
			terrains();
			admin();
			tail();
}
else
{
	head(false,false);
	admin();
	tail();
}

