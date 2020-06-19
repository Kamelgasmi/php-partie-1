<!DOCTYPE html>
<html>
    <head>
        <title>Exo4-5 part 9 php"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>- 22 jours</h1>
        <?php
        $date = "15-06-2020";
        echo date('d-m-Y', strtotime($date. ' - 22 days'));
        ?>
    </body>
</html>