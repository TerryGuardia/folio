<div class="container">
    <section>
        <h1 class="text-center mt-5">Git</h1>
        <h2 class="my-5">Pourquoi utiliser Git ?</h2>
        <p>Git est un logiciel de versions décentralisé open source.</p>
        <h3 class="my-3 mx-2">Les avantages :</h3>
        <ul class="list-group px-5">
            <li class="list-group-item">Permet de revenir à d'anciennes versions du projet
            </li>
            <li class="list-group-item">Offre la possibilité de travailler simultanément sur différentes versions d'un même projet ( exemple : version en production et version de développement)
            </li>
            <li class="list-group-item">Simplifie grandement le travail simultané, et la fusion des modifications
            </li>
        </ul>
        <h2 class="my-5">Pourquoi utiliser Git face à d'autres solutions ?</h2>
        <ul class="list-group px-5">
            <li class="list-group-item">Git est extrêmement simple d'utilisation, notamment couplé à une interface graphique comme GitHub
            </li>
            <li class="list-group-item">Git est rapide
            </li>
            <li class="list-group-item">Travailler hors-ligne : Git ne requiert pas de serveur distant pour fonctionner
            </li>
            <li class="list-group-item"> Et bien entendu, Git est gratuit et open source
            </li>
        </ul>
    </section>
    <section>
        <div class="my-5">
            <h2 class="mb-5">La théorie de git</h2>
            <p>3 zones, les modifications sont sauvegardés à chaque fois.</p>
        </div>
        <div class="row">
            <div class="col-md-4 border">
                <h4 class="text-center mb-3">Working directory
                </h4>
                <p>C'est la zone de travail :
                    Les fichiers tout juste modifiés sont ici.
                </p>
            </div>
            <div class="col-md-4 border">
                <h4 class="text-center mb-3">Index</h4>
                <p>Zone qui permet de stocker les modifications sélectionnées en vue d'être commitées.
                </p>
            </div>
            <div class="col-md-4 border">
                <h4 class="text-center mb-3">Local repository
                </h4>
                <p>Code commité, prêt à être envoyé sur un serveur distant.
                </p>
            </div>
        </div>
    </section>
    <section>
        <h2 class="my-5">Configuration minimale</h2>
        <div>
            <div>
                <article>
                    <p>Pour utiliser les commandes git, nous devons nous assurer que le dossier que nous utilisons est un dépôt Git. Pour cela, utilisez la commande ci-dessous. Elle initialisera votre dossier local en un dépôt Git.
                    </p>
                    <p><b>git init</b>
                    </p>
                    <p>Vous devez initialiser votre dossier local en tant que dépôt git, sinon les commandes git ne fonctionneront pas.
                    </p>
                </article>
            </div>
            <div class="">
                <article>
                    <p>Si on exécute la commande git commit sans sauvegarder nos variables de configuration, alors git émettra une erreur parce qu'il ne sait pas qui essaie de faire un commit. Pour cette raison, nous devons ajouter :
                    </p>
                    <ul class="list-group px-5">
                        <li class="list-group-item">git config ––global user.name "Prénom Nom" </li>
                        <li class="list-group-item">git config ––global user.email "prenom.nom@gretacfa-montpellier.fr"</li>
                    </ul>
                </article>
            </div>
        </div>
        <section>
            <h2 class="my-5">Récapitulatif des commandes utilisées jusqu'au commit</h2>
            <p>Où j'en suis dans mes 3 zones ? --> <b>git status</b></p>
            <div>
                <div>
                    <img src="assets/gitgithub/git1.png" alt="" class="img-thumbnail">
                </div>
            </div>
            <h2 class="my-5">Récapitulatif des commandes utilisées pour les dépots distants</h2>
            <p>Cloner un dépôt distant : crée un dossier et récupère tout le contenu de l'entrepôt distant --> <b>git clone 'url'</b>
            </p>
            <div>
                <div>
                    <img src="assets/gitgithub/git2.png" alt="" class="img-thumbnail">
                </div>
            </div>
        </section>
    </section>
    <section>
        <div>
            <article>
                <h2 class="my-5">Principe des branches</h2>
                <div>
                    <div class="my-5">
                        <img src="assets/gitgithub/git3.png" alt="" class="img-thumbnail">
                    </div>
                </div>
                <p>La création d'une nouvelle branche est particulièrement utile lorsque plusieurs versions d'une même application cohabitent, ou lorsque l'on veut développer une nouvelle fonctionnalité nécessitant des changements majeurs dans le code.
                </p>
                <h3 class="my-5">Commandes utilisées pour la gestion des branches</h3>
                <ul class="list-group px-5">
                    <li class="list-group-item">git branch : affichage des branches
                    </li>
                    <li class="list-group-item">git branch ma_branche : créer la branche ma_branche
                    </li>
                    <li class="list-group-item">git checkout ma_branche : déplace HEAD vers ma_branche
                    </li>
                    <li class="list-group-item">git checkout –b ma_branche : créer la branche ma_branche et déplace HEAD dessus
                    </li>
                    <li class="list-group-item">git merge ma_branche : merge ma_branche dans la branche courante
                    </li>
                </ul>
            </article>
            <article>
                <h2 class="my-5">Resoude les conflits</h2>
                <p>Parfois, il peut arriver que l'une de vos modifications entre en conflit avec les modifications de quelqu'un d'autre, et que Git ne soit pas capable de fusionner automatiquement vos modifications.
                </p>
                <p>Dans ce cas, il sera demandé de corriger manuellement le conflit en allant éditer le(s) fichier(s) concerné(s).
                </p>
                <div>
                    <div class="mt-5">
                        <img src="assets/gitgithub/git4.png" alt="" class="img-thumbnail">
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section>
        <div>
            <article>
                <h1 class="my-5 text-center">Github</h1>
                <ul class="list-group px-5">
                    <li class="list-group-item">GitHub est avant tout une communauté</li>
                    <li class="list-group-item">Elle permet de faciliter la collaboration de développeurs du monde entier sur un même projet</li>
                    <li class="list-group-item">Mais GitHub est aussi une société d'hébergement, qui propose des solutions de gestion de développement de logiciels, basées sur le protocole Git</li>
                    <li class="list-group-item">L'utilisation de GitHub est entièrement gratuite, dans le cadre d'un développement open source (et donc public)</li>
                    <li class="list-group-item">GitHub a également développé un logiciel appelé « GitHub Desktop », qui permet de gérer son projet sous Git très facilement, via une interface graphique</li>
                </ul>
            </article>
            <article>
                <div class="mt-5">
                    <p>Tout d'abord il faut créer un compte gratuitement sur https://github.com, 
                    Une fois le compte créé, il suffit de créer un nouveau dépôt.</p>
                </div>
                <div class="text-center mt-5">
                    <img src="assets/gitgithub/1.png" alt="" class="img-thumbnail">
                </div>
                <p class="text-center"><i>Une fois le dépôt créé, nous pouvons y accéder grâce à son url</i></p>
                <div class="text-center mt-5">
                    <img src="assets/gitgithub/2.png" alt="" class="img-thumbnail">
                </div>
                <p class="text-center"><i>Nous pouvons accéder aux différentes branches et commits</i></p>
                <div class="text-center mt-5">
                    <img src="assets/gitgithub/3.png" alt="" class="img-thumbnail">
                </div>
                <p class="text-center"><i>Détails des commits</i></p>
                <div class="text-center mt-5">
                    <img src="assets/gitgithub/4.png" alt="" class="img-thumbnail">
                </div>
                <p class="text-center"><i>Nous pouvons aussi héberger notre projet sur Github</i></p>
                <div class="text-center mt-5">
                    <img src="assets/gitgithub/5.png" alt="" class="img-thumbnail">
                </div>
            </article>
        </div>
    </section>
</div>