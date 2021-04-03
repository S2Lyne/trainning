<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link  rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
    
        #tamanhoContainer{
            width: 500px;
        }

        #botao{
            background-color: #FF1168; /* cor de fundo */
            color:  #ffffff; /* cor da letra */
        }
    </style>

</head>
<body>
    
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">  
        <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">    
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" required>
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <div style="text-align: right; margin-top: 15px">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>





<script src="js/bootstrap.js"></script>

</body>
</html>