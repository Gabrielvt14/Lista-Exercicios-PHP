<?php

session_start();

require_once 'Check.php';

class Delete
{
	private $id;
	public $dns = 'mysql:host=localhost;dbname=alunos';
	public $user = 'root';
	public $pass = 'vertrigo';
	public $pdo;

	public function __construct($id)
	{
		try {
			$this->pdo = new PDO($this->dns, $this->user, $this->pass);
		} catch (PDOException $e) {
			die('ERROOOOO' . $e->getMessage());
		}

		$this->id = $id['id'];
		$this->del();
	}

	public function getId()
	{
		return $this->id;
	}

	public function del()
	{
		$delete = "DELETE FROM aluno WHERE id = :id";
		$stmt = $this->pdo->prepare($delete);
		$stmt->bindValue(':id', $this->getId(), PDO::PARAM_INT);

		if ($stmt->execute()) {
			header('Location: ../home.php');
		} else {
			echo "<script language='javascript' type='text/javascript'>alert('Erro ao deletar usuário.');window.location.href='../home.php';</script>";
		}
	}
}

$delete = new Delete($_GET);