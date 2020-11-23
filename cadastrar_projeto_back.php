<?php
    if(count($_POST) > 0) {
        // 1. Pegar os valores do formulário
        $nome_projeto      = $_POST["nome_projeto"];
        $descricao_projeto = $_POST["descricao_projeto"];
        $valor             = $_POST["valor"]; 
        $prazo             = $_POST["prazo"];
        $situacao            = $_POST["situacao"];
        $id_cliente           = $_POST["cliente"];
        
        try {
            //conexao com o banco
            include("conexao_bd.php");
            $sql = "INSERT INTO projetos 
                    (nome_projeto, descricao_projeto, valor, prazo, situacao, cliente)
                    VALUES 
                    (?, ?, ?, ?, ?, ?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$nome_projeto, $descricao_projeto, $valor, $prazo, $situacao, $id_cliente]);

            $resultado_cad_cliente["msg"] = "Projeto Cadastrado com Sucesso!";
            $resultado_cad_cliente["cod"] = 1;
            $resultado_cad_cliente["style"] = "alert-success";
        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_cad_cliente["msg"] = "Projeto não Cadastrado.";
            $resultado_cad_cliente["cod"] = 0;
            $resultado_cad_cliente["style"] = "alert-danger";
            }
        $conn = null;
    }
    include("painel_de_controle.php");
?>