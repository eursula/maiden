<div class="container">
	
		<a href="add_product.php">Add Product</a>
		<div class="edit_list_table">
			<table>
				<tr>
					<th width="80">Image</th>
					<th width="120">Product Name</th>
					<th width="100">Product Description</th>
					<th width="30">Product Price</th>
					<th width="50">Add</th>
					<th width="50">Remove</th></th>
				</tr>
			<? foreach($products->items as $product): ?>
				<div class="row">
					<tr>
						<td>
							<img src="<?=$product['image']?>" alt="<?=$product['name']?>"><br>
							<?=Form::label('file','File:')?>
							<?=Form::file()?>
						</td>
						<td>
							<?=Form::open()?>

							<?=Form::hidden('id', $product['id'])?>
								
							<?=Form::text('name', $product['name'])?>
						</td>
							<!-- Upload image -->
						
						<td>	
							
							<?=Form::textarea('description', $product['description'])?>
						</td>
						<td>
							<?=Form::number('price', $product['price'])?>
						</td>
						<td>
						<?=Form::submit()?>
						</td>
						<td>	
							<a href="delete_product.php?id=<?=$product['id']?>">
								Delete Product
							</a>
							<?=Form::close()?>
						</td>
					</tr>
				</div>
			<? endforeach; ?>
		<table>
	</div>
</div>