<div class="container">
		<div class="cart_title">
			<h2>SHOPPING BAG</h2>
			<div class="line"></div>
		</div>
		<table>
			<tr>
				<th>Item</th>
				<th width="550">Name</th>
				<th width="80">Price</th>
				<th width="130">Quantity</th>
				<th width="120">Total Price</th>
				<th></th>
			</tr>
			<?php if(count($cart_products)): ?>
			<?php foreach($cart_products as $product): ?>
			<tr>
				<td><img src="<?=$product['image']?>"></td>
				<td><?=$product['name']?></td>
				<td>$<?=$product['price']?></td>
					<td>
						<?=Form::open('update_quantity.php')?>
							<?=Form::hidden('id', $product['id'])?>
							<?=Form::number('quantity', $product['quantity'], 'min="1"')?>
							<?=Form::submit('Save')?>
						<?=Form::close()?>
					</td>
				<td>$<?=$product['total_price']?></td>
				<td><a href="remove_from_cart.php?id=<?=$product['id']?>">Remove</a></td>
			</tr>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td colspan="6">There are no items in your shopping bag :(</td>
			</tr>
		<?php endif; ?>
	</table>
	<p class="total">Grand Total: $<?=$grand_total?></p>
	<div class="purchase col-12">
		<a href="checkout.php">Purchase</a>
	</div>
