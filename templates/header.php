<?php

    // Conexão com a URL e BD do projeto
    require_once("globais.php");
    require_once("db.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $flashMessage = $message->getMessage();

    if(!empty($flashMessage["msg"])) {
        // Limpar a mensagem
        $message->clearMessage();
    }

    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(false);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css" integrity="sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>//css/style.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <?php if($userData): ?>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>newmovie.php" class="nav-link">
                                <i class="far fa-plus-square"></i> Incluir Filme
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link">Meus Filmes</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold">
                                <?= $userData->name ?>                        
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>logout.php" class="nav-link">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <?php if(!empty($flashMessage["msg"])): ?>
        <div class="msg-container">
            <p class="msg <?= $flashMessage["type"] ?> "><?= $flashMessage["msg"] ?></p>
        </div>
    <?php endif; ?>
