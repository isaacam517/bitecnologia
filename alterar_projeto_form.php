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
        include("select_projeto_alterar_back.php");
      
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
        <h2 class="display-4 mb-5">ALterar dados do Projeto</h2>
        <form action="alterar_projeto_back.php" method="POST">
        <div class="form-group">
                <label>ID do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['id'];?>" class="form-control" id="id" name="id" readonly />
            </div> 
            <div class="form-group">
                <label>ID cliente</label>
                <input type="text" required value="<?= $alterar_projeto[0]['cliente'];?>" class="form-control" id="cliente" name="cliente" placeholder="cliente" readonly/>
            </div>            
            <div class="form-group">
                <label>Nome do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['nome_projeto'];?>" class="form-control" id="nome_projeto" name="nome_projeto" placeholder="Nome Projeto" />
            </div>    
            <div class="form-group">
                <label>Descrição do Projeto</label>
                <textarea type="text" required class="form-control" id="descricao_projeto" name="descricao_projeto"><?= $alterar_projeto[0]['descricao_projeto'];?></textarea>
            </div>           
            <div class="form-group">
                <label>Valor do Projeto (R$)</label>
                <input type="number" required step=".01" value="<?= $alterar_projeto[0]['valor'];?>" class="form-control" id="valor" name="valor" placeholder="valor" />
            </div>           
            <div class="form-group">
                <label>Prazo do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['prazo'];?>" class="form-control" id="prazo" name="prazo" placeholder="prazo" />
            </div>             
            <div class="form-group">
                <label>Situação do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['situacao'];?>" class="form-control" id="situacao" name="situacao" placeholder="situacao" />
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