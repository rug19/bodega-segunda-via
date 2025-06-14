<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="container-fluid" style="height: 100vh;">
    <hr>
    <?php include '../components/header.php' ?>

    <hr>
    <section class="card card-body shadow">
        <div class="d-flex justify-content-between">
            <h2>Clientes</h2>

            <span>
                <a href=""
                    data-bs-toggle="offcanvas"
                    data-bs-target="#cadastro" class="btn btn-primary">
                    Novo Cliente
                </a>
            </span>
        </div>


        <hr>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Foto</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>Chiquim</td>
                    <td>chiquim@email.com</td>
                    <td>(85) 9 1234-1234</td>
                    <td> Foto </td>
                    <td>Rua das Flores, 2010</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>

            </tbody>
        </table>


        <div class="offcanvas offcanvas-end" tabindex="-1" id="cadastro" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Novo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="email">Email</label>
                    <input type="email" id="email"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="foto">URL da Foto</label>
                    <input type="url" id="foto"
                        class="form-control mb-3"
                        placeholder="Digite aqui">

                    <label for="endereco">Endereço</label>
                    <textarea id="endereco"
                        class="form-control mb-3"
                        placeholder="Digite aqui"></textarea>

                    <button class="btn btn-primary w-100">
                        PRONTO
                    </button>
                </form>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>