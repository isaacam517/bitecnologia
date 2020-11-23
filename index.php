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
        </div>
    </nav>
    <div class="container text-center mt-5">
        <h2 class="display-4 mb-5">Acesso ao Sistema!</h2>
        <form id="form_login" action="login_back.php" method="POST">
            <?php if(isset($resultado_login) && $resultado_login["cod"] == 0): ?>
                <div class="alert alert-danger">
                    <?php echo $resultado_login["msg"]; ?>  
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <input type="text" required class="form-control w-50" id="email" name="email" placeholder="Digite seu nome" />
                </div>
                <br/><br/>
                <div class="d-flex justify-content-center">
                <input type="password" required class="form-control w-50" id="senha" name="senha" placeholder="Digite sua senha" />
                </div>
                <br/><br/>
                <input  class="btn btn-primary btn-lg" type="submit" id="submeter" placeholder="Entrar" />
            </div>    
        </form>    
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<div class="d-flex justify-content-start">...</div>
<div class="d-flex justify-content-end">...</div>
<div class="">...</div>
<div class="d-flex justify-content-between">...</div>
<div class="d-flex justify-content-around">...</div>