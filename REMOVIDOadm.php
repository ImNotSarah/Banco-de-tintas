<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo | Central Banco de Tintas</title>
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="./icones/balde_tinta.png" type="image/x-icon">
    <style>

        .position_relative_20{
            position: relative;
            left: -20px;
        }

        .position_relative_5{
            position: relative;
            left: -5px;
        }

        .menu_color {
            background-color: #cbb4d3;
        }

        .sidebar {
            background-color: #cbb4d3;
            padding-top: 20px;
            height: auto; 
        }

        .main-content {
            background-color: #84469B;
            min-height: 100vh;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .cards-container {
            flex: 1; 
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .card {
            background-color: #f8f9fa;
        }

        .menu_text {
            font-weight: bold;
        }

        .link_bg_adm {
            background-color: white;
            border-radius: 9px;
            margin-bottom: 5px;
            color: black;
        }

        .link_bg_adm:hover {
            background-color: #8eb041;
            color: white;
        }

        .icone_btn_apagar{
            margin-top: -4px;
            color: white;
        }
        .mar_right-10{
            margin-right: 10px;
        }

        .a_link_adm{
            margin-top: 5px;
            margin-right: 10px;
        }

        .text_magenta:hover{
            color: #8eb041;
        }

        .btn-purple{
            background-color: #84469B;
            color: white;
            border: none;
        }

        .btn-purple:hover{
            background-color: #cbb4d3;
            color: black;
        }

        .text_green_2{
            color: #aef01d;
        }
        .text_white{
            color: white !important;
            text-decoration: none !important;
        }
        .text_white:hover{
            color: black !important;
            text-decoration: none !important;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./icones/balde_tinta.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-center">
                <span class="text_green" onclick="location.href='./index.php'">Banco de Tintas</span> 
            </a>


            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div class="search-container">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 search-bar" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn  btn-green" type="submit">Pesquisar</button>
                    </form>
                </div>

                <li class="nav-item pad_right_20 position_relative_20">
                    <a class="nav-link active text_purple" aria-current="page" href="#">Olá, (nome do adm)!</a>
                </li>

                <ul class="navbar-nav mb-2 mb-lg-0 position_relative_5">
                    <li class="nav-item">
                        <img src="./icones/usuario.png" width="40px" height="40px" alt="usuario logo">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar">
                    <h4 class="menu_text">MENU</h4>
                    
                    <ul class="nav flex-column">
                        <li class="nav-item pad_top_20">
                            <a class="nav-link text-dark link_bg_adm" href="#">Doações a serem aprovadas</a>
                        </li>
                        <li class="nav-item pad_top_20">
                            <a class="nav-link text-dark link_bg_adm" href="./catalogo.php">Catálogo</a>
                        </li>
                    </ul>
                    <button id="restoreButton" class="btn btn-warning mt-3" style="display: none;">Recuperar Última Tinta</button>
                </div>

                <div class="col-md-10 main-content">
                <h4 class="text_green_2">DOAÇOES A SEREM APROVADAS</h4>
                    <div class="row cards-container">
                        
                    <div class="col-md-4"> 
                        <div class="card mb-3">
                            <div class="card-body text-start"> 
                                <h4 class="card-title text_purple">Tinta Azul:</h4>
                                <p class="card-text text_purple">Doado por: <span class="text_green">Sarinha</span></p>
                                <p class="card-text text_purple">Quantidade disponível: <span class="text_green">3.5L</span></p>
                                <p class="card-text text_purple">Data de validade: <span class="text_green">10/12/2024</span></p>
                                <div class="d-flex justify-content-end align-items-center"> 
                                    <a class="text_magenta a_link_adm me-2" href="#">Reprovar tinta</a> 
                                    <button class="btn btn-purple "> <a href="./cadastrar_tinta.php" class="text_white">Aceitar tinta</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4"> 
                        <div class="card mb-3">
                            <div class="card-body text-start"> 
                                <h4 class="card-title text_purple">Tinta Azul:</h4>
                                <p class="card-text text_purple">Doado por: <span class="text_green">Sarinha</span></p>
                                <p class="card-text text_purple">Quantidade disponível: <span class="text_green">3.5L</span></p>
                                <p class="card-text text_purple">Data de validade: <span class="text_green">10/12/2024</span></p>
                                <div class="d-flex justify-content-end align-items-center"> 
                                    <a class="text_magenta a_link_adm me-2" href="#">Reprovar tinta</a> 
                                    <button class="btn btn-purple "> <a href="./cadastrar_tinta.php" class="text_white">Aceitar tinta</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4"> 
                        <div class="card mb-3">
                            <div class="card-body text-start"> 
                                <h4 class="card-title text_purple">Tinta Azul:</h4>
                                <p class="card-text text_purple">Doado por: <span class="text_green">Sarinha</span></p>
                                <p class="card-text text_purple">Quantidade disponível: <span class="text_green">3.5L</span></p>
                                <p class="card-text text_purple">Data de validade: <span class="text_green">10/12/2024</span></p>
                                <div class="d-flex justify-content-end align-items-center"> 
                                    <a class="text_magenta a_link_adm me-2" href="#">Reprovar tinta</a> 
                                    <button class="btn btn-purple "> <a href="./cadastrar_tinta.php" class="text_white">Aceitar tinta</a></button> 
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>


        </div>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let lastDeletedCard = null;

        document.querySelectorAll('.delete-card').forEach(button => {
            button.addEventListener('click', function () {
                lastDeletedCard = this.closest('.col-md-6');
                lastDeletedCard.style.display = 'none';
                document.getElementById('restoreButton').style.display = 'block';
            });
        });

        document.getElementById('restoreButton').addEventListener('click', function () {
            if (lastDeletedCard) {
                lastDeletedCard.style.display = 'block';
                lastDeletedCard = null;
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>
