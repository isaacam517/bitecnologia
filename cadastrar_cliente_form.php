<?php session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Tecnologia - Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
            <a class="navbar-brand h1 mb-0 mr-5 " href="#"><h4 class="display-4">BI Tecnologia</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite" >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="painel_back.php" ><h5>Painel de controle</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listar_clientes_back.php"><h5>Lista de Clientes</h5></a>
                    </li>
                </ul>
            </div>
            <div class="ml-2 ">
                <h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>
            </div>
            <div class="ml-2">
                <a class="" href="fim_session.php" style="color: white; text-decoration: none;"><h5>SAIR</h5></a>
            </div>
        </div>
    </nav>
<div class="container mt-2 jumbotron w-50">
        <h2 class="display-4 mb-2">Cadastrar novo Cliente</h2>
        <form action="cadastrar_cliente_back.php" method="POST">
            <div class="form-group">
            <label>Nome do Cliente</label>
                <input type="text" required class="form-control w-50" id="nome" name="nome" placeholder="Nome" />
            </div>    
            <div class="form-group">
                <label>Razão Social</label>
                <input type="text" required class="form-control w-50" id="razao_social" name="razao_social" placeholder="Razão social" />
            </div>           
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" required class="form-control w-25" id="cnpj" name="cnpj" placeholder="CNPJ" />
            </div>           
            <div class="form-group">
                <label>Email</label>
                <input type="text" required class="form-control w-50" id="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" required class="form-control w-25" id="telefone" name="telefone" placeholder="Telefone" />
            </div>             
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" required class="form-control" id="endereco" name="endereco" placeholder="Rua, Nº, Bairro, Cidade" />
            </div>           
            <button type="submit" class="btn btn-primary btn-lg" id="submeter">Cadastrar</button>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php else: ?>
    <div class="alert alert-danger">
        <h4>Você não está logado no Sistema.</h4>
    </div>
<?php endif; ?>