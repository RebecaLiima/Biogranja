<!doctype html>
<html lang="en">

<head>
    <title>Biogranja</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        img {
            max-width: 100px;
            margin: 20px auto;
            display: block;
        }

        form {
            display: block;
            margin: 50px auto;
            max-width: 400px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="h1 mt-5 text-center">Sistema Biogranja</h1>

        <form action="" method="get">
            <img src="img/user-01.png" alt="">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-describedby="helpId">
            </div>
            <a href="" class="float-left mt-2 text-decoration-none text-info" data-toggle="modal" data-target="#modelId">Criar uma nova conta</a>
            <button type="submit" class="float-right w-50 btn btn-outline-info">Entrar</button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastrar Novo Usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="get">
                             
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuário</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-describedby="helpId">
                            </div>
                            <button type="submit" class="btn btn-outline-info float-right w-50">Salvar</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>