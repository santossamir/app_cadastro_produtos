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
                        <li class="list-group-item"><a href="/index">Todos os produtos</a></li>
                        <li class="list-group-item active"><a href="/novo_produto">Novo produto</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                    <div class="container pagina">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-primary">Novo produto</h3>
                                <hr />
                                <form method="post" action="produto_controller.php?acao=inserir">
									<div class="form-group">
										<label class="text-secondary">Dados do produto:</label>
										<input type="text" class="form-control" placeholder="Identificação" required>
										<input type="text" class="form-control" placeholder="Nome do produto" required>
									</div>
									<button class="btn btn-primary">Cadastrar</button>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </body>
</html>