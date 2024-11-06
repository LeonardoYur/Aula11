<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Receitas</title>
</head>

<body>
<?php include("navbar2.php");?>
    <div class="container mt-5">

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome paciente</th>
                    <th scope="col">Remédio</th>
                    <th scope="col">Dose</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexao.php");
                $comandoSQL = "SELECT  id, nomePaciente, nomeMedicamento, dose FROM tblReceitas";
                $comando = $conexao->prepare($comandoSQL);
                $resultado = $comando->execute();
                if ($resultado) {
                    while ($linha = $comando->fetch()) {
                        ?>
                        <tr>
                            <th scope='row'><?php echo $linha['id'] ?></th>
                            <td><?php echo $linha['nomePaciente'] . " "; ?></td>
                            <td><?php echo $linha['nomeMedicamento'] . " "; ?></td>
                            <td><?php echo $linha['dose'] . " "; ?></td>
                            <td class="d-flex gap-1"><a href='formularioAdmin.php?id=<?php echo $linha['id'] ?>' class='btn btn-primary'>Administrar</a></td>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>