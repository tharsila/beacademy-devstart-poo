<?php

include 'Produto.php';

$p1 = new Produto ();
$p1 -> setNome('Tenis Adidas');
$p1 -> setValor(299); 

/* $p2 = new Produto ();
$p2 -> nome = 'Tenis Nike';
$p2 -> valor = -100;  */


var_dump($p1);