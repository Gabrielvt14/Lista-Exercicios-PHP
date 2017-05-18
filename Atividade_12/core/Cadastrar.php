<?php

require_once 'Aluno.php';

class Cadastrar extends Aluno
{
	protected $aluno;
	public $dns = 'mysql:host=localhost;dbname=alunos';
	public $user = 'root';
	public $pass = 'vertrigo';

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
		$insert = "INSERT INTO aluno(nome, nota1, nota2, nota3, nota4, media)
					VALUES(:nome, :nota1, :nota2, :nota3, :nota4, :media)";
		$stmt = $pdo->prepare($insert);
		$stmt->bindValue(':nome', $this->aluno->getNome());	//	result: true
		$stmt->bindValue(':nota1', $this->aluno->getN1());	//	result: true
		$stmt->bindValue(':nota2', $this->aluno->getN2());	//	result: true
		$stmt->bindValue(':nota3', $this->aluno->getN3());	//	result: true
		$stmt->bindValue(':nota4', $this->aluno->getN4());	//	result: true
		$stmt->bindValue(':media', $this->aluno->getMedia());
		
		if ($stmt->execute()) {	//	da maneira que esta o código execute() retorna false
			header('Location: ../index.php');
		} else {
			die('Erro ao cadastrar aluno');
			//var_dump($this->aluno->getNome());exit;
		}
	}
}

$cadastrar = new Cadastrar($_POST);
$calcMedia = new CalculaMedia($_POST);