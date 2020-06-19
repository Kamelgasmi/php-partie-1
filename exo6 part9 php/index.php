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
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
        echo 'Il y a '.$number.' jours en février 2016.';
        ?>

    </body>
</html>
