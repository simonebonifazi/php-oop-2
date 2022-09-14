<?php 
include_once __DIR__ . '/models/cart/Cart.php';
include_once __DIR__ . '/models/products/Products.php';
//include_once __DIR__ . '/models/cart/Cart.php'

$prodotto_1 = new Food('Mangime DOP','cibo adatto a sfamare cavie peruviane e consigli nani di prima scelta', 5,['Conigli, Cavie'], '500 g', ['carote','mais','avena'] );

$prodotto_2 = new Toy('Mordino', 12, ['gomma', 'plastica dura'], '350 g', '15 cm');


$carrello = new Cart();

$carrello->addProduct($prodotto_1, $prodotto_2);

//var_dump($carrello)

?>