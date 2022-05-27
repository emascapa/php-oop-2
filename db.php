<?php 

require_once __DIR__ . '/Models/Product.php';

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Cosmetic.php';

$productList = [
    new Food('Pizza Marghe', 9.8, 10, '27/12/22'),
    new Food('Tofu in cubetti', 5.4, 98, '24/02/23'),
    new Food('Kiwi Gold', 2.3, 20, '27/06/22'),
    new Food('Good Lemon', 4.5, 200, '27/05/22'),
    new Game('I coloni di Catan', 30.3, 10, '99'),
    new Game('Risiko', 40.3, 20, '99'),
    new Game('Taboo!', 20.7, 5, '99'),
    new Game('Cubo di Rubik', 9.3, 2, '70'),
    new Cosmetic('Awesome Shampoo', 2.3, 22, 'Loreal'),
    new Cosmetic('Awesome AfterShave', 5.4, 20, 'Coop-Cosmetics'),
    new Cosmetic('Awesome Soap', 9.3, 2, 'Garnier'),
    new Cosmetic('Awesome teethbrush', 3, 7, 'Sammontana'),
];

/* 
IL PRIMO PRODOTTO HA 10 ARTICOLI
SE NE AGGIUNGI 11 AL CARRELLO OTTIENI 
L'EXCEPTION CREATA NEL METODO 
*/

/* 
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
$productList[0]->addOneItemToBasket();
 */