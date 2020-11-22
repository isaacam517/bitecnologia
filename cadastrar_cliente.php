<?php
    if(count($_POST) > 0) {
        // 1. Pegar os valores do formulário
        $nome         = $_POST["nome"];
        $razao_social = $_POST["razao_social"];
        $cnpj         = $_POST["cnpj"]; 
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"];
        $endereco     = $_POST["endereco"];
        // TODO pegar o código do usuário logado (chave estrangeira)
        
        try {
            //conexao com o banco
            include("conexao_bd.php");

            //echo "Conexão realizada com sucesso.";
            $sql = "INSERT INTO cliente 
                    (razao_social, cnpj, nome, email, telefone, endereco)
                    VALUES 
                    (?, ?, ?, ?, ?, ?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$nome, $razao_social, $cnpj, $email, $telefone, $endereco]);

            $resultado_cadastro["msg"] = "Cliente Cadastrado com Sucesso!";
            $resultado_cadastro["cod"] = 1;
            $resultado_cadastro["style"] = "alert-success";

        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_cadastro["msg"] = "Cliente não Cadastrado.";
            $resultado_cadastro["cod"] = 0;
            $resultado_cadastro["style"] = "alert-danger";

            }
        $conn = null;
    }
    include("dashboard.php");
?>