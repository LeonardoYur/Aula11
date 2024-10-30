<?php 
$servidor = 'localhost';
$banco = 'dbSAM';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>