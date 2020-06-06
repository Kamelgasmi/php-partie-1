<p>
    <?php
        function person($firstName, $lastName, $age){//declare fonction string avec 2 variables
            return 'Bonjour '.$firstName.' '.$lastName.', tu as '.$age. 'ans.'; 
        }
    ?> 
</p> 
    <?php
        echo person('Gasmi', 'Kamel', 38);//affiche le résultat de la fonction cad la concaténation des 2 variables
    ?> 