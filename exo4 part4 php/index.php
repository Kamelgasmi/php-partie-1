
<p>
    <?php
        function numbers($number1, $number2){//declare fonction numbers avec 2 variables
            if($number1 > $number2)//on défini la condition
                return 'Le premier nombre est plus grand';
            else if($number1 < $number2)
                return 'Le premier nombre est plus petit';
            else if($number1 == $number2)
                return 'Les deux nombres sont identiques';
        }
    ?>
</p>
    <?php
        echo numbers(7, 3);//affiche le résultat  de la fonction selon la condition,qui prend en compte la valeur 2 et 2 des 2 variables
    ?>