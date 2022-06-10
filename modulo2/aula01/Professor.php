<?php

declare(strict_types=1);

Class Professor {
  private string $nome;
  private string $areaDeAtuacao;
  private float $salario;

  public function getNomeProfessor(): string { 
    return $this->nome;
  }

  public function setNomeProfessor(string $novoNome): void {
    $this->nome = $novoNome;
  }

  public function getAreaDeAtuacao(): string { 
    return $this->areaDeAtuacao; 
  }

  public function setAreaDeAtuacao(string $novaAreaDeAtuacao): void {
    $this->areaDeAtuacao = $novaAreaDeAtuacao;
  }

  public function getSalario(): float { 
    return $this->salario; 
  }

  public function setSalario(float $novoSalario): void {
    $this->salario = $novoSalario;
  }
}