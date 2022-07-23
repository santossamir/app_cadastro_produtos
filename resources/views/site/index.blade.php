<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Cadastro de Produtos</title>

		<link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            @include('site._components.topo')
        </nav>
            <div class="container app">
                <div class="row">
                    <div class="col-sm-3 menu">
                        <ul class="list-group">
                            <li class="list-group-item active"><a href="/index">Todos os produtos</a></li>
                            <li class="list-group-item"><a href="/novo_produto">Novo produto</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-9">
                        <div class="container pagina">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-primary">Todos os produtos</h3>
                                    <hr />
                                    <table class="table table-borderless">
                                        <thead class="text-secondary">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Preço</th>
                                                <th>Categoria</th>
                                                <th>Excluir</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>01</th>
                                                <td>Headset JBL</td>
                                                <td>R$ 350,00</td>
                                                <td>Headphones</td>
                                                <td><i class="fas fa-trash-alt fa-lg text-danger"></i></td>
                                                <td><i class="fas fa-edit fa-lg text-info"></i></td>
                                            </tr>
                                        </tbody>	
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
    </body>
</html>