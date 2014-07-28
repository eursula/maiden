<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/fonts1/icomoon/style.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Maiden</title>
</head>
<body>
	<div class="tophead">
		<header>
			<div class="name">
				<a href="index.php"><h1>MAiDEN</h1></a>
			</div>
			<div class="toplinks">
				<?php if(Login::is_logged_in()): ?>
					<a href="logout.php">logout</a>
					<a href="orders.php">orders</a>
					<? else: ?>
					<a href="login.php">login</a>
					<a href="register.php">register</a>
				<? endif; ?>	
				<a href="cart.php">cart (<?=Cart::get_total()?>)</a>
			</div>
			<nav>
				<a href="index.php">
				<span aria-hidden="true" data-icon="&#xe001;" class="icon-home2"></span>
				</a>
				<ul>
					<li><a href="products.php?id=1">NEW IN</a></li>
					<li><a href="products.php?id=2">SHOES</a></li>
					<li><a href="products.php?id=3">BAGS</a></li>
					<li><a href="products.php?id=4">SUNGLASSES</a></li>
					<li><a href="products.php?id=5">HATS</a></li>
					<li><a href="products.php?id=6">SALE</a></li>
				</ul>
			</nav>
		</header>
	</div>