<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" /> </head>

<body>
    <form action="minichat_post.php" method="post">
        <p>
            <label for="pseudo">pseudo</label> :
            <input type="text" name="pseudo" id="pseudo" />
            <br /> </p>
        <label for="message">message</label> :
        <input type="text" name="message" id="message" />
        <br />
        <input type="submit" value="envoyer" /> </p>
    </form>
    <?php
   $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'soulknot');
   
    //récup 10 dernier messages
    
    $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    
    //affiche sécu message
    
    while ($donnees = $reponse->fetch())
    {
        
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) .
            '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
    }
    
    $reponse->closeCursor();
    ?>
</body>

</html>