<?php
    session_start();
    
if(isset($_POST['nomeA']) && isset($_POST['quant']) && isset($_POST['preparo']) && isset($_POST['disponibilidade'])){
    $_SESSION['msg'] = "Alimento cadastrado com sucesso!";
    header("Location: CadastroAlimentos.php");
    

    $nome = $_POST['nomeA'];
    $quant = $_POST['quant'];
    $preparo = $_POST['preparo'];
    $disp = $_POST['disponibilidade'];

    unset($_SESSION['nomeA']);
    unset($_SESSION['quant']);
    unset($_SESSION['preparo']);
    unset($_SESSION['disponibilidade']);

    $_SESSION['alimentos']['nome'][] = $nome;
    $_SESSION['alimentos']['quant'][] = $quant;
    $_SESSION['alimentos']['preparo'][]= $preparo;
    $_SESSION['alimentos']['disp'][] = $disp;

}elseif (isset($_POST['remove'])) {

    $index = (int)$_POST['remove'];  // Índice do dado a ser removido
    
    // Verifica se o índice é válido
    if (isset($_SESSION['alimentos']['nome'][$index])) {
        // Remove o alçimento selecionado
        unset($_SESSION['alimentos']['nome'][$index]);
        unset($_SESSION['alimentos']['quant'][$index]);
        unset($_SESSION['alimentos']['preparo'][$index]);
        unset($_SESSION['alimentos']['disp'][$index]);

        // Reorganiza os arrays
       $_SESSION['alimentos']['nome'] = array_values($_SESSION['alimentos']['nome']);
       $_SESSION['alimentos']['quant'] = array_values($_SESSION['alimentos']['quant']);
       $_SESSION['alimentos']['preparo'] = array_values($_SESSION['alimentos']['preparo']);
       $_SESSION['alimentos']['disp'] = array_values($_SESSION['alimentos']['disp']);
       header("Location: BancoAlimentos.php");
    }
}else{
    $_SESSION['msg'] = "Não foi possível cadastrar o alimento!";
    header("Location: CadastroAlimentos.php");
}