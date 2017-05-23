<?php

$frase = isset($_POST['frase']) ? $_POST['frase']: '';
$busca = isset($_POST['busca']) ? $_POST['busca']: '';

$strlen = strlen($frase);

echo substr_count($frase, $busca);