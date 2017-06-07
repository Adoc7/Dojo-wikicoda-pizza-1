<?php
/**
 * Created by PhpStorm.
 * User: audric
 * Date: 07/06/17
 * Time: 15:31
 */
//recuperer les entrées du formulaire
if(isset($_POST)){//pour vérifier si le tqbleau post est vide ou pas
//    var_dump($_POST); dans l objectif de verifier si la variable post existait bien et son contenu
    // on vient ci dessous recuperer l ensemble du contenu $post
    $nom=$_POST["nom"];
    $telephone=$_POST["telephone"];
    $adresse=$_POST["adresse"];
    $fourframeworks=$_POST["nb_pizza1"];
    $gitpushpizza=$_POST["nb_pizza2"];
    $beautifulcss=$_POST["nb_pizza3"];
    $jqueryui=$_POST["nb_pizza4"];
    $labootstrap=$_POST["nb_pizza5"];
    $lhtmlauseo=$_POST["nb_pizza6"];
}
// ci dessous: on cree l onbjet pdo : notre utilitaire qui sert a communiquer avec la bdd
// 3 attributs: le 1er pour le nom et adresse de la bdd 2e pour id et 3e pour password

$bdd= new PDO('mysql:host=localhost;dbname=pizza','root', 'root');

// on prepare la requete sql
// pour lma date, on met NOW qui suffit directement d avoir la date du j par mysql

$requete = $bdd->prepare('INSERT INTO commandes(date,nom,tel,adresse,fourframeworks,gitpushpizza,beautifulcss,jqueryui,labootstrap,lhtmlauseo)
                                VALUES (NOW(), :nom, :tel, :adresse, :fourframeworks, :gitpushpizza, :beautifulcss, :jqueryui, :labootstrap, :lhtmlauseo)
                                ');

// on remplit la requete avec nos variables contenant les valeurs saisies par l utilisateur

$requete->bindParam(':nom', $nom);
$requete->bindParam(':tel', $telephone);
$requete->bindParam(':adresse', $adresse);
$requete->bindParam(':fourframeworks', $fourframeworks);
$requete->bindParam(':gitpushpizza', $gitpushpizza);
$requete->bindParam(':beautifulcss', $beautifulcss);
$requete->bindParam(':jqueryui', $jqueryui);
$requete->bindParam(':labootstrap', $labootstrap);
$requete->bindParam(':lhtmlauseo', $lhtmlauseo);

// on execute la requete

$requete->execute();
