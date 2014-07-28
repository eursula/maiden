<?php
	
	require_once '../libraries/config.lib.php';
	require_once '../libraries/database.lib.php';
	require_once '../libraries/form.lib.php';
	require_once '../libraries/model.lib.php';
	require_once '../libraries/cart.lib.php';
	require_once '../libraries/login.lib.php';
	require_once '../models/users.model.php';
	require_once '../models/order.collection.php';

	$orders = new Order_Collection(Login::get_id());
 
		
				
	include '../views/header.php';
	include '../views/order_list.php';
	include '../views/footer.php';

?>
