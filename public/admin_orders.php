<?php
	
	require_once '../libraries/config.lib.php';
	require_once '../libraries/database.lib.php';
	require_once '../libraries/form.lib.php';
	require_once '../libraries/model.lib.php';
	require_once '../libraries/cart.lib.php';
	require_once '../libraries/login.lib.php';
	require_once '../models/users.model.php';
	require_once '../models/order.collection.php';

	Login::kickout();

	$form = new Form();
	$title = 'Update Orders';

# If the form was just posted
	if($_POST){

	$order = new Order($_POST['id']);

	$order->status 			= $_POST['order_status'];

	$order->save();
}

$orders = new Order_Collection(Login::get_id());


	include '../views/admin_header.php';
	include '../views/admin_order_list.php';
	include '../views/footer.php';

?>