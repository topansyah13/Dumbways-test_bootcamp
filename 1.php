<?php 
    
    function random($n) { 
        for($j=0; $j<4; $j++){
                $karakter = '0123456789abcdefghijklmnopqrstuvwxyz'; 
                $randomString = '';  
                    for ($i = 0; $i < $n; $i++) { 
                        $randomString .= $karakter[rand(0, strlen($karakter)-1)];
                    }  
                        if($j==3){
                            echo $randomString;
                        } else {
                            echo $randomString."-";
                        }

        }
    } 
    random(4); 
?> 

