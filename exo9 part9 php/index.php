<?php
    // Tableau des mois dans une variable
    $monthsArray = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    // Tableau des jours dans une variable
    $daysArray = array('LUNDI', 'MARDI', 'MERCREDI', 'JEUDI', 'VENDREDI', 'SAMEDI', 'DIMANCHE');
    // Le premier jour du mois
    $firstDay = mktime(0, 0, 1, $_POST['months'], 1, $_POST['years']);
    // Nombres de jours après
    $lastDay = mktime(0, 0, 0, $_POST['months'] + 1, 0, $_POST['years']);
    // Nombres de jours dans le mois
    $numberofDay = date('j', $lastDay);
    // Total des jours du mois + avant + après
    $maxDays = (date('N', $firstDay) - 1) + (7 - date('N', $lastDay)) + $numberofDay;
    // Premier lundi du calendrier
    $startDate = $firstDay - ((date('N', $firstDay) - 1) * (24 * 60 * 60));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="assets\css\style.css" type="text/css" />
    <title>Partie 9 - TP</title>
</head>
    <body>
        <!-- Début du formulaire -->
        <div id="calendar">
           <h1>CALENDRIER</h1>
            <form method="POST" action="index.php" >
            <!-- Partie de formulaire pour les mois avec boucle foreach-->
            <label for="months">Mois :</label>
                <select name="months" id="months">
            <?php
            // Affichage des mois avec déclaration d'une variable qui part de 1 et incrémentation de cette variable pour les mois suivants
            $nbMonth = 1;
            foreach($monthsArray as $month){
                ?><option value="<?= $nbMonth ?>"><?= $month ?></option><?php
                $nbMonth++; // Incrémentation
            }
            ?>
                </select>
            <!-- Partie de formulaire pour les années avec boucle for-->
            <label for="years">Années :</label>
                <select name="years" id="years">
            <?php
            // Affichage des années
            for($year = 1980; $year <= 2030; $year++){
                ?><option value="<?= $year ?>"><?= $year ?></option><?php
            }
            ?>
                </select>
                <input id="valid" type="submit" value="OK">
            </form>
        <!-- Fin du formulaire -->
        </div>
        <!-- Début du tableau -->
        <table class="table table-bordered">
           <thead>
               <tr>
                   <?php
                   foreach($daysArray as $listDays) {/**crée la ligne des jours du calendrier */
                        ?><th scope="row"> <?= $listDays ?> </th><?php
                   }
                   ?>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <?php
                    for ($days = 1; $days <= $maxDays; $days++) { 
                        $date = $startDate + ($days -1)*(24 * 60 * 60);
                        if($days %7 == 0) {
                            if(($date < $firstDay) || ($date > $lastDay + 1))  {
                                ?><td class="bg bg-secondary"><?= date('j', $date) ?></td></tr><?php // Cases grisées
                            }else {
                                ?><td><?= date('j', $date) ?></td></tr><?php
                            }
                        }else {
                            if(($date < $firstDay) || ($date > $lastDay + 1)) {
                                ?><td class="bg bg-secondary"><?= date('j', $date) ?></td><?php // Cases grisées
                            }else {
                                ?><td><?= date('j', $date) ?></td><?php
                            }
                        }
                    }
                    ?>
                </tr>
           </tbody>
        </table>
        <!-- Fin du tableau -->
    </body>
</html>