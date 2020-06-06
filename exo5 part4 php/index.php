<p>
    <?php
        function stringNumber($string, $number){//declare fonction string avec 2 variables
            return $string.$number; //retourne la concaténation des 2
        }
    ?> 
</p> 
    <?php
        echo stringNumber('J\'arrive bientot à la partie ', 5 );//affiche le résultat de la fonction cad la concaténation des 2 variables
    ?> 