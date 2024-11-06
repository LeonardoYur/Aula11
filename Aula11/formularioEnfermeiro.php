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
<?php include("navbar2.php");?>

    <div class="container-sm">
        <form action="cadastrarEnfermeiros.php" method="get">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Insira o nome:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Insira o COREN:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="CRM" name="crm">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Insira o usuário:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Usuário" name="usu">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Insira a senha:</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Senha" name="se">
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