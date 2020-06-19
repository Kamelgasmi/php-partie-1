<p>
    <?php
        $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'); //on déclare le tableau de mois,  avec la fonction array()
    ?> 
</p>
<?php
    echo str_replace($months[7], 'Aout', 'Août'); //strtr($months[7], 'u', 'û')
?>

