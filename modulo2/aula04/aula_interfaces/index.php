<?php

include './Validar.php';
include './ValidarBR.php';
include './ValidarUS.php';

$cpf = '01528497260';

$br = new ValidarBR();
$br -> validarDocumento($cpf);

$us = new ValidarUS();
$us -> validarDocumento($cpf);