<div class="container">
	
	<div class="add_form col-6">
		<?=Form::open_upload()?>

			<div class="row name">
				<?=Form::label('file','File:')?>
				<?=Form::file()?>
			</div>
			<div class="row name">
				<?=Form::label('name', 'Product Name:')?>
				<?=Form::text('name')?>
			</div>
			<div class="row name">
				<?=Form::label('description', 'Product Description:')?>
				<?=Form::textarea('description')?>
			</div>
			<div class="row name">	
				<?=Form::label('price', 'Product Price:')?>
				<?=Form::number('price')?>
			</div>
			<div class="row name">
				<?=Form::label('category_id', 'Category:')?> 
				<?=Form::number('category_id')?> 
			</div>
			<div class="row upload_button">
				<?=Form::submit()?>
			</div>
			<? if($_GET['id']): ?>
				<a href="delete_product.php?id=<?=$product['id']?>">
					Delete Product
				</a>
			<? endif; ?>

		<?=Form::close()?>
	</div>

	<div class="instructions col-6">
		<p>Product Categories:<br><br>
			1 = New In<br>
			2 = Shoes<br>
			3 = Bags<br>
			4 = Sunglasses<br>
			5 = Hats<br>
			6 = Sale<br>
		</p>
	</div>

</div>