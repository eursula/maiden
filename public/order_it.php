<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';

// add a new order to the db
$order = new Model('tb_orders');

$order->order_date = date('Y-m-d');
$order->customer_id = $_SESSION['user']['id'];
$order->order_status = 'Received';

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

