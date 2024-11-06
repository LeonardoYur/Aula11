<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Receita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php include("navbar2.php");?>

    <div class="container-sm">
        <form action="cadastrarCriar.php" method="get">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Insira o nome do paciente:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do paciente" name="pa">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Insira o nome do médico:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do médico" name="me">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nome do medicamento:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Medicamento"
                    name="med">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Data da administração:</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Data" name="dt">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Hora da administração:</label>
                <input type="time" class="form-control" id="formGroupExampleInput2" placeholder="Hora" name="hr">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Dose:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Dose" name="ds">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Cadastre-se</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>