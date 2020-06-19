<!DOCTYPE html> 
<html lang="fr" dir="ltr" >
   <head>
       <title>exo2 part6 php</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
       <a href="index.php?startDate=2/05/2016&endDate=27/11/2016" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Envoyer les paramétres</a>
       <p><?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) { //si on a les 2 paramétres
            echo $_GET['startDate'] . ' et ' . $_GET['endDate'] ; //on affiche les 2
        }else if(isset($_GET['startDate']) || isset($_GET['endDate'])) { //si on a 1 paramétres sur 2
            if(isset($_GET['startDate'])) { //si on a ce paramétre
                echo $_GET['startDate'];// on affiche celui la
        }   else{ //si on a ce paramétre
                echo $_GET['endDate'];// on affiche celui la
        }
        }
        else{
            echo 'Pas de paramétres!';
        }
        
        ?></p>
    
   </body>
</html>