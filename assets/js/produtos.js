const socket = new WebSocket('ws://localhost:9990/pedidos');
let button = document.getElementById('finalizar');
let containerPedidos = document.getElementById('listaPedidos');
var itensCarrinho = [];


// Ao receber mensagens do servidor
socket.addEventListener('message', function (event) {
    // Deserializamos o objeto
    const data = JSON.parse(event.data);
    console.log(data)
    // Escrevemos no DOM
    var cardPedido = '<li class="list-group-item d-flex justify-content-between align-items-start"><div class="ms-2 me-auto"><div>Cliente: <span class="textoClientePedido">'+data.cliente+'</span></div>Endereço: <span class="textoClientePedido">'+data.endereco+'</div><div><span class="badge bg-success rounded-pill">Novo</span>&nbsp;<span class="badge bg-warning rounded-pill">Pendente</span><div class="areaButtonsCard"><button class="btn btn-outline-success btn-sm"><i class="bx bxs-chevron-down"></i></button>&nbsp;<button class="btn btn-outline-danger btn-sm"><i class="bx bx-message-alt-x"></i></button>&nbsp;<button class="btn btn-outline-primary btn-sm"><i class="bx bx-show"></i></button></div></div></li>';

    containerPedidos.insertAdjacentHTML('afterbegin', cardPedido);

    Toastify({
        text: "Novo pedido: cliente "+data.cliente,
        duration: 6000,
        destination: "",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        // className: "info",
        style: {
            background: "linear-gradient(to right, green, green)",
        },
        onClick: function(){} // Callback after click
    }).showToast();

});

button.addEventListener('click', function (event) {

    var nomeCliente = document.getElementById("nomeCliente").value;
    var enderecoCliente = document.getElementById("enderecoCliente").value;
    
    // Objeto com os dados que serão trafegados
    const data = {
        cliente: nomeCliente,
        endereco: enderecoCliente
    };

    // Serializamos o objeto para json
    socket.send(JSON.stringify(data));

    this.value = '';

    Toastify({
        text: "Pedido concluído com sucesso",
        // duration: 3000,
        destination: "",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        // className: "info",
        style: {
            background: "linear-gradient(to right, green, green)",
        },
        onClick: function(){} // Callback after click
    }).showToast();

    $('#modalCarrinhoItens').modal('hide');
    zerarVenda();

});

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

function limparListaCarrinho(){

    var itens = document.getElementsByClassName('list-group-item');

    for(var i = itens.length - 1; i >= 0; i--){
        
        itens[i].remove();
    }
}

function adicionarItemAoCarrinho(nomeProduto, valorVenda){

    var areaItens = document.getElementById("listaItensCarrinhos");
            
    var cardItem = '<li class="list-group-item d-flex justify-content-between"><span class="nomeProdutoCarrinho">'+nomeProduto+'</span><span class="precoProdutoCarrinho">R$ '+valorVenda+'</span></li>';

    areaItens.insertAdjacentHTML('beforeend', cardItem);

    //Adicionar ao array
    itensCarrinho.push({'produto': nomeProduto,'quantidade': 1, 'preco': valorVenda});
    document.getElementById("quantidadeProdutos").innerHTML = itensCarrinho.length;

    calcularValorFinalPedido();

    Toastify({
        text: "Item adicionado ao carrinho",
        duration: 1000,
        destination: "",
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        // className: "info",
        style: {
            background: "linear-gradient(to right, blue, blue)",
        },
        onClick: function(){} // Callback after click
    }).showToast();
}

function calcularValorFinalPedido(){

    var total = itensCarrinho.reduce(getTotal, 0);
    function getTotal(total, item) {
        return total + (item.preco * item.quantidade);
    }

    document.getElementById("valorTotalPedido").innerHTML = "R$ "+total.toFixed(2)
    
}

function zerarVenda(){

    limparListaCarrinho()
    document.getElementById("valorTotalPedido").innerHTML = "R$ 0";
    document.getElementById("nomeCliente").value = "";
    document.getElementById("enderecoCliente").value = "";
    document.getElementById("quantidadeProdutos").innerHTML = "0";

    // for(var i = 0; i <= itensCarrinho.length; i++){

    //     itensCarrinho.splice(i, 1);
    // }

    // itensCarrinho.remove();

    itensCarrinho.length = 0;

    
}