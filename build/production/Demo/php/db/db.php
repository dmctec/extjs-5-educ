<?php

// variaveis
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "signaltrack";

// trata variaveis
$mysqli = new mysqli($server, $user, $pass, $dbName);

// verifica conexao
if ($mysqli->connect_errno) {
    printf("Conexão Falhou: %s\n", mysqli_connect_error());
    exit();
}

?>