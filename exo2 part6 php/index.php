<!DOCTYPE html> 
<html lang="fr" dir="ltr" >
   <head>
       <title>exo2 part6 php</title>
       <meta  charset="utf-8" />
   </head>
   <body>
       <a href="index.php?lastname=Nemare&firstname=Jean" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Envoyer les paramétres</a>
       <p><?php
           if (isset($_GET['age']) && is_numeric($_GET['age'])) // On a le nom et le prénom
           {
               echo $_GET['age'] ;
           }
           else // Il manque des paramètres, on avertit le visiteur
           {
            'Il manque votre age !';
           }
           ?>
        </p>
   </body>
</html>