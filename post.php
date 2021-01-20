<?php

if (!empty($_POST)) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $erreurs = array();
    if (empty($nom)) {
        $erreurs[] = 'Merci de saisir votre nom';
    }

    if (empty($prenom)) {
        $erreurs[] = 'Merci de saisir votre prenom';
    }

    if (empty($email)) {
        $erreurs[] = 'Merci de saisir votre email';
    }

    if (empty($erreurs)) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //verif si email a le bon format
            $erreurs[] = "Format d'email invalide";
        }

        if (empty($erreurs)) { //pas d'erreurs, on ajoute l'utilisateur à la BDD
            $insert_bdd = $pdo->prepare("INSERT INTO prospects (nom, prenom, email, date_post) VALUES (:nom, :prenom, :email, CURDATE())");
            $insert_bdd->bindParam(':nom', $nom, PDO::PARAM_STR);
            $insert_bdd->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $insert_bdd->bindParam(':email', $email, PDO::PARAM_STR);
            $insert_bdd->execute();
        }
    }
}
