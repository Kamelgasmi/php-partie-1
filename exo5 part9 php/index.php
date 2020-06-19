<!DOCTYPE html>
<html>
    <head>
        <title>Exo4-5 part 9 php"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Différence entre 2 dates</h1>
        <?php
        $date1 = new DateTime('2016-05-16');/*on definit les 2 dates*/
        $date2 = new DateTime('2020-06-15');/*on definit les 2 dates*/
        $diff = $date2->diff($date1)->format('%a');/* on fait le calcul au format souhaité*/
        echo $diff.' jours';
        ?>
    </body>
</html>