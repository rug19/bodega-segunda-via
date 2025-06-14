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

    <div style="height: 100vh;" class="row align-items-center">
        <div class="col-3 offset-3">
            <img width="90%" src="img/login.svg" alt="">
        </div>
        <div class="col-3">
            <div class="card card-body shadow">
                <h2>Login</h2>
                <hr>

                <div id="erro_email" style="display: none;" class="alert alert-danger">
                    <strong>Ops!</strong>
                    Email Invalido
                </div>
                <div id="erro_senha" style="display: none;" class="alert alert-danger">
                    <strong>Ops!</strong>
                    Senha Invalida
                </div>

                <form action="./src/pages/dashboard.php">
                    <input oninput="esconderErroEmail()" id="email" class="form-control mb-2" placeholder="Email" type="email">
                    <input oninput="esconderErroSenha()" id="senha" class="form-control mb-3" placeholder="Senha" type="password">
                    <button onclick="enviar()" class="btn btn-primary w-100">ENTRAR</button>

                    <div class="mt-3 text-center">
                        <a href="">Esqueci minha senha</a>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="js/login.js"></script>
</body>

</html>