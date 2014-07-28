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
				<a href="admin.php"><h1>MAiDEN</h1></a>
				<p class="admin_word">You are logged in as an Administrator</p>
			</div>
			<div class="toplinks">
				<?php if(Login::is_logged_in()): ?>
					<a href="logout.php">logout</a>
					<? else: ?>
					<a href="login.php">login</a>
				<? endif; ?>
			</div>
			<nav>
				<a href="admin.php">
				<span aria-hidden="true" data-icon="&#xe001;" class="icon-home2"></span>
				</a>
				<ul>
					<li><a href="admin_orders.php">ORDERS</a></li>
					<li><a href="add_product.php">ADD PRODUCT</a></li>
					<li><a href="edit_product.php">EDIT PRODUCT</a></li>
					<li><a href="edit_home.php">EDIT HOME PAGE</a></li>
				</ul>
			</nav>
		</header>
	</div>