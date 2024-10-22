<?php
    session_start();
    if(isset($_COOKIE["userCookie"])){
        //header("Location: VerificarLogin.php");
     }
     if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cadastroUsuario.css">
   
    <link rel="icon" href="img/logo.png" type="image/png">

</head>
<body>
        <div class="wrapper">
        <h1>CADASTRO DE ALIMENTOs</h1>
        <?php if(isset($msg)) : ?>
            <h4><?= $msg ?></h4>
        <?php endif ?>
            <form method="POST" action="Alimentos.php">
                <section class="tipo-cadastro">

                <section class="entradas">
                    <input type="text" id="cnpj" name="nomeA" placeholder="Quais são os alimentos disponíveis?" >
                </section>

                <section class="entradas">
                    <input type="text" id="nomeorg" name="quant" placeholder="Quantidades disponível? Kg, L ou unidades." >
                </section>

                <section class="entradas">
                    <input type="text" id="cep" name="preparo" placeholder="Data/Hora de preparo" >
                </section>

                <section class="entradas">
                    <input type="text" name="disponibilidade" id="disponibilidade" placeholder="Até quando estará disponível?" >
                </section>

                <section class="termos">
                    <input type="checkbox" id="termos" name="termos" required>
                    <label for="termos">Concordo com os termos de contrato</label>
                </section>

                <section class="botao-enviar">
                    <button type="submit" class="enviar">Alimentar</button>
                </section>
            </form>
        </div>
    </main>
</body>
</html>