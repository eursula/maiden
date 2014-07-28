<?php 
	require_once '../libraries/config.lib.php';
	require_once '../libraries/database.lib.php';
	require_once '../libraries/form.lib.php';
	require_once '../libraries/model.lib.php';
	require_once '../libraries/cart.lib.php';
	require_once '../libraries/login.lib.php';
	require_once '../models/product.model.php';
	require_once '../models/product.collection.php';


	$cart_products = array();
	$grand_total = 0;
 
		foreach($_SESSION['cart'] as $id => $qty){
			$product = new Model('tb_products');

			$product->load($id);

			$total_price = $qty * $product->price;
			$grand_total += $total_price;

			$cart_products[] = array(
				'image'       => $product->image,
				'total_price' => $total_price,
				'price'       => $product->price,
				'quantity'    => $qty,
				'name'    	  => $product->name,
				'id'    	  => $product->id
			);
		}	
		
	include '../views/header.php';
	include '../views/cart_table.php';
	include '../views/footer.php';

