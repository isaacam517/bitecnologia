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
        $consulta = $conn->prepare("SELECT nome_funcionario FROM funcionario WHERE email_funcionario=:email AND senha_funcionario=md5(:senha)");
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->bindParam(':senha', $senha, PDO::PARAM_STR);
        $consulta->execute();

        //Verificar se email e senha estão no banco
        $result = $consulta->FetchAll();
        //print_r(count($result));
        $qtd_funcionario = count($result);

        if($qtd_funcionario ==1) {
            // TODO substituir pelo redirecionamento
            $resultado_login["msg"] = "Funcionário encontrado!";
            $resultado_login["cod"] = 1;
        } else if($qtd_funcionario == 0){
            $resultado_login["msg"] = "Email e/ou Senha não conferem.";
            $resultado_login["cod"] = 0;
        }

        } catch(PDOException $e) {
            echo "Conexão falhou: " . $e->getMessage();
        }
    $conn = null;

}

    include("dashboard.php");

?>

