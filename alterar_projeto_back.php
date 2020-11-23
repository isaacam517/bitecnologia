<?php
    if(count($_POST) > 0) {
        // 1. Pegar os valores do formulário
        $nome_projeto      = $_POST["nome_projeto"];
        $descricao_projeto = $_POST["descricao_projeto"];
        $valor             = $_POST["valor"]; 
        $prazo             = $_POST["prazo"];
        $situacao          = $_POST["situacao"];
        $cliente           = $_POST["cliente"];
        $id                = $_POST["id"];
        try {
            //conexao com o banco
            include("conexao_bd.php");

            $sql = "UPDATE projetos SET nome_projeto = ?, descricao_projeto = ?, valor = ?, prazo = ?, situacao = ?, cliente = ?
            WHERE id=?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$nome_projeto, $descricao_projeto, $valor, $prazo, $situacao, $cliente, $id]);

            $resultado_alteracao_projeto["msg"] = "OS DADOS DO PROJETO FORAM ALTERADO COM SUCESSO!";
            $resultado_alteracao_projeto["cod"] = 1;
            $resultado_alteracao_projeto["style"] = "alert-success";
        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_alteracao_projeto["msg"] = "ERRO AO ALTERAR DADOS DO CLIENTE.";
            $resultado_alteracao_projeto["cod"] = 0;
            $resultado_alteracao_projeto["style"] = "alert-danger";
            }
        $conn = null;
    }
    include("painel_back.php");
?>