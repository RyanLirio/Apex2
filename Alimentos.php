<?php
    session_start();
    
if(isset($_POST['nomeA']) && isset($_POST['quant']) && isset($_POST['preparo']) && isset($_POST['disponibilidade'])){
    $_SESSION['msg'] = "Alimento cadastrado com sucesso!";
    header("Location: CadastroAlimentos.php");
    
    $nome = $_POST['nomeA'];
    $quant = $_POST['quant'];
    $preparo = $_POST['preparo'];
    $disp = $_POST['disponibilidade'];

    $_SESSION['alimentos']['nome'][] = $nome;
    $_SESSION['alimentos']['quant'][] = $quant;
    $_SESSION['alimentos']['preparo'][]= $preparo;
    $_SESSION['alimentos']['disp'][] = $disp;
}else{
    $_SESSION['msg'] = "Não foi possível cadastrar o alimento!";
    header("Location: CadastroAlimentos.php");
}


