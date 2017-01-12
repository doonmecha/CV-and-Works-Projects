<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <!--[if IE]>
    		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
</head>

<body>
    <?php 
            if(isset($_POST['mot_de_passe']) && ($_POST['mot_de_passe'] == "kangourou"))
            {
  ?>
        <h1>Voici les codes d'accès</h1>
        <h1><strong>48765432164687654dzef687687ger</strong></h1>
        <?php 
            } else { 
                echo '<p>Mot de passe incorrect</p>';
            } 
    ?>
</body>

</html>