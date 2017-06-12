<?php
/**
 * Created by PhpStorm.
 * User: audric
 * Date: 07/06/17
 * Time: 15:30
 */


$bdd= new PDO('mysql:host=localhost;dbname=PizzaCoda','root', 'coda');

/* Requete de connexion à la base de donnée ( BDD ) ( PDO : "PHP Data Object",nous entrons la localisation de notre BDD
ici " Localhost ", le name de notre tableau ici " dbname", le nom d'utilisateur et le mot de passe du SQL lié à notre host ) */

$requete = $bdd->prepare("SELECT * FROM commandes");

/* Ici nous créons une variable appelée " $requete ", qui a pour but de préparer une requête à l'execution et retourne un objet.
Ensuite, nous utilisons la requete " SELECT " avec * ( qui nous permet de tout selectioner dans le tableau ( Avec la requete " FROM " qui
dirige vers les commandes )) */

$requete->execute();

// On demande d'éxécuter la requête écrite ci-dessus, à savoir "prepare "

$commands = $requete->fetchAll();

/* permet de nous transmettre lensemble des donnèes que nous avons demandé sous forme de tableau ( prendre toute ce qu'on à demandé
pour l'afficher sous forme de tableau ) */




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">

        <img class="col-sm-4 col-sm-offset-4" src="./images/logo2.png" alt="">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Accueil</a></li>
            <li><a href="./list.php">Liste commandes</a></li>
        </ul>
    </nav>
    <div class="buche">
    </div>
</header>
    <section class="pizza container">

<div class="commandes">


    <?php
    // on commence notre  boucle ici

    foreach ($commands as $command) {
//    ?>

        <!-- ici on appel nos variables avec du html -->
        <hr>
        <p>Commandé le :<?=$command['date']?></p>
        <p>Nom : <?=$command['nom']?></p>
        <p>Téléphone : <?=$command['tel']?></p>
        <p>Adresse : <?=$command['adresse']?></p>
        <p>Commmande : <?php
           $commandedpizza="";
//           //creer un compteur prix total
            $totalprice =0;


           if( $command["fourframeworks"]>0) {
               $commandedpizza.=$command["fourframeworks"]." 4 Framework, ";
               // on ajoute au prix total le prix particulier de la pizza muliplié par le nombre de pizza comande
               $totalprice = $totalprice +12* $command["fourframeworks"];
           }

            if( $command["gitpushpizza"]>0) {
                $commandedpizza.=$command["gitpushpizza"]." Git Push Pizza, ";
                $totalprice = $totalprice +10* $command["gitpushpizza"];
            }
            if( $command["beautifulcss"]>0) {
                $commandedpizza.=$command["beautifulcss"]." BEAUTIFUL CSS, ";
                $totalprice = $totalprice + 9* $command["beautifulcss"];

            }
            if( $command["jqueryui"]>0) {
                $commandedpizza.=$command["jqueryui"]." JQUERY UI, ";
                $totalprice = $totalprice +11* $command["jqueryui"];
            }
            if( $command["labootstrap"]>0) {
                $commandedpizza.=$command["labootstrap"]." LA BOOTSTRAP, ";
                $totalprice = $totalprice +9* $command["labootstrap"];
            }

            if( $command["lhtmlauseo"]>0) {
                $commandedpizza.=$command["lhtmlauseo"]." L HTMLAUSEO, ";
                $totalprice = $totalprice +8* $command["lhtmlauseo"];
            }


       //         $commandedpizza = substr_replace($commandedpizza,".",-2);

            $commandedpizza = preg_replace('#, $#', '.',$commandedpizza);
//
//               $commandedpizza = substr($commandedpizza, 0, -2). ".";
//

             echo $commandedpizza;

            //écriredans le html le prix total

            ?></p>
        <p>Prix total : <?=$totalprice?>€</p>


    <?php }
    ?>


</div>





    </section>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/script.js"></script>

</body>
</html>
