<?php
    try {
        //conexao com o banco
        include("conexao_bd.php");
        // Pegar os projetos armazenados no BD:
        $consulta = $conn->prepare("SELECT * FROM cliente");
        $consulta->execute();
        $result_lista_clientes = $consulta->fetchAll();

        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    $conn = null;
    include("listar_clientes.php");
?>

