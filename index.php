<?php
    require_once("templates/globals.php");
    require_once("templates/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css" integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL?>" class="navbar-brand">
                <img src="<?= $BASE_URL?>img/logo.svg" alt="logo moviestar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search"
                placeholder="Buscar filmes"  aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>corpo site</h1>
    </div>
    <footer id="footer">
        <div id="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar filme</a></li>
                <li><a href="#">Adicionar crítica</a></li>
                <li><a href="#">Entrar / Registrar</a></li>
            </ul>
        </div>
        <p>&copy; 2023 Gabriela Rodrigues</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.js" integrity="sha512-L6XANV6sOsx9N9c787eDN1pjB2Pzautd3xDgn4cMKuoleHSuCJi5pCDGPCtwE3Bd4A1Olnr0k0aQXbczYzg+wg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>