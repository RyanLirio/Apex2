<?php
    session_start();

    if(isset($_COOKIE["userCookie"])){
        if($_SESSION['tipo'] == "empresa"){
         header("Location: CadastroAlimentos.php");
        }elseif($_SESSION['tipo']  == "ong"){
         header("Location: BancoAlimentos.php");
        }
    }
?>