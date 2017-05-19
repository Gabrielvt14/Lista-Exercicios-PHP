<?php

require_once 'Check.php';

session_start();

class Logout
{
	public function logout()
	{
		$_SESSION['logged_in'] = false;

		session_destroy();

		header('Location: ../index.php');
	}
}

$logout = new Logout();
$logout->logout();