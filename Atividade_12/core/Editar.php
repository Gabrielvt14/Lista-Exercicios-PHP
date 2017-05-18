<?php

class Editar
{
	private $nome, $n1, $n2, $n3, $n4, $media, $id;
	public $dns = 'mysql:host=localhost;dbname=alunos';
	public $user = 'root';
	public $pass = 'vertrigo';
	public $pdo;

	public function __construct($dados)
	{
		try {
			$this->pdo = new PDO($this->dns, $this->user, $this->pass);
		} catch (PDOException $e) {
			die('ERROOOOO' . $e->getMessage());
		}

		$this->nome = $dados['nomeAluno'];
		$this->n1 	= $dados['nota1'];
		$this->n2 	= $dados['nota2'];
		$this->n3 	= $dados['nota3'];
		$this->n4 	= $dados['nota4'];
		$this->id 	= $dados['id'];
		$this->setMedia();
		$this->update();
	}

	public function setMedia()
	{
		$this->media = ($this->getN1() + $this->getN2() + $this->getN3() + $this->getN4()) / 4;
	}

	public function getMedia()
	{
		return $this->media;
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

	public function getId()
	{
		return $this->id;
	}

	public function update()
	{
		$insert = "UPDATE aluno SET nome = :nome, nota1 = :nota1, nota2 = :nota2, nota3 = :nota3, nota4 = :nota4, media = :media WHERE id = :id";
		$stmt = $this->pdo->prepare($insert);
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':nota1', $this->getN1());
		$stmt->bindValue(':nota2', $this->getN2());
		$stmt->bindValue(':nota3', $this->getN3());
		$stmt->bindValue(':nota4', $this->getN4());
		$stmt->bindValue(':media', $this->getMedia());
		$stmt->bindParam(':id', $this->getId(), PDO::PARAM_INT);
		
		if ($stmt->execute()) {
			header('Location: ../index.php');
		} else {
			die('Erro ao cadastrar aluno');
		}
	}
}

$editar = new Editar($_POST);