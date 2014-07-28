<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/users.model.php';


if($_POST){

 	if($_POST['password'] == $_POST['confirm_password']){
		$user = new User();

		$user->username = $_POST['username'];
		$user->password = $_POST['password'];

		if($user->save()){
			header('location: login.php');
			exit;
		}
	}else{
		$error = 'Passwords do not match';
	}

}


include '../views/header.php';
include '../views/register_form.php';
include '../views/footer.php';