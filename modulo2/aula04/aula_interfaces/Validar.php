<?php

declare(strict_types=1);

interface Validar
{
  public function validarDocumento (string $documento): void;
  /* public function validarNome (string $nome): void;
  public function validarCodigoPostal (string $codigoPostal): void; */
}