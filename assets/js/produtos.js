var itensCarrinho = [];

function carregarProdutos(){

    axios.get('http://localhost:8081/api/produtos.php').then(function(response){
        
        var dados = response.data;

        limparLista();

        for(var i = 0; i < dados.length; i++){

            var preco = parseFloat(dados[i].precoProduto);
            var precoFinal = preco.toFixed(2);

            var areaCards = document.getElementById("areaCards");
            
            var card = `<div class="card" style="width: 16rem;"><div class="areaImagemCard"><img class="imagemProdutos" src="http://localhost:8081/assets/imagensProdutos/${dados[i].imagemProduto}" class="card-img-top" alt="..."></div><div class="card-body"><h5 class="card-title">${dados[i].nomeProduto}</h5><p class="card-text">R$ <span class="textPreco">${preco.toFixed(2)}</span></p><button onclick="adicionarItemAoCarrinho('${dados[i].nomeProduto}', ${preco.toFixed(2)})" type="button" class="btn btn-outline-success">Adicionar carrinho</button></div></div>`;

            areaCards.insertAdjacentHTML('beforeend', card);

        };
    });
}


function limparLista(){

    var itens = document.getElementsByClassName('card');

    for(var i = itens.length - 1; i >= 0; i--){
        
        itens[i].remove();
    }
}

function adicionarItemAoCarrinho(nomeProduto, valorVenda){

    var areaItens = document.getElementById("listaItensCarrinhos");
            
    var cardItem = '<li class="list-group-item d-flex justify-content-between"><span class="nomeProdutoCarrinho">'+nomeProduto+'</span><span class="quantidadeProdutoCarrinho">Qnt: 1</span><span class="precoProdutoCarrinho">R$ '+valorVenda+'</span></li>';

    areaItens.insertAdjacentHTML('beforeend', cardItem);

    //Adicionar ao array
    itensCarrinho.push({'produto': nomeProduto,'quantidade': 1, 'preco': valorVenda});
    document.getElementById("quantidadeProdutos").innerHTML = itensCarrinho.length;

    calcularValorFinalPedido();
}

function calcularValorFinalPedido(){

    var total = itensCarrinho.reduce(getTotal, 0);
    function getTotal(total, item) {
        return total + (item.preco * item.quantidade);
    }

    document.getElementById("valorTotalPedido").innerHTML = "R$ "+total.toFixed(2)
    
}