<?php
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cupons Ninja - </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Carroussel -->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ef9693012f.js" crossorigin="anonymous"></script>
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg py-0" style="background-color: #fff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo2.png" alt="Bootstrap" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./quemsomos.php">Quem somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./servicos.php">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./planos.php">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./categorias.php">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./lojas.php">Lojas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contato.php">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                        <button class="btn btn-outline-danger btn-sm" type="submit"><i class="bi bi-search-heart fa-lg"></i></button>
                    </form>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!--Dropdown -->
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-youtube fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-twitter fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-instagram fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-facebook fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa-solid fa-user-ninja fa-lg">              </i></a>
                        
                    </li>
                    
                    
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#"><i class="bi bi-moon-stars fa-lg"></i></a>
                    </li>                    
                </ul>
            </div>
        </div>
    </nav>
    <nav style="text-align: right;"><?php if (!empty($_SESSION)){
                        echo "Olá, ".$_SESSION['nome']; 
                        echo '<a href="./logout.php"> Logout</a>';
                    }
                    ?></nav>
    <div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Escolha sua categoria de Usuário!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">Cliente
                        <a href="./forms/login_form_cliente.php"><img src="./img/ninjabox.png" class="img-thumbnail" alt="..." style="border: 0;"></a>                    
                    </div>
                    <div class="col-md-6 text-center">Parceiro
                    <a href="./forms/login_form_parceiro.php"><img src="./img/ninja-desk.svg" class="img-thumbnail" alt="..." style="border: 0;"></a>                    
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                
            </div>
        </div>
    </div>
</div>