<?php


require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/product.model.php';

Login::kickout();

if($_GET['id']){
	$product = new Product($_GET['id']);

	$product->delete();
}



# How to redirect the browser
header('location: '.$_SERVER['HTTP_REFERER']);
exit;