<?php
    $numTermos=$_POST["numTermos"];
    $numA=0;
    $numB=1;

    for($i=0; $i<$numTermos; $i++){
        $termo=$i+1;

        echo "<b>Termo $termo:</b> $numA <br/>";
        $numC=$numA+$numB;
        $numB=$numA;
        $numA=$numC;
    }
?>