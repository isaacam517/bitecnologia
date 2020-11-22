<?php
    if(count($_GET) > 0) {
        // 1. Pegar os valores do formulário
        $id      = $_GET["id"];
      
        // TODO pegar o código do usuário logado (chave estrangeira)
        
        try {
            //conexao com o banco
            include("conexao_bd.php");

            //echo "Conexão realizada com sucesso.";
            $sql = "DELETE FROM cliente
            WHERE id=?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$id]);

            $resultado_cad_cliente["msg"] = "O CLIENTE FOI REMOVIDO DO SISTEMA!";
            $resultado_cad_cliente["cod"] = 1;
            $resultado_cad_cliente["style"] = "alert-success";

        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_cad_cliente["msg"] = "ERRO AO REMOVER.";
            $resultado_cad_cliente["cod"] = 0;
            $resultado_cad_cliente["style"] = "alert-danger";

            }
        $conn = null;
    }

    

   
    include("painel_de_controle.php");
?>