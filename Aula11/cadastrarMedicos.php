<?php
if ($_GET["nome"] == "" || $_GET["esp"] == "" || $_GET["crm"] == "" || $_GET["usu"] == "" || $_GET["se"] == "") {
    header("location: formularioMedico.php");
}
include("conexao.php");

echo "Conectado!<br>";
echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO tblMedicos (id, nome, especialidade, CRM, usuario, senha) VALUES (NULL, :nm, :es, :crm, :us, :se)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'es' => $_GET['esp'], 'crm' => $_GET['crm'], 'us' => $_GET['usu'], 'se' => $_GET['se'] ));

    if($resultado) {
        header("location: formularioMedico.php");
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>