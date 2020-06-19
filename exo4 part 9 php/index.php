<!DOCTYPE html>
<html>
    <head>
        <title>Exo4-5 part 9 php"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Timestamp</h1>
        <p><?php
            echo 'Timestamp actuel : ' .time() ;
        ?></p>
        <p><?php  
                $t1 = mktime(15, 00, 0, 8, 2, 2016);
                $gmt1 = gmmktime(15, 00, 0, 8, 2, 2016);
                echo 'Timestamp - 2 Août 2016 15h00 (GMT+1) : ' .$t1 ;?><p>
            <?php
                echo 'Timestamp - 2 Août 2016 15h00 (GMT) : ' .$gmt1 ;?></p>
    
    </body>
</html>