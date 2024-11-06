<?php
session_start();

include("conexao.php");

$_SESSION['funcao'] = $_GET['fun'];

$codigoSQL = "SELECT * FROM tblMedicos WHERE usuario LIKE :us AND senha LIKE :se";
$comando = $conexao->prepare($codigoSQL);
$comando->execute(array('us' => $_GET['usu'], 'se' => $_GET['se']));
$rowCount = $comando->rowCount();

if ($rowCount < 1) {
    header("location: login.php");
}
else {
    header("location: formularioPaciente.php");
}


?>