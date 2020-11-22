<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Tecnologia - Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div>
        <h1 class="mt-1">BI Tecnologia</h1>
        <br/>
        <br/>
        <a href="painel_de_controle.php">Voltar</a>
        <br/>
        <br/>
        <a href="listar_projetos_back.php">Lista de Projetos</a>
        <br/>
        <br/>
    </div>
<div class="container mt-5">
        <h2 class="display-4 mb-5">Cadastrar novo Projeto</h2>
       
        <form action="cadastrar_projeto_back.php" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" required class="form-control" id="nome_projeto" name="nome_projeto" placeholder="Nome do Projeto" />
            </div>    
            <div class="form-group">
                <label>Descrição:</label>
                <textarea required class="form-control" id="descricao_projeto" name="descricao_projeto" rows="4" cols="40" placeholder="Descrição do Projeto" ></textarea> 
            </div>           
            <div class="form-group">
                <label>Valor:</label>
                <input type="number" step=".01" required class="form-control" id="valor" name="valor" placeholder="Valor do Projeto" />
            </div>           
            <div class="form-group">
                <label>Prazo:</label>
                <input type="date" required class="form-control" id="prazo" name="prazo" placeholder="Prazo" />
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select name="situacao">
                    <option value="EM ANALISE">Em Análise</option>
                    <option value="APROVADO">Aprovado</option>
                    <option value="REPROVADO">reprovado</option>    
                </select>
            </div>             
            <div class="form-group">
                <label>Nome do Cliente:</label>
                <select name="cliente">
                <?php foreach($cliente_para_projeto as $c): ?>
                    <option value="<?= $c["id"]; ?>"><?= $c["nome"]; ?></option>
                <?php endforeach; ?>
                </select>
            </div>           
            <button type="submit" class="btn btn-primary btn-lg" id="submeter">Cadastrar Projeto</button>
        </form>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>