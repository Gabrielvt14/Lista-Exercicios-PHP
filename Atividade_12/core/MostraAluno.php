<?php

class MostraAluno
{
	protected $nome;
	public $dns = 'mysql:host=localhost;dbname=alunos';
	public $user = 'root';
	public $pass = 'vertrigo';
	public $pdo;

	public function __construct()
	{
		try {
			$this->pdo = new PDO($this->dns, $this->user, $this->pass);
		} catch (PDOException $e) {
			die('Erro de conexao com o banco de dados: ' . $e->getMessage());
		}
	}

	public function mostraAluno()
	{
		$select = "SELECT id, nome, media, nota1, nota2, nota3, nota4 FROM aluno ORDER BY nome ASC";
		$stmt = $this->pdo->prepare($select);
		
		$stmt->execute();

		return $stmt;
	}

	public function contaAluno()
	{
		$count = "SELECT COUNT(*) AS total FROM aluno ORDER BY nome ASC";

		$stmt_count = $this->pdo->prepare($count);
		$stmt_count->execute();
		$total = $stmt_count->fetchColumn();

		return $total;
	}
}