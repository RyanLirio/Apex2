<?php
    session_start();

    if(isset($_COOKIE["userCookie"])){
        //header("Location: VerificarLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Alimentos</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cadastroUsuario.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/logo.png" type="image/png">
</head>
<body>
    <header class="header">
       <a href="#"><img src="img/logo.png" alt="Logo"></a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="#" style="--i:2;">Sair</a>
            <a href="#" style="--i:4;">Inicio</a>
            <a href="#" style="--i:6;">Contato</a>
        </nav>
    </header>
    
    <table>
        <tr>
            <th>Alimento</th>
            <th>Quantidade</th>
            <th>Preparado em</th>
            <th>Disponível até</th>

        </tr>

        <?php
            $total = count($_SESSION['alimentos']['nome']);

            for ($i = 0; $i < $total; $i++) {
                echo "<tr>";

                echo "<td>" . htmlspecialchars($_SESSION['alimentos']['nome'][$i]) . "</td>"; 
                echo "<td>" . htmlspecialchars($_SESSION['alimentos']['quant'][$i]) . "</td>"; 
                echo "<td>" . htmlspecialchars($_SESSION['alimentos']['preparo'][$i]) . "</td>"; 
                echo "<td>" . htmlspecialchars($_SESSION['alimentos']['disp'][$i]) . "</td>"; 
                echo "<td>";

                //remover
                echo "<form method='POST' action='Alimentos.php''>";
                echo "<input type='hidden' name='remove' value='$i'>"; // Índice a ser removido
                echo "<input type='submit' value='Reservar' onclick='return confirm(\"Tem certeza que deseja remover este dado?\")'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
       ?>
    </table>

    
        </form>
    </section>
</body>
</html>
