<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap">
    <style>
        body {
            font-family: 'Times New Roman', serif;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .title-layout{
            text-shadow: 1px 1px 4px white; /* Adiciona uma sombra branca */
            /* box-shadow: 2px 0px 10px 1px rgba(255, 255, 255, 0.8); */
        }
    </style>
    <?= $this->renderSection('head') ?>
</head>

<body class="">
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger rounded shadow">
        <div class="container-fluid">
            <!-- Nome do Site -->
            <a class="navbar-brand text-dark fw-bolder title-layout" href="#">BIBLIOTHECA ALEXANDRINA</a>



            <!-- Botão para expandir e recolher a barra de pesquisa -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Elementos de Pesquisa e Conta -->
            <div class="collapse navbar-collapse" id="navbarSearch">
                <form class="d-flex ms-auto mx-2">
                    <!-- Barra de Pesquisa -->
                    <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
                    <!-- Ícone de Pesquisa -->
                    <button class="btn btn-outline-dark btn-sm m-1" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <!-- Ícone da Casinha (Home) -->
                <a class="navbar-brand text-dark" href="#">
                    <i class="fas fa-home"></i>
                </a>

                <!-- Link para a Área de Conta -->
                <a class="navbar-brand text-dark" href="#">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Div de Conteúdo -->
    <div class="container mt-4">
        <!-- Adicione o conteúdo da sua página aqui -->
        <?= $this->renderSection('content') ?>
    </div>
    <?= $this->renderSection('footer') ?>
    <?= $this->renderSection('scripts') ?>
</body>

</html>