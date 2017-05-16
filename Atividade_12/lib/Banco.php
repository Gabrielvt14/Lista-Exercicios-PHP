<?php

class Banco
{
	private $dns = 'mysql:host=localhost;dbname=alunos';
	private $user = 'root';
	private $pass = 'vertrigo';
	public $pdo;
	
	public function __construct()
	{
		$this->conecta();
	}

	public function conecta()
	{
		try {
			$this->pdo = new PDO($this->dns, $this->user, $this->pass);
		} catch (PDOException $e) {
			die('Erro ao conectar com a base de dados: ' . $e->getMessage());
		}

		return $this->pdo;

	}
}