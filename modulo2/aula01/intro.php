<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$aluno1 = new Aluno();
$aluno1-> setNomeAluno('Tharsila');
$aluno1-> setEmailAluno('tharsilapaula@gmail.com');

$cursoPHP = new Curso();
$cursoPHP-> setCurso('PHP');
$cursoPHP-> setDuracao('3 meses');
$cursoPHP-> setTurno('Noite');

$professorPHP = new Professor();
$professorPHP-> setNomeProfessor('Alessandro');
$professorPHP-> setAreaDeAtuacao('Back-end');
$professorPHP-> setSalario(5000);

var_dump($aluno1, $cursoPHP, $professorPHP);
