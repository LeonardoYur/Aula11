<?php
if ($_GET["nome"] == "" || $_GET["le"] == "") {
    header("location: formularioPaciente.php");
}
include("conexao.php");

echo "Conectado!<br>";
echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO tblPacientes (id, nome, leito) VALUES (NULL, :nm, :le)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'le' => $_GET['le']));

    if($resultado) {
	echo "Comando executado!<br>";
    } else {
	echo "Erro ao executar o comando!<br>";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>