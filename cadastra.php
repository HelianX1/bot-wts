<?php
include 'function.php';
include 'coneccao/coneccao.php';
if (isset($_POST['produto']) && isset($_POST['palavra_chave'])) {
    $produto = $_POST['produto'];
    $palavra_chave = $_POST['palavra_chave'];
    $resultado = cadastra($coneccao, $produto, $palavra_chave);
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">ROBO</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="alterar.php">Alterar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastra.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Listar.php">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="excluir.php">Excluir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="cadastra.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Produto</label>
                    <textarea class="form-control" name="produto" id="exampleFormControlTextarea1" rows="15" require aria-required="true"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">palavra chave</label>
                    <textarea class="form-control" name="palavra_chave" id="exampleFormControlTextarea1" rows="2" required aria-required="true"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>