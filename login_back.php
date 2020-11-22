<?php
if(count($_POST) > 0) {
    // echo "teste";  mostra na tela o que estiver entre aspas
    // print_r($_POST) mostra na tela o que estiver vindo do formulário
    //pegar valores
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
       
        //conexao com o banco
        include("conexao_bd.php");
        //echo "Conexão realizada com sucesso.";
        $consulta = $conn->prepare("SELECT * FROM funcionario WHERE email_funcionario=:email AND senha_funcionario=md5(:senha)");
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
        $consulta->execute();

        //Verificar se email e senha estão no banco
        $result = $consulta->FetchAll();
        $qtd_funcionario = count($result);
        
        if($qtd_funcionario ==1) {
            // TODO substituir pelo redirecionamento
            session_start();
            $_SESSION["email_funcionario"] = $email;
            $_SESSION["nome_funcionario"] = $result[0]["nome_funcionario"]; 


            // echo "<pre>";
            // print_r($_SESSION);
            // echo "</pre>";
            // exit;
        } else if($qtd_funcionario == 0){
            $resultado_login["msg"] = "Email e/ou Senha não conferem.";
            $resultado_login["cod"] = 0;
        }

        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    $conn = null;

}

    include("painel_de_controle.php");
?>

