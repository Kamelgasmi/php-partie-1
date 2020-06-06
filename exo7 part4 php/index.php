<p>
    <?php
    function person($age, $gender){
        if($age > 18 && $gender == 'homme'){
            return 'Vous êtes un homme et vous êtes majeur.';
        }else if($age < 18 && $gender == 'homme'){
            echo 'Vous êtes un homme et vous êtes mineur.';
        }else if($age < 18 && $gender == 'femme'){
            echo 'Vous êtes une femme et vous êtes mineure.';
        }else if($age >= 18 && $gender == 'femme'){
            echo 'Vous êtes une femme et vous êtes majeure.';
        }
    }
    ?>
</p>
<?php
        echo person(14, 'homme');
    ?>