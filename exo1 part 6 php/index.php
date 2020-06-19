<!DOCTYPE html> 
<html lang="fr" dir="ltr" >
   <head>
       <title>exo1 part6 php</title>
       <meta  charset="utf-8" />
   </head>
   <body>
       <a href="index.php?lastname=Nemare&firstname=Jean" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Envoyer les paramétres</a>
       <p><?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) { //si on a les 2 paramétres
            echo $_GET['lastname'] . ' ' . $_GET['firstname'] ; //on affiche les 2
        }else if(isset($_GET['lastname']) || isset($_GET['firstname'])) { //si on a 1 paramétres sur 2
            if(isset($_GET['lastname'])) { //si on a ce paramétre
                echo $_GET['lastname'];// on affiche celui la
        }   else{ //si on a ce paramétre
                echo $_GET['firstname'];// on affiche celui la
        }
        }
        else{
            echo 'Pas de paramétres!';
        }
        
        ?></p>
    
   </body>
</html>