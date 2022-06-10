<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas unissex');
$c2 = new Categoria('Tenis', 'Tenis masculino');
$c3 = new Categoria('Calçados', 'Calçados em geral');



$p1 = new Produto ('Tenis Adidas', 299, $c2 );
$p1 -> setDescricao('Tenis para corrida');
/* $p1 -> setNome('Tenis Adidas');
$p1 -> setValor(299);  */

$p2 = new Produto ('Tenis Nike', 100, $c2);
/* $p2 -> setNome('Tenis Nike');
$p2 -> setValor(100);  */

$p3 = new Produto ('Saia jeans', 30, $c1);

$p4 = new Produto ('Sandalia', 40, $c3);


var_dump($p1, $p2, $p3, $p4);