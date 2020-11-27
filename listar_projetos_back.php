<?php
    try {
        //conexao com o banco
        include("conexao_bd.php");
        // Pegar os projetos armazenados no BD:
        $consulta = $conn->prepare("SELECT *,
        CASE WHEN prazo > NOW() THEN
        '<span class=text-success><strong> No prazo </strong></span>'
        ELSE 
        '<span class=text-danger><strong> Fora do prazo </strong></span>'
        END AS 'prazos'
        FROM projetos");
        $consulta->execute();

        $result_lista_proj = $consulta->fetchAll();
       

        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    $conn = null;
    include("listar_projetos.php");
?>

