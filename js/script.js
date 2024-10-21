function redirecionar() {
    // Obtendo as opções selecionadas
    var ong = document.getElementById('ong').checked;
    var empresa = document.getElementById('empresa').checked;
    
    // Verifica a seleção e redireciona para a página correspondente
    if (ong) {
        window.location.href = "paginaOng.html"; // Página para ONG
    } else if (empresa) {
        window.location.href = "paginaEmpresa.html"; // Página para Empresa
    } else {
        alert("Por favor, selecione ONG ou Empresa."); // Caso nenhuma opção esteja selecionada
    }
}