<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title>Capska - <?= $title ?></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Gestion de stock</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= App::getInstance()->getTable('Stock')->getUrl() ?>">Stock Jardi-Bar-LMDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=".vic">VIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Esho</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="POST">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Connexion</button>
                    <button class="btn btn-info my-2 my-sm-0" type="submit">Inscription</button>
                    </form>
                </div>
            </nav>
        <div id="global">
            <header>
                <h1 id="titre_gobal"><a href="">Gestion Stock</a></h1>
            </header>
            <div id="contenu">
                <?= $content ?>
            </div> <!-- #contenu -->
        </div> <!-- #global -->
        <footer id="pied_page">
                <div class="jumbotron">

                </div>
        </footer>
    </body>
</html>