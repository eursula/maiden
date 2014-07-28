<div class="container">
	<div class="product_title">
		<h2><?=$category->name?></h2>
	</div>
	<div class="line"></div>
	<div class="product_row clearfix">
		<? foreach($products->items as $product): ?>
		<div class="item col-3">
			<h4><?=$product['name']?></h4>
			<img src="<?=$product['image']?>" width="230" alt="<?=$product['name']?>">
			<?=$product['description']?>
			<div class="price">
				<p>Price</p>
				$<?=$product['price']?>
			</div>
			
			<?=Form::open('add_to_cart.php')?>
				<?=Form::hidden('id', $product['id'])?>
				<?=Form::label('quantity', 'Quantity:')?>
				<?=Form::number('quantity', '1', 'min="1"')?>
				<?=Form::submit('Add')?>
			<?=Form::close()?>
		</div>
		<? endforeach; ?>
	</div>
</div>
	