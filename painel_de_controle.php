<?php //session_start();?>
<?php if (isset($_SESSION["nome_funcionario"])): ?> 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BI Tecnologia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- email: isaac@email.com -->
    <!-- senha: 123456 -->
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
                        <a class="nav-link" href="https://bitecnologia.com.br/" target="_blank">Site BITecnologia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/isaacam517/" target="_blank">githup do Desenvolvedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/isaacam517/bitecnologia" target="_blank">Codigos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                            Social
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://www.linkedin.com/in/isaac-martiniano-aa799a147/" target="_blank">LinkedIn</a>
                            <a class="dropdown-item" href="https://www.instagram.com/isaacmartiniano/" target="_blank">Instagram</a>
                            <a class="dropdown-item" href="https://www.facebook.com/isaac.martiniano/" target="_blank">Facebook</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ml-2">
                <h5>Olá, <?= $_SESSION["nome_funcionario"]; ?></h5>
            </div>
            <div class="ml-2">
            <a class="" href="fim_session.php" style="color: white; text-decoration: none;"><h5>SAIR</h5></a>
            </div>
        </div>
    </nav>
    <div class="container text-center mt-5">
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
    
        <h2 class="display-4 mb-5">Painel de Controle</h2>
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Cadastrar/Visualizar Projetos</a>
        <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Cadastrar/Visualizar Clientes</a>
    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <a href="select_cliente_para_novo_projeto_back.php" type="button" class="btn btn-outline-secondary btn-lg">Cadastrar Projeto</a>
                    <a href="listar_projetos_back.php" type="button" class="btn btn-outline-secondary btn-lg">Listar Projetos</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                <a href="cadastrar_cliente_form.php" type="button" class="btn btn-outline-secondary btn-lg">Cadastrar Cliente</a>
                <a href="listar_clientes_back.php" type="button" class="btn btn-outline-secondary btn-lg">Listar Clientes</a>
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
