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


$mysqli->query("DELETE FROM pessoas WHERE id = {$_POST["id"]}");

$retorno["success"] = true;
$retorno["message"] = "Pessoa salva com sucesso";
echo arrayToJSON($retorno);