<?php


require_once ("model/aluno.php");
require_once ("model/turma.php");


$aluno1 = new Aluno();
$aluno1->setNome("Ronildo Ferreira");
$aluno1->setRa(123456789);
$aluno1->setNota1(8);
$aluno1->setNota2(7.75);
$aluno1->setNota3(9.5);
$aluno1->setNota4(10);




$aluno2 = new Aluno();
$aluno2->setNome("Ronildo Ferreira");
$aluno2->setRa(098765432);
$aluno2->setNota1(6);
$aluno2->setNota2(5.9);
$aluno2->setNota3(8);
$aluno2->setNota4(7);



$turma1 = new Turma("Turma1");

if($turma1->adicionaAluno($aluno1))
{
	echo "Adicionou".$aluno1->getNome()."<br>";
}else
{
	echo "Turma Cheia";
}




if($turma1->adicionaAluno($aluno2))
{
	echo "Adicionou".$aluno2->getNome()."<br>";
}else
{
	echo "Turma Cheia";
}


echo "Media: ".$turma1->mediaTurma();


?>