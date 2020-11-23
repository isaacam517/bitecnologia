<?php session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BI Tecnologia - Alterar dados do Clientes</title>
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
                        <a class="nav-link" href="listar_projetos_back.php" ><h5>Lista de Projetos</h5></a>
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
    <?php 
        if(isset($_GET["id"]) && $_GET["id"] > 0):
            $id = $_GET["id"];
            include("select_projeto_alterar_back.php");
    ?>
    <div class="container mt-2 jumbotron w-50">
        <h2 class="display-4 mb-5">ALterar dados do Projeto</h2>
        <form action="alterar_projeto_back.php" method="POST">
            <div class="form-group">
                <label>ID do Projeto</label>
                <input type="number" required value="<?= $alterar_projeto[0]['id'];?>" class="form-control w-25" id="id" name="id" readonly />
            </div> 
            <div class="form-group">
                <label>ID cliente</label>
                <input type="number" required value="<?= $alterar_projeto[0]['cliente'];?>" class="form-control w-25" id="cliente" name="cliente" placeholder="cliente" readonly/>
            </div>            
            <div class="form-group">
                <label>Nome do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['nome_projeto'];?>" class="form-control w-50" id="nome_projeto" name="nome_projeto" placeholder="Nome Projeto" />
            </div>    
            <div class="form-group">
                <label>Descrição do Projeto</label>
                <textarea type="text" required class="form-control w-50" id="descricao_projeto" name="descricao_projeto"><?= $alterar_projeto[0]['descricao_projeto'];?></textarea>
            </div>           
            <div class="form-group">
                <label>Valor do Projeto (R$)</label>
                <input type="number" required step=".01" value="<?= $alterar_projeto[0]['valor'];?>" class="form-control w-25" id="valor" name="valor" placeholder="valor" />
            </div>           
            <div class="form-group">
                <label>Prazo do Projeto</label>
                <input type="text" required value="<?= $alterar_projeto[0]['prazo'];?>" class="form-control w-25" id="prazo" name="prazo" placeholder="prazo" />
            </div>
            <div class="form-group">
                <label >Status:</label>
                <select class="form-control w-25" name="situacao">
                    <option value="<?= $alterar_projeto[0]['situacao'];?>"><?= $alterar_projeto[0]['situacao'];?></option>
                    <option value="APROVADO">APROVADO</option>
                    <option value="REPROVADO">REPROVADO</option>    
                    <option value="EM ANALISE">EM ANALISE</option>    
                </select>
            </div>                       
            <button type="submit" class="btn btn-primary btn-lg" id="submeter">Finalizar Alteração</button>
        </form>
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