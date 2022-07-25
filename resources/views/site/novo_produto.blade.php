<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Produtos</title>

		<link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            @include('site._components.topo')
        </nav>
        <script>
			let writingPattern = /[^0-9]/;

			function currencyFormat(moeda){
				if(writingPattern.test(moeda.key)){
					moeda.preventDefault();
					return;
				}
				
				if(!moeda.target.value) return;

				valor = moeda.target.value.toString();
				valor = valor.replace(/[\D]+/g, '');
				valor = valor.replace(/([0-9]{1})$/g, ",$1");

				if(valor.length >= 6){
					while(/([0-9]{4})[,|\.]/g.test(valor)){
						valor = valor.replace(/([0-9]{1})$/g, ",$1");
						valor = valor.replace(/([0-9]{3})[,|\.]/g, ".$1");
					}
				}

				moeda.target.value = valor;
			}
		</script>
        <div class="container app">
            <div class="row">
                <div class="col-sm-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/">Todos os produtos</a></li>
                        <li class="list-group-item active"><a href="/novo_produto">Novo produto</a></li>
                        <li class="list-group-item"><a href="/todas_categorias">Todas as categorias</a></li>
                        <li class="list-group-item"><a href="/nova_categoria">Nova categoria</a></li>
                    </ul>
                </div>

                <div class="col-sm-9">
                    <div class="container pagina">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-primary">
                                    @if(empty($produto))
                                        Novo produto
                                    @else
                                        Alterar produto
                                    @endif
                                </h3>
                                <hr />
                                <form method="post" action="{{empty($produto) ? '/produtos/store' : '/produtos/update/'.$produto->id}}">
                                   @csrf
									<div class="form-group">
										<label class="text-secondary">Dados do produto:</label>
										<input type="text" name="nome_produto" value="{{empty($produto)? '' : $produto->nome_produto}}" class="form-control" placeholder="Nome do produto" required>
                                        <input type="text" name="preco_produto" value="{{empty($produto)? '' : $produto->preco_produto}}" class="form-control" placeholder="Preço" onkeypress="currencyFormat(event)" required>
                                        <input type="text" name="categoria_id" value="{{empty($produto)? '' : $produto->categoria_id}}" class="form-control" placeholder="Id da categoria" required>
                                    </div>
									<input type="submit" class="btn btn-primary" value="Cadastrar">
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </body>
</html>