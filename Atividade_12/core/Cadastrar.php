<?php

require_once '../lib/Banco.php';
require_once 'Aluno.php';

class Cadastrar extends Aluno
{
	protected $aluno;

	public function __construct($aluno)
	{
		$this->aluno = new Aluno($aluno);
		$this->insert();
	}

	public function insert()
	{
		$pdo = new Banco();
		$insert = "INSERT INTO aluno(nome, nota1, nota2, nota3, nota4)
				VALUES(:nome, :nota1, :nota2, :nota3, :nota4)";
		$stmt = $pdo->prepare($insert);
		$stmt->bindValue(':nome', $this->aluno['nomeAluno']);
		$stmt->bindValue(':nota1', $this->aluno['nota1']);
		$stmt->bindValue(':nota2', $this->aluno['nota2']);
		$stmt->bindValue(':nota3', $this->aluno['nota3']);
		$stmt->bindValue(':nota4', $this->aluno['nota4']);

		if ($stmt->execute()) {
			header('Location: ../index.php');
		} else {
			die('Erro ao cadastrar aluno');
		}
	}
}

$cadastrar = new Cadastrar($_POST);