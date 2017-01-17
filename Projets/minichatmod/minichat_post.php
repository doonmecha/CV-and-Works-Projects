<?php

$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'soulknot');


//insertion des msg par requete

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

/*global $pdo;
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];
$stmt = $pdo->query("INSERT INTO chat (`pseudo`, `message`) VALUES (:n, :v)");
$stmt->execute(array('n' => $pseudo, 'v' => $message));*/






//affiche les message et renvoi vers tchat

header('location: minichat.php');
?>