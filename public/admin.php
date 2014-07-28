<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';


Login::kickout_non_admin();

#echo "congratulations your in admin";

include '../views/admin_header.php';

include '../views/footer.php';