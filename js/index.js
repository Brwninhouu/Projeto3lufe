
//quando o documento estiver pronto, executar runIndex
$(document).ready(runIndex);


//função que processa o documento, quando for clicado, disparar clickArticle
function runIndex(){

$(document).on('click', '.article', clickArticle);

}

//ação de clicar em um artigo
function clickArticle(){


    //obtém o id do atributo 'data-id' da div.article
id = $(this).attr('data-id');  

// redireciona para a página que exibe um artigo em /article e o id
location.href = '/article.php?' + id;
}