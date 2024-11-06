<?php
if ($_GET["pa"] == "" || $_GET["me"] == "" || $_GET["med"] == "" || $_GET["dt"] == "" || $_GET["hr"] == "" || $_GET["ds"] == "") {
    header("location: formularioCriar.php");
}
include("conexao.php");

echo "Conectado!<br>";
echo "Recebido: <br>";
echo $_GET['pa'];
echo "<br>";

$codigoSQL = "INSERT INTO tblReceitas (id, nomePaciente, nomeMedicamento, dataAdmin, horaAdmin, dose, nomeMedico) VALUES (NULL, :pa, :med, :dt, :hr, :ds, :me)";

try {
    $comando = $conexao->prepare($codigoSQL);
    $resultado = $comando->execute(array('pa' => $_GET['pa'], 'med' => $_GET['med'], 'dt' => $_GET['dt'], 'hr' => $_GET['hr'], 'ds' => $_GET['ds'], 'me' => $_GET['me'] ));

    if($resultado) {
        header("location: formularioCriar.php");
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>