function trocarPaginaAnamnese(numero) {

    // pega todas as páginas
    const paginas = document.querySelectorAll('.pagina-anamnese');

    // esconde TODAS usando !important
    paginas.forEach(function(pagina) {

        pagina.style.setProperty(
            'display',
            'none',
            'important'
        );

    });


    // encontra a página escolhida
    const paginaEscolhida = document.querySelector(
        '.pagina-anamnese[data-pagina="' + numero + '"]'
    );


    // mostra somente ela
    if (paginaEscolhida) {

        paginaEscolhida.style.setProperty(
            'display',
            'block',
            'important'
        );

    }


    // remove ativo de todos os botões
    const botoes = document.querySelectorAll('.pagina-btn');

    botoes.forEach(function(botao) {
        botao.classList.remove('ativo');
    });


    // deixa o botão selecionado ativo
    const botaoAtual = document.getElementById(
        'btn-pagina-' + numero
    );

    if (botaoAtual) {
        botaoAtual.classList.add('ativo');
    }

}


/* QUANDO A PÁGINA ABRIR */

window.addEventListener('load', function () {

    trocarPaginaAnamnese(1);

});

