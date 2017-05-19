<?php

require_once 'MostraAluno.php';

class Login
{
	public $email, $senha;
	public $aluno;

	public function __construct($dados)
	{
		$this->aluno = new MostraAluno();

		$this->email = $dados['email'];
		$this->senha = $dados['senha'];

		$this->fazLogin();
	}

	public function fazLogin()
	{
		$select = "SELECT id, nome, senha FROM usuario WHERE email = :email";
		$stmt = $this->aluno->pdo->prepare($select);
		$stmt->bindValue(':email', $this->email);

		$stmt->execute();

		$array = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if ( (count($array) < 1) || (! password_verify($this->senha, $array[0]['senha'])) ) {
			echo "<script language='javascript' type='text/javascript'>alert('Email ou senha incorreto.');window.location.href='../index.php';</script>";
			exit;
		}

		//	inicia sessão
		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['user_id']   = $array[0]['id'];
		$_SESSION['user_name'] = $array[0]['nome'];

		header('Location: ../home.php');
	}
}

$login = new Login($_POST);