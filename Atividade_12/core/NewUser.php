<?php

require_once 'MostraAluno.php';

class NewUser
{
	private $nome, $email, $senha;
	public $aluno;

	public function __construct($dados)
	{
		$this->nome  = $dados['nome'];
		$this->email = $dados['email'];
		$this->senha = $dados['senha'];

		$this->aluno = new MostraAluno();

		$this->hashSenha();
		$this->insert();
	}

	public function hashSenha()
	{
		$this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
	}

	public function insert()
	{
		$insert = "INSERT INTO usuario(nome, email, senha)
						VALUES(:nome, :email, :senha)";
		$stmt = $this->aluno->pdo->prepare($insert);
		$stmt->bindValue(':nome', $this->nome);
		$stmt->bindValue(':email', $this->email);
		$stmt->bindValue(':senha', $this->senha);

		if ($stmt->execute()) {
			echo "<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso. Faça o login utilizando o E-mail e Senha cadastrados.');window.location.href='../index.php';</script>";
		} else {
			die('Erro ao cadastrar');
		}
	}
}

$newUser = new NewUser($_POST);