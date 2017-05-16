<?php

class Aluno
{
	protected $nome;
	protected $media;
	protected $n1, $n2, $n3, $n4;

	public function __construct($dados)
	{
		$this->nome = $dados['nomeAluno'];
		$this->n1 	= $dados['nota1'];
		$this->n2 	= $dados['nota2'];
		$this->n3 	= $dados['nota3'];
		$this->n4 	= $dados['nota4'];
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getN1()
	{
		return $this->n1;
	}

	public function getN2()
	{
		return $this->n2;
	}

	public function getN3()
	{
		return $this->n3;
	}

	public function getN4()
	{
		return $this->n4;
	}
}