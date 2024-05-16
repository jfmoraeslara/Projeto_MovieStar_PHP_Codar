<?php
    require_once("templates/header.php");

    require_once("dao/MovieDAO.php");

    // Dao dos filmes
    $movieDao = new MovieDAO($conn, $BASE_URL);

    $latestMovies = $movieDao->getLatestMovies();   

    $actionMovie = $movieDao->getMoviesByCategory("Ação");

    $dramaMovie = $movieDao->getMoviesByCategory("Drama");

    $comedyMovie = $movieDao->getMoviesByCategory("Comédia");

    $fictionMovie = $movieDao->getMoviesByCategory("Ficção");

    $romanceMovie = $movieDao->getMoviesByCategory("Romance");

    $warMovie = $movieDao->getMoviesByCategory("Guerra");

    $horrorMovie = $movieDao->getMoviesByCategory("Terror");

    $cartoonMovie = $movieDao->getMoviesByCategory("Desenho");

?>
    <div id="main-container" class="container-fluid">
        <h2 class="section-title">Filmes novos</h2>
        <p class="section-description">Veja as críticas dos últimos filmes adicionados no MovieStar</p>
        <div class="movies-container">
            <?php foreach($latestMovies as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <!-- Caso a lista esteja vazia -->
            <?php if(count($latestMovies) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Ação</h2>
        <p class="section-description">Veja os melhores filmes de ação</p>
        <div class="movies-container">
            <?php foreach($actionMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($actionMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Drama</h2>
        <p class="section-description">Veja os melhores filmes de drama</p>
        <div class="movies-container">
            <?php foreach($dramaMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>        
            <?php if(count($dramaMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Cómedia</h2>
        <p class="section-description">Veja os melhores filmes de cómedia</p>
        <div class="movies-container">
            <?php foreach($comedyMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($comedyMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Fantasia / Ficção</h2>
        <p class="section-description">Veja os melhores filmes de fantasia e ficção</p>
        <div class="movies-container">
            <?php foreach($fictionMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($fictionMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Romance</h2>
        <p class="section-description">Veja os melhores filmes de romance</p>
        <div class="movies-container">
            <?php foreach($romanceMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($romanceMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Guerra</h2>
        <p class="section-description">Veja os melhores filmes de guerra</p>
        <div class="movies-container">
            <?php foreach($warMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($warMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
        <h2 class="section-title">Terror</h2>
        <p class="section-description">Veja os melhores filmes de terror</p>
        <div class="movies-container">
            <?php foreach($horrorMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($horrorMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
       </div>
        <h2 class="section-title">Desenho</h2>
        <p class="section-description">Veja os melhores filmes de desenho</p>
        <div class="movies-container">
            <?php foreach($cartoonMovie as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <?php endforeach; ?>
            <?php if(count($cartoonMovie) === 0): ?>
                <p class="empty-list">Ainda não há filmes cadastrados!</p>
            <?php endif; ?>
        </div>
    </div>
<?php
    require_once("templates/footer.php");
?>