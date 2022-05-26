<?php 
//echo (intval(date("m")) >= 5 && intval(date("m")) <= 8) ? true : false;

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cosmetic.php';


$pizza = new Cosmetic('Shampoooo', 9.8, 10, 'Loreal');

var_dump($pizza);
var_dump(intval(date("m")) >= 5);
?>