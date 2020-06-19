<p>
    <?php
        $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre'); //on déclare le tableau de mois,  avec la fonction array()
        foreach($months as $element)// boucle for each => pour chaque élément du tableau months
        {?>

        <li><?php echo $element; ?></li>
        <?php } ?>
</p>


