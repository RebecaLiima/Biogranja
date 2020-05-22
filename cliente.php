<!doctype html>
<html lang="en">

<head>
    <title>Cliente - Biogranja</title>
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

        .menu {
            display: flex;
            flex-direction: row;
            padding: 20px 0;
            justify-content: flex-end;
            width: 100%;
            list-style: none;
            border-bottom: 1px solid #d9d0d0;
        }

        .menu li {

            margin-left: 40px;

        }

        a {
            color: #524d4d;
            font-size: 18px;
            font-weight: 300;
        }

        a:hover {
            text-decoration: none;
            color: #333
        }
    </style>
</head>

<body>

    <div class="container">
        <ul class="menu">
            <li><a href="#">Funcionário</a></li>
            <li><a href="#">Adm</a></li>
            <li><a href="#">Sair</a></li>
        </ul>
        <h1 class="h1 mt-5 text-center mb-5">Sistema Biogranja - Cliente</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info btn-small mb-3" data-toggle="modal" data-target="#modelId">
            Lista de Compras
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th class="w-50">Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ovo</td>
                    <td>R$ 0,25</td>
                    <td>10</td>
                    <td>R$ 2,59</td>
                    <td>
                        <a name="btn-editar" id="btn-editar" class="btn btn-secondary" href="#" role="button">Editar</a>
                        <a name="btn-excluir" id="btn-excluir" class="btn btn-danger" href="#" role="button">Excluir</a>
                    </td>
                </tr>

            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Lista de compras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="get">

                            <div class="form-group">
                                <label for="raca">Produto</label>
                                <select name="descricao" id="descricao" class="form-control">
                                    <option value="Ovo">Ovo</option>
                                    <option value="Frango">Frango</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="preco">Preço da Unidade</label>
                                <input type="text" name="preco" id="preco" class="form-control" placeholder="Preço da Unidade" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="text" placeholder="Quantidade" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" placeholder="Total" class="form-control">
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