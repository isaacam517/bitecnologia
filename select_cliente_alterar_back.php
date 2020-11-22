<?php
   
    try {
       
        //conexao com o banco
        include("conexao_bd.php");
        //echo "Conexão realizada com sucesso.";
        // Pegar os projetos armazenados no BD:
        $consulta = $conn->prepare("SELECT * FROM cliente WHERE id=?");
        $consulta->execute([$id]);

        $alterar_clientes = $consulta->fetchAll();

        } catch(PDOException $e) {
            echo "Conexão falhou: aquii" . $e->getMessage();
        }
    $conn = null;
   
?>

