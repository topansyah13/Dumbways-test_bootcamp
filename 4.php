<?php
    function drawline($n){
        $a = strlen($n);
        for($i=1; $i<=$a; $i++){
            
            for($j=0; $j<$i; $j++){
                if($j==$i-1){
                    echo $n[$j];
                } else {
                    echo "&nbsp;";
                }
            } echo "</br>";
        }
    } $n="DEV99";
      drawline($n);
?>
