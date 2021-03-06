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
                        <a class="nav-link" href="cadastrar_cliente_form.php" ><h5>Cadastrar Cliente</h5></a>
                    </li>
                </ul>
            </div>
            <div class="ml-5 ">
                <h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>
            </div>
            <div class="ml-2">
                <a class="" href="fim_session.php" style="color: white; text-decoration: none;"><h5>SAIR</h5></a>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-5 jumbotron w-75">
        <h2 class="display-4 mb-5">Lista dos Clientes</h2>
        <?php if(count($result_lista_clientes) > 0): ?>
        <table class="table">
            <tr>
                <th>Cod.</th>
                <th>Nome</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($result_lista_clientes as $c): ?>
            <tr>
                <td><?= $c["id"]; ?></td>
                <td><?= $c["nome"]; ?></td>
                <td><?= $c["razao_social"]; ?></td>
                <td><?= $c["cnpj"]; ?></td>
                <td><?= $c["email"]; ?></td>
                <td><?= $c["telefone"]; ?></td>
                <td><?= $c["endereco"]; ?></td>
                <td><a class="btn btn-outline-warning btn-sm" href="alterar_cliente_form.php?id=<?=$c["id"]?>">Alterar</a></td>
                <td><a class="btn btn-outline-danger btn-sm" onclick="return confirm('Remover o Cliente: <?= $c['nome']; ?>?')" href="remover_cliente_back.php?id=<?=$c["id"]?>">Remover</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php elseif(count($result_lista_clientes) == 0): ?>
            <h3>NO MOMENTO A LISTA ESTÁ VAZIA</h3>
        <?php endif; ?>
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