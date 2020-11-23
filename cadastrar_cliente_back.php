<?php
    if(count($_POST) > 0) {
        // 1. Pegar os valores do formulário
        $nome         = $_POST["nome"];
        $razao_social = $_POST["razao_social"];
        $cnpj         = $_POST["cnpj"]; 
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"];
        $endereco     = $_POST["endereco"];
        try {
            //conexao com o banco
            include("conexao_bd.php");
            $sql = "INSERT INTO cliente 
                    (razao_social, nome, cnpj, email, telefone, endereco)
                    VALUES 
                    (?, ?, ?, ?, ?, ?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$razao_social, $nome, $cnpj, $email, $telefone, $endereco]);

            $resultado_cad_cliente["msg"] = "Cliente Cadastrado com Sucesso!";
            $resultado_cad_cliente["cod"] = 1;
            $resultado_cad_cliente["style"] = "alert-success";
        } catch(PDOException $e) {
            echo "Inserção no banco de dados falhou: " . $e->getMessage();
            $resultado_cad_cliente["msg"] = "Cliente não Cadastrado.";
            $resultado_cad_cliente["cod"] = 0;
            $resultado_cad_cliente["style"] = "alert-danger";   
            }
        $conn = null;
    }
    include("painel_de_controle.php");
?>