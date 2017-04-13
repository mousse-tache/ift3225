<?php
include ('./views/login.php');
include ('./views/admin.php');
include ('./views/home.php');
include('./views/partials.php');
if(isset($_GET['user'])){
	
		$user=$_GET['user'];
		
		if ($user=="admin") {
			$admin=true;
		}
		else {$admin=false;}

		if ($user) {
			head($admin,$user);
			home($user);
			tail();
		}
		else{	
			head(false,false);
			login();
			tail();
		}

	
}else{
	head();
	login();
	tail();
}

