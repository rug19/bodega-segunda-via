<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/custom.css">
</head>

<body class="container-fluid" style="height: 100vh;">
    <?php include '../views/sideBar.php' ?>
    <hr class="d-none d-lg-block">
    <?php include '../views/header.php' ?>
    <hr class="d-none d-lg-block">
    <section class="card card-body shadow ">
        <div class="d-flex justify-content-between">
            <h2>Produtos</h2>
            <span>
                <a href=""
                    data-bs-toggle="offcanvas"
                    data-bs-target="#cadastro" class="btn btn-primary">
                    Novo Produto
                </a>
            </span>
        </div>
        <hr>
        <?php include '../views/tabelasProdutos.php' ?>
        <?php include '../views/cardProdutos.php' ?>
        <?php include '../views/cadastroProdutoSideBar.php' ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>