<?php
include ('./views/login.php');
include('./views/partials.php');
include('./views/home.php');
if(isset($_POST['submit_form'])){
	
		
		$db_host='';
		$db_name='';
		$db_user='';
		$db_pass="";
		
		$result_array=array();

		$user=$_POST['user'];
		$password=$_POST['password'];
		$admin;

		if ($user=="admin") {
			$admin=true;
		}else{
			$admin=false;
		}

		if ($user) {
			head($admin,$user);
			home($user);
			tail();
		}else{	
			head($admin,false);
			login($user);
			tail();
		}



		/*
		$link = mysqli_connect($db_host, $db_user, $db_pass);
		if (!$link) {
		
			new_paper($content);
		}else{
			
			
		
				$db_selected = mysqli_select_db($link,$db_name);
				if (!$db_selected) {
					//die ('Database connection error  : ' . mysqli_error($link));
					new_paper();
				}else{
		
					
					$paper=trim($_POST['paper']);
			
					
					
					// Add admin user
					$sql="INSERT INTO paper (user_name,user_username,user_password,user_mail,user_usergroup) VALUES('".$full_name."','".$user_name."','".$user_password."','".$user_mail."',1)";
					$result = mysqli_query($link,$sql);
					if (!$result) {
						die('Invalid query : ' . mysqli_error($link));
					}
					
					
					new_paper();

				}
		

		
		}
*/
			
		
	
	
}else{
	head(false,false);
	login();
	tail();
}

