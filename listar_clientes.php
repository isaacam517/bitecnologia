<?php session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Tecnologia - Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>

    <div>
        <h1 class="mt-1">BI Tecnologia</h1>
        
        <a href="painel_de_controle.php" type="button" class="btn btn-outline-secondary btn-lg">Voltar para o Painel de Controle</a>
        <br/>
        <br/>
        <a href="cadastrar_cliente_form.php" type="button" class="btn btn-outline-secondary btn-lg">Cadastrar um novo Cliente</a>

    </div>
    <div class="container text-center mt-5">
        <h2 class="display-4 mb-5">Lista dos Clientes</h2>
        <br/><br/>
        <br/><br/>
        <br/><br/>
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



            <br/><br/>
            <br/><br/>
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