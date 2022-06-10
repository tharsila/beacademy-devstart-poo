<?php

declare(strict_types=1);

class Produto {
  /* atributos */
  private string $nome;
  private float $valor;

  /* metodos */

  public function getNome (): string {
    return $this->nome;
  }

  public function setNome (string $novoNome): void {
    $this->nome = $novoNome;
  }

  public function getValor (): float {
    return $this->valor;
  }

  public function setValor (float $novoValor): void {
    if ($novoValor < 0) {
      die("Insira um valor maior que zero");
    }

    $this->valor = $novoValor;
  }
}