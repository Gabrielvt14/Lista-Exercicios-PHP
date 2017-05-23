<?php

	/**
	 * Efetue um algorítmo PHP que receba quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a
	 * mensagem de reprovado para média inferior a 7.0.
	 */

class Media
{
	private $n1, $n2, $n3, $n4, $media;

	public function __construct($dados)
	{
		$this->n1 = $dados['n1'];
		$this->n2 = $dados['n2'];
		$this->n3 = $dados['n3'];
		$this->n4 = $dados['n4'];
	}

	public function media()
	{
		return $this->media = ($this->n1 + $this->n2 + $this->n3 + $this->n4) / 4;
	}

	public function getMedia()
	{
		return $this->media;
	}
}

$media = new Media($_POST);
$media->media();

if ($media->getMedia() >= 7) {
	header('Location: index.php?situacao=aprovado');
} else {
	header('Location: index.php?situacao=reprovado');
}