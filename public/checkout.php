<?php

session_start();
#session_destroy();

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
// require_once '../models/order.collection.php';


if(!Login::is_logged_in()){

	header('location: login.php');
	exit;

}else{
	
	// add a new order to the db
	$order = new Model('tb_order');

	$order->order_date = date('Y-m-d');
	$order->customer_id = $_SESSION['user']['id'];
	$order->order_status = 'Pending';

	// save it so that we know the id of this order
	$order->save();

	// For every product in our cart
	foreach($_SESSION['cart'] as $product_id => $quantity){
		// set up a new orderline, linking this product to the order we made above.

		$orderline = new Model('tb_orderline');

		$orderline->quantity   = $quantity;
		$orderline->product_id = $product_id;
		$orderline->order_id   = $order->id;

		$orderline->save();
	}


	Cart::clear($product_id, $quantity);

}

include "../views/header.php";
include "../views/checked_out.php";
include "../views/footer.php";