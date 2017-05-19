<?php

require_once 'MostraAluno.php';

class Check
{
	public $aluno;

	public function __construct()
	{
		$this->aluno = new MostraAluno();
	}

	public function isLoggedIn()
	{
	    if (! isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
	        return false;
	    }
	 
	    return true;
	}

	public function checkSession()
	{
		//var_dump($this->isLoggedIn());exit;
		if (! $this->isLoggedIn()) {
			echo "<script language='javascript' type='text/javascript'>alert('Você não esta logado no sistema, por favor, realize o login ou crie uma conta.');window.location.href='index.php';</script>";
		}
	}
}

$checkSession = new Check();
$checkSession->isLoggedIn();
$checkSession->checkSession();