<?php 

require_once __DIR__ . '/Models/Product.php';

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Cosmetic.php';

$productList = [
    new Food('Pizza Marghe', 9.8, 10, '27/12/22'),
    new Food('Tofu in cubetti', 5.4, 98, '24/02/23'),
    new Food('Kiwi Gold', 2.3, 20, '27/06/22'),
];