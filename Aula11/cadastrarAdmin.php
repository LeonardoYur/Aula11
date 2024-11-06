<?php
session_start();

if ($_GET["pa"] == ""  || $_GET["med"] == "" || $_GET["dt"] == "" || $_GET["hr"] == "" || $_GET["ds"] == "") {
    header("location: formularioAdmin.php");
}
include("conexao.php");

echo "Conectado!<br>";
echo "Recebido: <br>";
echo $_GET['pa'];
echo "<br>";


$codigoSQL = "INSERT INTO tblAdmin (id, nomePaciente, nomeMedicamento, dataAdmin, horaAdmin, dose) VALUES (NULL, :pa, :med, :dt, :hr, :ds)";
$excluir = "DELETE FROM tblReceitas WHERE tblReceitas.id = :id";

try {
    $comando = $conexao->prepare($codigoSQL);
    $apagar = $conexao->prepare($excluir);
    $resultado = $comando->execute(array('pa' => $_GET['pa'], 'med' => $_GET['med'], 'dt' => $_GET['dt'], 'hr' => $_GET['hr'], 'ds' => $_GET['ds']));
    $result = $apagar->execute(array('id' => $_SESSION['id']));

    if($resultado) {
        header("location: formularioAdmin.php");
    }
    if($result) {
        header("location: formularioAdmin.php");
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>