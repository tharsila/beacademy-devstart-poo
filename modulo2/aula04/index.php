<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('gatuni@email.com','gatuni');
$c1-> setNome('Gatuni');
$c1-> setCpf('000-000-000-00');
$c1-> setDataCadastro('25/05/2015');

$cpf = '01528497260';
Validar::validarCpf($cpf);

$g1 = new Gestor('email', 'yoshi', 5500);
$g1-> setNome('Yoshi');
$g1-> setCpf('000-000-000-00');
$g1-> setTurno('Noite');

$gg1 = new GestorGeral('gigante@email.com', 'gigante', 8000);

var_dump($c1, $g1, $gg1);
