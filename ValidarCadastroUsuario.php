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
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/cadastroUsuario.css">
        <link rel="icon" href="img/logo.png" type="image/png">
    </head>
    <body>
        <main>

            <h1>Página de cadastro</h1>
            
            <div class="wrapper">
                <h2>Os dados para o seu cadastro foram coletados com sucesso. Em breve entraremos em contato.</h2>
                <section>
                    <!-- Botão de voltar -->
                    <a href="index.php"><button type="button" class="voltar">Voltar</button></a>
                </section>
            </form>

            </div>
        </main>

    </body>
</html>
