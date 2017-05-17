<?php

require_once '../lib/Banco.php';
require_once 'Aluno.php';

class Cadastrar extends Aluno
{
	protected $aluno;
	public $dns = 'mysql:host=localhost;dbname';
	public $user = 'root';
	public $pass = '';

	public function __construct($aluno)
	{
		$this->aluno = new Aluno($aluno);
		$this->insert();
	}

	public function insert()
	{
		try {
			$pdo = new PDO($this->dns, $this->user, $this->pass);
		} catch (PDOException $e) {
			die('ERROOOOO' . $e->getMessage());
		}
		$insert = "INSERT INTO aluno SET nome = '$this->aluno->getNome()', nota1 = '$this->aluno->getN1()', nota2 = '$this->getN2()', nota3 = '$this->getN3()', nota4 = '$this->getN4()'";
	/*	$stmt = $pdo->prepare($insert);
		$stmt->bindValue(':nome', $this->aluno->getNome());
		$stmt->bindValue(':nota1', $this->aluno->getN1());
		$stmt->bindValue(':nota2', $this->aluno->getN2());
		$stmt->bindValue(':nota3', $this->aluno->getN3());
		$stmt->bindValue(':nota4', $this->aluno->getN4());*/

		$pdo->query($insert);

	//	if ($stmt->execute()) {
	//		header('Location: ../index.php');	
	//	} else {
	//		die('Erro ao cadastrar aluno');
			//var_dump($this->aluno->getNome());exit;
	//	}
	}
}

$cadastrar = new Cadastrar($_POST);