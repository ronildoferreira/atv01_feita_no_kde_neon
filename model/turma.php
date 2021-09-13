<?php 

class Turma
{

	protected $nome;
	protected $alunos;
	

	public function __contruct($nome)
	{
		$this->nome = $nome;
		$this->alunos = array();

	}

	public function setNome($nome)
	{
		$this->nome = $nome;

	}

	public function getNome()
	{
		return $this->nome;

	}

	public function adicionarAluno($aluno)
	{

		if(count($this->alunos) < 5)

			$this->alunos[] = $aluno;
			return true;

	}else{

		return false;
	}

	public function mediaTurma()
	{

		$soma = 0;
		foreach ($this->alunos as $aluno) 
		{
			$soma += $aluno->getMedia();
		}

		return $soma/count($this->alunos);
	}

}


?>