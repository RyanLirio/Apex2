<?php
    session_start();
    if(isset($_COOKIE["userCookie"])){
        header("Location: VerificarLogin.php");
     }elseif(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $logado = "nao";

        $empresasCadastrados = ["empresa1", "empresa2", "empresa3"];
        $senhasCadastradas = ["senha1","senha2", "senha3"];

        for($i = 0; $i < count($empresasCadastrados); $i++){
            if( $login == $empresasCadastrados[$i] && $senha == $senhasCadastradas[$i]){
                $logado = "sim";
                $_SESSION['tipo'] = "empresa";
                break;
            }
        }

        if($logado == "sim"){
                $expira = time()+(200);
                setcookie('userCookie', $login, $expira);
                header("Location: CadastroAlimentos.php");
        }else{
            $_SESSION['erro'] = "Não foi possível fazer o login, tente novamente!";
            header("Location: LoginCNPJ.php");
        }
    }else{
        header("Location: index.php");
    }
    
?>
