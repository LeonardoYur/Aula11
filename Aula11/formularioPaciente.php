<?php
include("conexao.php");


$codigoSQL = "SELECT * FROM tblMedicos WHERE usuario LIKE :us AND senha LIKE :se";
$comando = $conexao->prepare($codigoSQL);
$comando->execute(array('us' => $_GET['usu'], 'se' => $_GET['se']));
$rowCount = $comando->rowCount();


if ($rowCount < 1) {
    header("location: login.php"); 
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro enfermeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include("navbar2.php"); ?>

    <div class="container-sm">
        <form action="cadastrarPacientes.php" method="get">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Insira o nome:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Insira o leito:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Leito" name="le">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastre</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>