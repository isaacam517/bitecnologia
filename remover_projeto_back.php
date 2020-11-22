<?php
    if(count($_GET) > 0) {
        // 1. Pegar os valores do formulário
        $id      = $_GET["id"];
      
        // TODO pegar o código do usuário logado (chave estrangeira)
        
        try {
            //conexao com o banco
            include("conexao_bd.php");

            //echo "Conexão realizada com sucesso.";
            $sql = "DELETE FROM projetos
            WHERE id=?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$id]);

            $resultado_remover_projeto["msg"] = "PROJETO REMOVIDO!";
            $resultado_remover_projeto["cod"] = 1;
            $resultado_remover_projeto["style"] = "alert-success";

        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_remover_projeto["msg"] = "ERRO AO REMOVER.";
            $resultado_remover_projeto["cod"] = 0;
            $resultado_remover_projeto["style"] = "alert-danger";

            }
        $conn = null;
    }

    

   
    include("painel_de_controle.php");
?>