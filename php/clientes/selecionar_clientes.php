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

$sqlCriterio = "SELECT * FROM pessoas ORDER BY id DESC";

if(isset($_GET["start"]) && is_numeric($_GET["start"]))
	$sqlLimite = $sqlCriterio . " LIMIT " . $_GET["limit"];

if(isset($_GET["limit"]) && is_numeric($_GET["limit"]))
	$sqlLimite .= " OFFSET " . $_GET["start"];

$retorno = [];

$retorno["pessoas"] = $mysqli->query($sqlLimite)->fetch_all();
$retorno["total"] = $mysqli->query($sqlCriterio)->num_rows;



echo arrayToJSON($retorno);
