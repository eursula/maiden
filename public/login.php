<?php

session_start();
#session_destroy();

require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/users.model.php';
require_once '../models/admin.model.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/cart.lib.php';

$form = new Form();

if($_POST){
	$user = new User();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	if($user->authenticate()){
		Login::log_in($user->id);
		header('location: index.php');
	}else{
		$user = new Admin();

		$user->username = $_POST['username'];
		$user->password = $_POST['password'];

		if($user->authenticate()){
			Login::log_in($user->id, true);
			header('location: admin.php');
			exit;
		}else{
			$error = 'Incorrect Username or Password';
		}
	}

}

include '../views/header.php';

if($_SESSION['logged_in'] == true){
	include '../views/home.php';
	
}else{
	include '../views/login_form.php';
}

	include '../views/footer.php';
