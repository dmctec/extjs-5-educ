<?php

include_once "../db/db.php";

function arrayToJSON($array = array())
{
	if(is_array($array))
	{
		array_walk_recursive($array, function(&$value){
			$value = utf8_encode($value);
		});
	}
	return json_encode($array);
}

if(empty($_POST["id"]))
	$sql = "INSERT INTO pessoas SET nome = '{$_POST["nome"]}', cpfcnpj = '{$_POST["cpfcnpj"]}', logradouro = '{$_POST["logradouro"]}', numero = '{$_POST["numero"]}', cep = '{$_POST["cep"]}', complemento = '{$_POST["complemento"]}'";
else
	$sql = "UPDATE pessoas SET nome = '{$_POST["nome"]}', cpfcnpj = '{$_POST["cpfcnpj"]}', logradouro = '{$_POST["logradouro"]}', numero = '{$_POST["numero"]}', cep = '{$_POST["cep"]}', complemento = '{$_POST["complemento"]}' WHERE id = {$_POST["id"]}";

$mysqli->query($sql);


$retorno["success"] = true;
$retorno["message"] = "Pessoa salva com sucesso";
echo arrayToJSON($retorno);

