<?php
    $month = "May";
    $date = 20;
    $year = 2002;

    echo $month. " / " .$date. " / " .$year;
    echo "<br>";
    
    if ($date  % 2 == 0) {
        echo " even";
    }
    else {
        echo " odd";
    }
?>