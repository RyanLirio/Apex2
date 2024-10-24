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
                
            <form form method="POST" action="ValidarCadastroUsuario.php"">
                <section>
                    <p>CADASTRE-SE COMO EMPRESA OU ONG</p>
                    <br>
                    <input type="radio" id="ong" name="option" required>
                    <label for="ong">ONG</label>
                    &emsp;
                    <input type="radio" id="empresa" name="option" required>
                    <label for="empresa">Empresa</label>
                </section>
                <br>
                <section class="entradas">
                    <input type="number" id="cnpj" name="cnpj" placeholder="CNPJ" required>
                </section>
                <br>
                <section class="entradas">
                    <input type="text" id="nomeorg" name="nomeorg" placeholder="Nome da organização" required>
                </section>
                <br>
                <section class="entradas">
                    <input type="tel" id="cep" name="cep" placeholder="CEP" required>
                </section>
                <br>
                <section class="entradas">
                    <input type="text" name="redes" id="redes" placeholder="Site/Redes Sociais" required>
                </section>
                <br>
                <section class="entradas">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </section>
                <br>
                <section>
                    <!-- Botão de envio -->
                    <button type="submit" class="enviar">CADASTRE-SE</button>
                    <br><br>
                    <!-- Botão de voltar -->
                    <a href="index.php"><button type="button" class="voltar">Voltar</button></a>
                </section>
            </form>

            </div>
        </main>

    </body>
</html>
