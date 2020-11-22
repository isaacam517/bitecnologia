<?php session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BI Tecnologia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- email: isaac@email.com -->
    <!-- senha: 123456 -->
</head>
<body>
    <div class="container text-center mt-5">
    <div>
    <h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>
    </div>
        <h1 class="display-1 mb-5">BI Tecnologia</h1>
        <h2 class="display-4 mb-5">Painel de Controle</h2>

        <?php if(isset($resultado_cad_projeto)):?>
            <div class="alert <?= $resultado_cad_projeto['style'] ?>">
                <?php echo $resultado_cad_projeto["msg"];?>
            </div>
        <?php endif; ?>
        <?php if(isset($resultado_alteracao_projeto)):?>
            <div class="alert <?= $resultado_alteracao_projeto['style'] ?>">
                <?php echo $resultado_alteracao_projeto["msg"];?>
            </div>
        <?php endif; ?>
        <?php if(isset($resultado_alteracao_cliente)):?>
            <div class="alert <?= $resultado_alteracao_cliente['style'] ?>">
                <?php echo $resultado_alteracao_cliente["msg"];?>
            </div>
        <?php endif; ?>
        <?php if(isset($resultado_cad_cliente)):?>
            <div class="alert <?= $resultado_cad_cliente['style'] ?>">
                <?php echo $resultado_cad_cliente["msg"];?>
            </div>
        <?php endif; ?>
        <?php if(isset($remover_projeto)):?>
            <div class="alert <?= $remover_projeto['style'] ?>">
                <?php echo $remover_projeto["msg"];?>
            </div>
        <?php endif; ?>
        <?php if(isset($resultado_remover_projeto)):?>
            <div class="alert <?= $resultado_remover_projeto['style'] ?>">
                <?php echo $resultado_remover_projeto["msg"];?>
            </div>
        <?php endif; ?>     
        <div class="row">
            <div class="col">
                <a href="cadastrar_cliente_form.php" type="button" class="btn btn-outline-secondary btn-lg">Cadastrar Cliente</a>
                <br/>
                <br/>
                <a href="listar_clientes_back.php" type="button" class="btn btn-outline-secondary btn-lg">Listar Clientes</a>
            </div>
            <div class="col">
                <a href="select_cliente_para_novo_projeto_back.php" type="button" class="btn btn-outline-secondary btn-lg">Cadastrar Projeto</a>
                <br/>
                <br/>
                <a href="listar_projetos_back.php" type="button" class="btn btn-outline-secondary btn-lg">Listar Projetos</a>
            </div>
        </div>
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
