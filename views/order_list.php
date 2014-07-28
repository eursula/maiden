<div class="container">
		<div class="cart_title">
			<h2>ORDER HISTORY</h2>
			<div class="line"></div>
		</div>
		<table>
			<tr>
				<th width="120">Order Date</th>
				<th width="100">Delivery Date</th>
				<th width="100">Order Status</th>
				<th width="100">Total Price</th>
			</tr>
			<?php if(count($orders->items)): ?>
			<?php foreach($orders->items as $item): ?>
			<tr>
				<td><?=$item['order_date']?></td>
				<td><?=$item['delivery_date']?></td>
				<td><?=$item['order_status']?></td>
				<td>$<?=$item['total']?></td>
			</tr>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td colspan="7">You have no previous orders</td>
			</tr>
		<?php endif; ?>
	</table>

