<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include 'common/head.php';
    ?>
</head>

<body>
    <?php
    // include 'common/header.php';
    include 'common/navigation.php';
    if (!isset($page)) {
        $page = 'accueil';
    }
    switch ($page) {
        case 'accueil':
            include 'content/accueil_content.php';
            break;
        case 'realisations':
            include 'content/realisations_content.php';
            break;
        case 'veilles':
            include 'content/veilles_content.php';
            break;
        case 'cv':
            include 'content/cv_content.php';
            break;
        case 'veille_gitgithub':
            include 'content/veille_gitgithub_content.php';
            break;
        case 'veille_bootstrap':
            include 'content/veille_bootstrap_content.php';
            break;
        default:
            include 'content/error.php';
            break;
    }
    // include 'common/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>