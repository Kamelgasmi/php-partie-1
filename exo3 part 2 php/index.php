<p>
    <?php
        $age = 16 ;
        $gender = 'homme' ;
        if($age >= 18 && $gender == 'homme'){
            echo 'Vous êtes un homme et vous êtes majeur.';
        }else if($age < 18 && $gender == 'homme'){
            echo 'Vous êtes un homme et vous êtes mineur.';
        }else if($age < 18 && $gender == 'femme'){
            echo 'Vous êtes une femme et vous êtes mineure.';
        }else if($age >= 18 && $gender == 'femme'){
            echo 'Vous êtes une femme et vous êtes majeure.';
        }
    ?>
</p>