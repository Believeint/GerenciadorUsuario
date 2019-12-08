

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="Sistema Gerenciador de Usuários">
        <meta name="author" content="Elias Carvalho dos Santos">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="login-page bk-img">
            <div class="form-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h1 class="text-center text-bold mt-4x">Login</h1>
                            <div class="well row pt-2x pb-3x bk-light">
                                <div class="col-md-8 col-md-offset-2">
                                    <form method="post">

                                        <label for="us" class="text-uppercase text-sm">Seu Email</label>
                                        <input type="text" placeholder="Nome de Usuario" id="us" name="usuario" class="form-control mb" required>

                                        <label for="sen" class="text-uppercase text-sm">Senha</label>
                                        <input type="password" placeholder="Senha" id="sen" name="senha" class="form-control mb" required>

                                        <button class="btn btn-primary btn-block" name="login" type="submit">Entrar</button>
                                        <br/>
                                        <p>Não tem uma conta? <a href="registrar.php">Criar Conta</a> </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>