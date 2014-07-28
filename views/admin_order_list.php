<div class="container">
		<div class="cart_title">
			<h2>ORDER HISTORY</h2>
			<div class="line"></div>
		</div>
		<table>
			<tr>
				<th width="120">Username</th>
				<th width="80">Customer Number</th>
				<th width="120">Order Date</th>
				<th width="100">Delivery Date</th>
				<th width="80">Order Status</th>
				<th width="100">Total Price</th>
				<th width="50">Update Order</th>
			</tr>
			<?php if(count($orders->items)): ?>
			<?php foreach($orders->items as $item): ?>
			<tr>
				<td><?=$item['customer_id']?></td>
				<td><?=$item['customer_id']?></td>
				<td><?=$item['order_date']?></td>
				<td><?=$item['delivery_date']?></td>
				<td>
					<?=Form::open()?>
					<?=Form::hidden('id', $item['id'])?>
					<?=Form::text('name', $order_status['name'])?>
				<td>$<?=$item['total']?></td>
				<td>
						<?=Form::submit()?>
						</td>
			</tr>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td colspan="7">You have no previous orders</td>
			</tr>
		<?php endif; ?>
	</table>