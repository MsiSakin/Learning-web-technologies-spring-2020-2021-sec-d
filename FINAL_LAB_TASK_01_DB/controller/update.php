<?php
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$id			= $_POST['id'];

		$user = [
						'username'	=>$username, 
						'email'		=>$email, 
						'password'	=>$password,
						'type'		=>'user',
						'id'		=>$id
				];

				print_r($user);
						
				$status = updateUser($user);

				if($status){
					header('location: ../view/login.php');
				}else{
					echo "Db error";
				}
	}

?>
