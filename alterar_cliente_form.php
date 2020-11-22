<?php session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Tecnologia - Alterar dados do Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php 
    
    if(isset($_GET["id"]) && $_GET["id"] > 0):
        $id = $_GET["id"];
        include("select_cliente_alterar_back.php");
      
?>
<h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>

    <div>
        <h1 class="mt-1">BI Tecnologia</h1>
        <br/>
        <br/>
        <a href="painel_de_controle.php">Voltar para o painel</a>
        <br/>
        <br/>
        <a href="listar_clientes_back.php">Voltar para a lista</a>
        <br/>
        <br/>
    </div>
<div class="container mt-5">
        <h2 class="display-4 mb-5">Alterar dados do Cliente</h2>
        <form action="alterar_cliente_back.php" method="POST">
            <div class="form-group">
                <label>ID do Cliente:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['id'];?>" class="form-control" id="id" name="id" readonly />
            </div> 
            <div class="form-group">
                <label>Nome do Cliente:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['nome'];?>" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" />
            </div>    
            <div class="form-group">
                <label>Razão social:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['razao_social'];?>" class="form-control" id="razao_social" name="razao_social" placeholder="Razão social" />
            </div>           
            <div class="form-group">
                <label>CNPJ:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['cnpj'];?>" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" />
            </div>           
            <div class="form-group">
                <label>Email:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['email'];?>" class="form-control" id="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['telefone'];?>" class="form-control" id="telefone" name="telefone" placeholder="Telefone" />
            </div>             
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" required value="<?= $alterar_clientes[0]['endereco'];?>" class="form-control" id="endereco" name="endereco" placeholder="Endereço" />
            </div>           
            <button type="submit" class="btn btn-primary btn-lg" id="submeter">Finalizar Alteração</button>
        </form>
        <?php endif; ?>
       
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

<?php else: ?>
    <div class="alert alert-danger">
        <h4>Você não está logado no Sistema.</h4>
    </div>
<?php endif; ?>