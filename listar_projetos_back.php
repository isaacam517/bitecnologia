<?php
   
    try {
       
        //conexao com o banco
        include("conexao_bd.php");
        //echo "Conexão realizada com sucesso.";
        // Pegar os projetos armazenados no BD:
        $consulta = $conn->prepare("SELECT * FROM projetos");
        $consulta->execute();

        $result_lista_proj = $consulta->fetchAll();
        // echo "<pre>";
        // print_r($result_lista_proj["projetos"]); 
        // echo "<pre>";
        // exit;

        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    $conn = null;

    include("listar_projetos.php");
?>

