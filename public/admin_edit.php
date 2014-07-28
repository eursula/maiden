<?php

// Fowl Play

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../models/product.collection.php';
require_once '../models/product.model.php';
require_once '../libraries/cart.lib.php';

Login::kickout();

$form = new Form();
$title = 'Edit Product';



$product = new Model('tb_product');

	$product->load($_GET['id']);

# If the form was just posted
if($_POST){

	$product->name 			= $_POST['name'];
	$product->description 	= $_POST['description'];
	$product->price 		= $_POST['price'];

	if($_FILES){

		$uploaded_files = Upload::to_folder('assets/images/products/');

		foreach($uploaded_files as $file){

			if($file['error_message']){
				echo $file['error_message'];
			}else{
				$product->image = $file['filepath'];
			}
		}
			
	}

	$product->save();
}

//$products = new Product_Collection($_GET['id']);


include '../views/admin_header.php';
include '../views/admin_navigation.php';
include '../views/edit_product.php';
include '../views/footer.php';