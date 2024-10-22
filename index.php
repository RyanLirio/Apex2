<?php

    session_start();
    if(isset($_COOKIE["userCookie"])){
        header("Location: VerificarLogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <main>
        <div class="title-img">
            <img src="img/logo.png" alt="logo">
            <br><br>
            <h2><span class="hover-box">COMO VOCÊ PRETENDE ENTRAR?</span></h2>
                <hr>

        </div>

        <div class="logar">
            <br>
            <h3>Já possui login?</h3>

        </div>

        <div class="wrapper">
            <section class="login-options">
                <div class="login">
                    <a href="LoginCNPJ.php">Empresa</a>
                    <a href="LoginONG.php">ONG</a>
                </div>
            </section>
            <br><br>

            <section class="NPC">
                <h3>Não possui cadastro?</h3>
            </section>
            <br>
<br><br>
            <section class="cadastro">
                <a href="CadastroUsuario.php">Cadastrar-se</a>
            </section>
        </div>
    </main>
</body>
</html>
