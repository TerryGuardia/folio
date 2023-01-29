<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>

    <!-- Ajoutez les liens vers les fichiers CSS et JS de Bootstrap ici -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mon Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#realisations">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#veilles-technologiques">Veilles technologiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cv">CV</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur mon portfolio</h1>
            <p class="lead">Je suis un développeur web passionné, et voici quelques-unes de mes réalisations.</p>
        </div>

        <h2 id="realisations">Réalisations</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../foliobis/assets/badminton.png" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Projet 1</h5>
                        <p class="card-text">Description courte du projet 1</p>
                        <a href="#" class="btn btn-primary">Voir
                            le projet</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="project2.png" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Projet 2</h5>
                        <p class="card-text">Description courte du projet 2</p>
                        <a href="#" class="btn btn-primary">Voir le projet</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="project3.png" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Projet 3</h5>
                        <p class="card-text">Description courte du projet 3</p>
                        <a href="#" class="btn btn-primary">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="veilles-technologiques">Veilles technologiques</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="article1.png" class="card-img-top" alt="Article 1">
                    <div class="card-body">
                        <h5 class="card-title">Article 1</h5>
                        <p class="card-text">Résumé de l'article 1</p>
                        <a href="#" class="btn btn-primary">Lire l'article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="article2.png" class="card-img-top" alt="Article 2">
                    <div class="card-body">
                        <h5 class="card-title">Article 2</h5>
                        <p class="card-text">Résumé de l'article 2</p>
                        <a href="#" class="btn btn-primary">Lire l'article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="article3.png" class="card-img-top" alt="Article 3">
                    <div class="card-body">
                        <h5 class="card-title">Article 3</h5>
                        <p class="card-text">Résumé de l'article 3</p>
                        <a href="#" class="btn btn-primary">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="cv">CV</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Formation
                </h3>
                <ul>
                    <li>Diplôme 1, Nom de l'école - Année d'obtention</li>
                    <li>Diplôme 2, Nom de l'école - Année d'obtention</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Expérience professionnelle</h3>
                <ul>
                    <li>Poste 1, Nom de l'entreprise - Période</li>
                    <li>Poste 2, Nom de l'entreprise - Période</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Compétences</h3>
                <ul>
                    <li>Compétence 1 : Niveau sur 5</li>
                    <li>Compétence 2 : Niveau sur 5</li>
                    <li>Compétence 3 : Niveau sur 5</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Ajoutez le script de Bootstrap ici -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>