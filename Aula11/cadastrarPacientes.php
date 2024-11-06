<?php
if ($_GET["nome"] == "" || $_GET["le"] == "") {
    header("location: formularioPaciente.php");
}
include("conexao.php");

$codigoSQL = "INSERT INTO tblPacientes (id, nome, leito) VALUES (NULL, :nm, :le)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'le' => $_GET['le']));

    if($resultado) {
        header("location: formularioPaciente.php");
    } 
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>