<?php

declare(strict_types=1);

class Aluno {
  private string $nome;
  private string $email;

  public function getNomeAluno():string { 
    return $this->nome;
  }

  public function setNomeAluno(string $novoNome): void {
    $this->nome = $novoNome;
  }

  public function getEmailAluno():string {
    return $this->email;
  }

  public function setEmailAluno(string $novoEmail):void {
    $this->email = $novoEmail;
  }

}