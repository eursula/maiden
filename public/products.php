<?php
	
	require_once '../libraries/config.lib.php';
	require_once '../libraries/database.lib.php';
	require_once '../libraries/form.lib.php';
	require_once '../libraries/model.lib.php';
	require_once '../libraries/cart.lib.php';
	require_once '../models/product.collection.php'; 
	require_once '../models/categories.model.php';
	require_once '../libraries/login.lib.php'; 

	$products = new Product_Collection($_GET['id']);
	$category = new Category($_GET['id']);
	
	include '../views/header.php';
	include '../views/list.php';
	include '../views/footer.php';

?>