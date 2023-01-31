<div class="container">
    <section>
        <h1 class="text-center mt-5">Présentation de Bootstrap</h1>
        <h2 class="my-5">Qu'est-ce que Bootstrap ?</h2>
        <ul class="list-group px-5">
            <li class="list-group-item">Bootstrap est un Framework gratuit permettant un développement web plus rapide et plus facile.
            </li>
            <li class="list-group-item">Bootstrap comprend des templates basés sur HTML, CSS et JavaScript pour la typographie, les formulaires, les boutons, les tableaux, la navigation, les modales, les images, les carrousels et bien d'autres.
            </li>
            <li class="list-group-item">Bootstrap nous permet de créer facilement un design réactif.
            </li>
        </ul>
        <h2 class="my-5">Les avantages de Bootstrap</h2>
        <ul class="list-group px-5">
            <li class="list-group-item"><b>Facile à utiliser :</b> n'importe qui, avec des connaissances de base en HTML et CSS, peut commencer à utiliser Bootstrap.
            </li>
            <li class="list-group-item"><b>Responsive :</b> Bootstrap s'adapte aux téléphones, tablettes et ordinateurs de bureau.
            </li>
            <li class="list-group-item"><b>mobile first :</b> bootstrap est basé sur le concept du "mobile first".
            </li>
            <li class="list-group-item"><b>Compatibilité avec les navigateurs :</b> Bootstrap est compatible avec tous les navigateurs modernes (Chrome, Firefox, Internet explorer 10+, Edge, Safari et Opera).
            </li>
        </ul>
    </section>
    <section>
        <h2 class="my-5">Comment utiliser Bootstrap ?</h2>
        <ul class="list-group px-5">
            <li class="list-group-item">Il existe deux façons d'utiliser Bootstrap sur votre site Web.
            </li>
            <li class="list-group-item">En télécharger la dernière version sur getbootstrap.com.
            </li>
            <li class="list-group-item">Si nous ne voulons pas télécharger et héberger Bootstrap nous-mêmes, nous pouvons l'inclure à partir d'un CDN (Content Delivery Network).
            </li>
        </ul>
    </section>
    <section>
        <h2 class="my-5">La mise en page Bootstrap</h2>
        <ul class="list-group px-5">
            <li class="list-group-item">Bootstrap comprend un système de grille fluide, responsive et mobile first, qui s'adapte de manière appropriée à mesure que la taille du dispositif ou de la fenêtre d'affichage augmente. Il comprend des classes prédéfinies pour faciliter les options de mise en page
            </li>
            <li class="list-group-item">Les systèmes de grille sont utilisés pour créer des mises en page au moyen d'une série de lignes et de colonnes qui accueillent notre contenu.
            </li>
            <li class="list-group-item">Les classes s'appliquent aux appareils dont la largeur d'écran est supérieure ou égale aux breakpoints et remplacent les classes destinées aux appareils plus petits. Par conséquent, l'application d'une classe -md- à un élément affectera son style non seulement sur les dispositifs de taille moyenne, mais aussi sur les dispositifs de grande taille si une classe -lg- n'est pas présente.
            </li>
        </ul>
    </section>
    <section>
        <div>
            <article>
                <h2 class="my-5">Les Breakpoints</h2>
                <div>
                    <p>Les breakpoints sont des largeurs personnalisables qui déterminent le comportement de votre mise en page en fonction de la taille des périphériques ou des fenêtres d'affichage.
                    </p>
                    <div class="my-5">
                        <img src="assets/bootstrap/bootstrap1.png" alt="" class="img-thumbnail">
                    </div>
                </div>
            </article>
            <article>
                <h2 class="my-5">Grille</h2>
                <div>
                    <div class="my-5">
                        <img src="assets/bootstrap/bootstrap2.png" alt="" class="img-thumbnail">
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section>
        <h2 class="my-5">Quelques règles</h2>
        <ul class="list-group px-5">
            <li class="list-group-item">Toute ligne(classe row dans une div) doit être incluse dans un conteneur(classe container ou container-fluid dans une div).
            </li>
            <li class="list-group-item">Seules les colonnes (div munie de la classe col-infix-n) doivent être des enfants d'une ligne.
            </li>
            <li class="list-group-item">Tout contenu doit être inclus dans une colonne.
            </li>
            <li class="list-group-item">Une ligne contenant des colonnes peut-être incluse dans une autre colonne.
            </li>
            <li class="list-group-item">Pour décaler un contenu de n colonnes vers la droite on utilise offset(col-infix-offset-n).
            </li>
        </ul>
    </section>
    <article>
        <h2 class="my-5">Exemple</h2>
        <div class="row">
            <div class="my-5 col-6">
                <img src="assets/bootstrap/bootstrap3.png" alt="" class="img-thumbnail">
            </div>
            <div class="my-5 col-6">
                <p>Ici nous réglons la largeur des colonnes qui gardera les mêmes proportions à mesure que la taille de la fenêtre d'affichage augmente.</p>
            </div>
        </div>
    </article>
    <article>
        <h2 class="my-5">Exemple 2</h2>
        <div class="row">
            <div class="my-5 col-6">
                <img src="assets/bootstrap/bootstrap4.png" alt="" class="img-thumbnail">
            </div>
            <div class="my-5 col-6">
                <p>Jusqu'au breakpoint medium(≥768px) les colonnes sont sur la même ligne, une fois celui-ci atteint la colonne 3 passe à la ligne et en occupe toute la largeur, enfin une fois arrivé au breakpoint large(≥992px), elles repassent sur une ligne et la colonne 2 est plus grande que les autres.</p>
            </div>
        </div>
    </article>
    <article>
        <h2 class="my-5">Pour aller plus loin…</h2>
        <div>
            <p>https://getbootstrap.com/docs
            </p>
            <p>La documentation en ligne contient beaucoup d'exemples d'utilisation et de personnalisation pour les composants, mais aussi pour tout effet de style que l'on souhaiterait ajouter, elle est donc indispensable pour trouver les classes correspondantes.
            </p>
        </div>
    </article>
</div>