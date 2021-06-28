<?php

use ArulProject\Customer;

require_once __DIR__ . "/vendor/autoload.php";

$customer = new Customer("icank");

$customer->sayHello("Hendrik");
