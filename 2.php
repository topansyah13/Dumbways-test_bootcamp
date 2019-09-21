<?php
     $dataKey = ['dumb','ways','the','best'];
     $n = count($dataKey);
     $word = 'dumbways';
     for($i=0; $i<$n; $i++){
        $data = preg_match("/$dataKey[$i]/", $word );
        if($data == true){
            echo $dataKey[$i]." => "."true <br>";
        } else {
            echo $dataKey[$i]." => "."false <br>";
        }
    }

?>

