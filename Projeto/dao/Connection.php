<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';
$port = "3306";

echo $senha;
$mysqli = new mysqli($host, $usuario, $senha, $database, $port);

if ($mysqli->error) {
    die('Falha ao conectar-se ao banco de dados.' . $mysqli->error);
}
