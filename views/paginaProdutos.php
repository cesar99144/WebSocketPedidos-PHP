<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- Icones -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"></script>
        <!-- Css interno -->
        <link rel="stylesheet" href="../assets/css/homeProdutos.css">
        <!-- Toasts -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    </head>
    <body onload="carregarProdutos()">
        <header>
            <nav id="navTopoContato" class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active link-menu text-light" aria-current="page" href="#"><i class='bx bx-current-location icones' ></i> Rua exemplo, 55, Caruaru - PE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-menu text-light" href="#">| &nbsp;<i class='bx bxs-phone-call icones'></i> (81)999999999</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-menu text-light" href="#">| &nbsp;<i class='bx bxs-time icones'></i> 08:00 - 23:00</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- <nav id="subNavTopo" class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
            <nav id="subNavTopo" class="navbar navbar-light">
                <div class="container-fluid  d-flex justify-content-between">
                    <div>
                        <a class="navbar-brand text-light" href="#">
                            <!-- <img src="https://img.freepik.com/free-vector/free-delivery-logo-with-bike-man-courier_1308-46261.jpg?w=2000" alt="" width="120" height="80" class="d-inline-block align-text-top"> -->
                            <i class="fa-solid fa-utensils"></i> Fast<span class="brandLogo">Delivery</span>
                        </a>
                    </div>
                    <!-- <div>
                        <ul id="menuOpcoes" class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="d-flex align-items-center">
                        <a class="linkOpcoes ativo" href="#">Home &nbsp;</a><i class="fa-solid fa-circle iconeMenu"></i>
                        <a class="linkOpcoes" href="#areaProdutos">Produtos &nbsp;</a><i class="fa-solid fa-circle iconeMenu"></i>
                        <a class="linkOpcoes" href="#">Bairros delivery &nbsp;</a><i class="fa-solid fa-circle iconeMenu"></i>
                        <a class="linkOpcoes" href="#">Contatos</a>
                    </div>
                    
                </div>
            </nav>
            <div id="areaApresentacao" class="container">
                <div class="areaImagem">
                    <img class="imagemBanner" src="../assets/ImagensProjetos/Desenho-Lanche-PNG.png" alt="">
                </div>
                <div class="areaDadosApresentacao">
                    <div id="topoApresentacao">
                        <h3>EXPERIMENTE NOSSAS <span class="destaqueTitulo">DELÍCIAS</span></h3>
                    </div>
                    <div id="conteudoApresentacao">
                        Bateu aquela fome ?! faça seu pedido e receba na sua casa simples, rápido e facil<br>
                        <button class="btn btn-outline-warning">Fazer pedido</button>
                    </div>
                </div>
            </div>

        </header>

        <section id="areaProdutos">
            <div id="topoAreaProdutos">
                <h3 id="tituloCatalogo">PRODUTOS <span class="destaqueTitulo">DISPONÍVEIS</span></h3>
                <button data-bs-toggle="modal" data-bs-target="#modalCarrinhoItens" class="btn btn-outline-primary"><i class='bx bx-cart'></i> Meu carrinho <span id="quantidadeProdutos" class="badge bg-secondary">0</span></button>
            </div>
            <div id="areaCards" class="row">
                <!-- <div class="card" style="width: 16rem;">
                    <div class="areaImagemCard">
                        <img class="imagemProdutos" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmoKEFC6Z3lEXkWMgLtqn8IAz2EZ9UM-wSZw&usqp=CAU" class="card-img-top" alt="...">
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">Coxinha frango</h5>
                        <p class="card-text">Apartir de: <span class="textPreco">R$ 6,00</span></p>
                        <button type="button" class="btn btn-outline-success">Success</button>
                    </div>
                </div> -->
                
                
            </div>
            
        </section>

        <!-- Modal -->
        <div class="modal fade" id="modalCarrinhoItens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class='bx bx-cart'></i> Carrinho</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="dadosCliente">
                    <div>
                        <label>Cliente: <br><input type="text" id="nomeCliente"/></label><br><br>
                    </div>
                    <div>
                        <label>Endereço: <br><textarea id="enderecoCliente" cols="30" rows="1"></textarea></label><br>
                    </div>

                </div>
                <ul id="listaItensCarrinhos" class="list-group list-group-flush">
                    <!-- <li class="list-group-item d-flex justify-content-between">
                        <span class="nomeProdutoCarrinho">Coxinha</span>
                        <span class="quantidadeProdutoCarrinho">Qnt: 2</span>
                        <span class="precoProdutoCarrinho">R$ 5</span>
                    </li> -->
                </ul>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <div>
                    Total: <span id="valorTotalPedido"></span>
                </div>
                <div>
                    <button id="finalizar" type="button" class="btn btn-success">Finalizar pedido</button>
                </div>
            </div>
            </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="../assets/js/produtos.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </body>
</html>