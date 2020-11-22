<?php
    if(count($_POST) > 0) {
        // 1. Pegar os valores do formulário
        $nome         = $_POST["nome"];
        $razao_social = $_POST["razao_social"];
        $cnpj         = $_POST["cnpj"]; 
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"];
        $endereco     = $_POST["endereco"];
        $id           = $_POST["id"];

        // echo "<pre>";
        // print_r($id); 
        // echo "<pre>";
        // exit;
        // TODO pegar o código do usuário logado (chave estrangeira)
        
        try {
            //conexao com o banco
            include("conexao_bd.php");

            //echo "Conexão realizada com sucesso.";
            $sql = "UPDATE cliente SET nome = ?, razao_social = ?, cnpj = ?, email = ?, telefone = ?, endereco = ?
            WHERE id=?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$nome, $razao_social, $cnpj, $email, $telefone, $endereco, $id]);

            $resultado_alteracao_cliente["msg"] = "DADOS DO CLIENTE FOI ALTERADO COM SUCESSO!";
            $resultado_alteracao_cliente["cod"] = 1;
            $resultado_alteracao_cliente["style"] = "alert-success";

        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_alteracao_cliente["msg"] = "ERRO AO ALTERAR DADOS DO CLIENTE.";
            $resultado_alteracao_cliente["cod"] = 0;
            $resultado_alteracao_cliente["style"] = "alert-danger";

            }
        $conn = null;
    }

    include("painel_de_controle.php");
?>