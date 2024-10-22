<?php
    session_start();
    if(isset($_COOKIE["userCookie"])){
        header("Location: VerificarLogin.php");
     }elseif(isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $logado = "nao";

        $empresasCadastrados = ["ong1", "ong2", "ong3"];
        $senhasCadastradas = ["senha1","senha2", "senha3"];

        for($i = 0; $i < count($empresasCadastrados); $i++){
            if( $login == $empresasCadastrados[$i] && $senha == $senhasCadastradas[$i]){
                $logado = "sim";
                $_SESSION['tipo'] = "ong";
                break;
            }
        }

        if($logado == "sim"){
                $expira = time()+(200);
                setcookie('userCookie', $login, $expira);
                header("Location: BancoAlimentos.php");
        }else{
            $_SESSION['erro'] = "Não foi possível fazer o login, tente novamente!";
            header("Location: LoginONG.php");
        }
    }else{
        header("Location: index.php");
    }
    
?>