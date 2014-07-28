<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/product.collection.php';
require_once '../models/product.model.php';
require_once '../libraries/upload.lib.php';

Login::kickout();

$form = new Form();
$title = 'Add Product';

#If the form was just posted
if($_POST){
	$product = new Product();

	$product->name 			= $_POST['name'];
	$product->description 	= $_POST['description'];
	$product->price 		= $_POST['price'];
	$product->category_id 	= $_POST['category_id'];

	$images = '';

	#( $_FILES );  #Super Global

	# If any files were uploaded
	if($_FILES){

		$uploaded_files = Upload::to_folder('assets/images/');

		foreach($uploaded_files as $file){

			if($file['error_message']){
				echo $file['error_message'];
			}else{
				$product->image = $file['filepath'];
			}
		}
			
	}

	$product->save();
	

	header('location: add_product.php?id='.$_POST['category_id']);
	exit;
}

include '../views/admin_header.php';
include '../views/add_list.php';
include '../views/footer.php';