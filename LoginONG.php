<?php
    session_start();

    if(isset($_COOKIE["userCookie"])){
         header("Location: VerificarLogin.php");
     }if(isset($_SESSION['erro'])){
        $erro = $_SESSION['erro'];
        unset($_SESSION['erro']);
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CNPJ</title>
<link rel="stylesheet" href="css/LoginONG.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
    rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
<main>

    <div class="wrapper">

        <form method="POST" action="ValidarONG.php">
            
            <h1>Login ONG</h1>
            <div class="entradas">
                <input type="text" placeholder="login" name="login" id="login" >
                <i class='bx bxs-user'></i>
            </div>

            <div class="entradas">
                <input type="password" placeholder="Senha" name="senha" id="senha">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="esqueci-a-senha">
                <a href="#">Esqueceu a senha?</a>
            </div>
            <?php if(isset($erro)) : ?>
                <h4><?= $erro ?></h4>
            <?php endif ?>
            <div>
                <button type="submit" class="enviar">Login</button>
            </div>

            <div class="registre">
                <p>Ainda não possui uma conta? <a href="cadastroUsuario.php">Criar</a></p>
            </div>
            <a href="index.php"><button type="button" class="voltar">Voltar</button></a>
        </form>

    </div>

    </main>

</body>
</html>