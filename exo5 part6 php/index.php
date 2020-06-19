<!DOCTYPE html> 
<html lang="fr" dir="ltr" >
   <head>
       <title>exo2 part6 php</title>
       <meta  charset="utf-8" />
   </head>
   <body>
       <a href="index.php?week=12" method="get" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">Envoyer les paramétres</a>
       <p><?php
           if (isset($_GET['week'])) 
           {
               echo $_GET['week'] ;
           }
           else // Il manque des paramètres, on avertit le visiteur
           {
               echo 'Il manque le paramétre !';
           }
           ?>
        </p>
    
   </body>
</html>