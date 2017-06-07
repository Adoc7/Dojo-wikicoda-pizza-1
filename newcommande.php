<?php
/**
 * Created by PhpStorm.
 * User: audric
 * Date: 07/06/17
 * Time: 15:31
 */
//recuperer les entrées du formulaire
if(isset($_POST)){
    var_dump($_POST);
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

$bdd= new PDO('mysql:host=localhost;dbname=pizza','root', 'root');

$requete = $bdd->prepare('INSERT INTO commandes(date,nom,tel,adresse,fourframeworks,gitpushpizza,beautifulcss,jqueryui,labootstrap,lhtmlauseo)
                                VALUES (NOW(), :nom, :tel, :adresse, :fourframeworks, :gitpushpizza, :beautifulcss, :jqueryui, :labootstrap, :lhtmlauseo)
                                ');
$requete->bindParam(':nom', $nom);
$requete->bindParam(':tel', $telephone);
$requete->bindParam(':adresse', $adresse);
$requete->bindParam(':fourframeworks', $fourframeworks);
$requete->bindParam(':gitpushpizza', $gitpushpizza);
$requete->bindParam(':beautifulcss', $beautifulcss);
$requete->bindParam(':jqueryui', $jqueryui);
$requete->bindParam(':labootstrap', $labootstrap);
$requete->bindParam(':lhtmlauseo', $lhtmlauseo);



$requete->execute();
