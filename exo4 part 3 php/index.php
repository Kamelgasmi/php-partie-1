<p>
    <?php // number = 1 , tant que number est inférieur ou égal à 10 on affiche le resultat en l'incrémentant de la moitié de sa valeur//
    for($number = 1 ; $number <= 10 ; $number+=$number/2){
        echo $number.'<br/>';
    }
    ?>
</p>

<p>
    <?php
    for($number = 1 ; $number <= 10 ; $number+=0.5){
        echo $number.'<br/>';
    }
    ?>
</p>
