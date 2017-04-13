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

		$nuser=$_POST['user'];
		$firstname=$_POST['firstname'];
		$name=$_POST['name'];
		$npassword=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$admin;

		

		
			head(false,false);
			if ($cpassword==$npassword) {
				
			echo '<h2 class="error">Inscription effectuée</h2>';
			
			login();
			tail();
			}
			else
				{
				
			echo '<h2 class="error">Mots de passe différents!</h2>';
			insc($nuser,$firstname,$name);
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
	insc($user,$firstname,$name);
	tail();
}

