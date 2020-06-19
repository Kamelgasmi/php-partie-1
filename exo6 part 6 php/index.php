<!DOCTYPE html> 
<html lang="fr" dir="ltr" >
   <head>
       <title>exo2 part6 php</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
       <a href="index.php?building=12&room=101" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Envoyer les paramétres</a>
       <p><?php
        if (isset($_GET['building']) && isset($_GET['room'])) { //si on a les 2 paramétres
            echo $_GET['building'] . ' et ' . $_GET['room'] ; //on affiche les 2
        }else if(isset($_GET['building']) || isset($_GET['room'])) { //si on a 1 paramétres sur 2
            if(isset($_GET['building'])) { //si on a ce paramétre
                echo $_GET['building'];// on affiche celui la
        }   else{ //si on a ce paramétre
                echo $_GET['room'];// on affiche celui la
        }
        }
        else{
            echo 'Pas de paramétres!';
        }
        
        ?></p>
    
   </body>
</html>