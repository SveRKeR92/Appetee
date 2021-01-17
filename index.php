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
            <a href="#"><img src="img/logo.png" alt="logo Appetee" class="logo"></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#">Accueil</a>
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

    </main>
    <footer></footer>
</body>

</html>