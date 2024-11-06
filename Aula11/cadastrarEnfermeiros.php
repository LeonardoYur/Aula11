<?php
if ($_GET["nome"] == "" || $_GET["crm"] == "" || $_GET["usu"] == "" || $_GET["se"] == "") {
    header("location: formularioEnfermeiro.php");
}
include("conexao.php");

echo "Conectado!<br>";
echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO tblEnfermeiros (id, nome, COREN, usuario, senha) VALUES (NULL, :nm, :crm, :us, :se)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'crm' => $_GET['crm'], 'us' => $_GET['usu'], 'se' => $_GET['se'] ));

    if($resultado) {
        header("location: formularioEnfermeiros.php");
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>