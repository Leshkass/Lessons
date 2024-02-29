<?php
declare(strict_types=1);

define('APP_DIR', __DIR__ . '/');


require APP_DIR . 'traits/Test.php';
require APP_DIR . 'classes/User.php';
require APP_DIR . 'classes/Product.php';
require APP_DIR . 'classes/Customer.php';



$variable = new User();

$variable->setCreatedAt(new DateTime());

