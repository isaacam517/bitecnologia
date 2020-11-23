<?php
    try {
        //conexao com o banco
        include("conexao_bd.php");
        // Pegar os projetos armazenados no BD:
        $consulta = $conn->prepare("SELECT * FROM cliente");
        $consulta->execute();
        $cliente_para_projeto = $consulta->fetchAll();
        } catch(PDOException $e) {
            echo "Conexão falhou: aquii" . $e->getMessage();
        }
    $conn = null;
    include("cadastrar_projeto.php");
?>

