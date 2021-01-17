<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Appetee, une application créée par des étudiants pour cuisiner en groupe et que tout le monde puisse finir son assiette !">
    <link rel="stylesheet" href="https://use.typekit.net/hkz4cey.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Appetee</title>
</head>

<body>
    <header>
        <div>
            <a href="#what"><img src="img/logo.png" alt="logo Appetee" class="logo"></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#what">Accueil</a>
                </li>
                <li>
                    <a href="#fonctions">Fonctionnalités</a>
                </li>
                <li>
                    <a href="#recettes">Recettes</a>
                </li>
                <li>
                    <a href="#infos">À propos</a>
                </li>
                <li>
                    <a href="#prix">Prix</a>
                </li>
                <li>
                    <a href="#nom" class="sub">Je souscris</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="what">
            <article>
                <div class="img-container">
                    <img src="img/logo.png" alt="logo Appetee">
                </div>
                <div>
                    <h1>Appetee c'est quoi ?</h1>
                    <p>Une application qui te propose des recettes simples et adaptées à tes goûts ou à ceux de ton groupes afin de finir vos assiettes.</p>
                </div>
            </article>
            <form action="#" method="POST" id="firstform">
                <label for="#nom">Abonnez-vous !</label>
                <div>
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom">
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
                <button>Ok</button>
            </form>
        </section>

        <section id="fonctions" class="yel-bcg">
            <h2>Fonctionnalités</h2>
            <hr>
            <div>
                <article>
                    <img src="img/maq1.png" alt="image de l'application">
                    <p>Réaliser des <strong>recettes</strong> pour tout le monde ! </p>
                </article>
                <article>
                    <img src="img/maq2.png" alt="image de l'application">
                    <p>Préparer un repas pour chaque <strong>personne</strong> enregistrée sur votre <strong>compte</strong></p>
                </article>
            </div>
        </section>

        <section id="recettes">
            <h2>Recettes</h2>
            <hr>
            <article>
                <div>
                    <img src="img/ita.png" alt="Italien" class="food">
                    <img src="img/mex.png" alt="Mexicain" class="food">
                    <img src="img/asi.png" alt="Asiatique" class="food">
                    <img src="img/usa.png" alt="Americain" class="food">
                    <img src="img/fam.png" alt="Familial" class="food">
                    <img src="img/veg.png" alt="Végétarien" class="food">
                </div>
                <p>Pleins de recettes <strong>diverses</strong> et <strong>variées</strong> t'attendent sur Appetee !</p>
            </article>
        </section>

        <section id="infos">
            <h2>À propos</h2>
            <hr>
            <div>
                <aside>
                    <a href="https://www.linkedin.com/in/carole-dumoulin-956508150"><img src="img/carole.png" alt="Carole"></a>
                    <a class="supperpos" href="https://www.linkedin.com/in/as98/"><img src="img/antony.png" alt="Antony"></a>
                </aside>
                <article>
                    <p>Étudiants au Pôle Léonard de Vinci en première année du cycle d’ingénieur, nous développons un projet.<br>Cette production nous tient à coeur et nous avons décidé de la développer.</p>
                </article>
            </div>
        </section>

        <section id="prix">
            <h2>Prix</h2>
            <hr>
            <article>
                <div class="free">
                    <h4>Version FREEMIUM</h4>
                    <span>GRATUITE</span>
                    <ul>
                        <li>Nombre de recettes limité</li>
                        <li>Nombre limité de suggestions</li>
                        <li>Nombre de recherche limité</li>
                        <li>Recettes pour 1 à 2 personnes</li>
                        <li>Publicités</li>
                    </ul>
                </div>
                <div class="prem">
                    <h4>Version PREMIUM</h4>
                    <span>4,99€</span>
                    <p class="spec">par mois ou 49,99€/an</p>
                    <ul>
                        <li>Les éléments de la version freemium en illimité +</li>
                        <li>Quantités adaptées</li>
                        <li>Liste de courses automatiques</li>
                        <li>Planifier les repas</li>
                        <li>Mettre des recettes en favoris</li>
                        <li>Pas de publicités</li>
                    </ul>
                </div>
            </article>
            <p>Vous êtes étudiant ?<br>Bénéficiez de <b>-50%</b> sur la version premium</p>
            <div class="divlink">
                <a href="#nom" class="sub">Je souscris</a>
            </div>
        </section>
    
    </main>

    <footer>
        <article>
            <div>
                <a href="#what"><img src="img/logo-bl.png" alt="Logo Appetee" class="white"></a>
            </div>
            <div>
                <div class="socials">
                    <a href="https://www.facebook.com/appetee"><img src="img/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/appetee_app/?hl=fr"><img src="img/instagram.png" alt="Instagram"></a>
                </div>
                <div class="downloads">
                    <a href=""><img src="img/ios.png" alt="apple store"></a>
                    <a href="https://play.google.com/store?hl=fr&gl=US"><img src="img/android.png" alt="google play"></a>
                </div>
            </div>
        </article>
        <p>Copyright &copy; 2021. Tous droits réservés.</p>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>