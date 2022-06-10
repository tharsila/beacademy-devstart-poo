<?php

declare(strict_types=1);

class Curso {
  private string $curso;
  private string $duracao;
  private string $turno;

  public function getCurso(): string { 
    return $this->curso;
  }

  public function setCurso(string $novoCurso): void {
    $this->curso = $novoCurso;
  }

  public function getDuracao(): string {
    return $this->duracao;
  }

  public function setDuracao(string $novaDuracao): void {
    $this->duracao = $novaDuracao;
  }

  public function getTurno(): string {
    return $this->turno;
  }

  public function setTurno(string $novoTurno): void {
    $this->turno = $novoTurno;
  }
}