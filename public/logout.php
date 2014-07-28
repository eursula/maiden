<?php

require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';

//

//header('location: index.php');
//exit;


# filename: logout.php

Login::log_out();

Cart::clear($product_id, $quantity);

header('location: login.php');
exit;
