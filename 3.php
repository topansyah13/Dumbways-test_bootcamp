<?php
 
        function kembali50k(){
            $total_bayar=110100; //total harga yang harus dibayar
            $uang = 200000; //jumlah uang yang dimasukan ke mesin
            $kembalian = $uang - $total_bayar;
                for($k50k=0; $k50k<$kembalian; $k50k++){
                    if($kembalian>=50000){
                        $kembalian-=50000;     
                    } else {
                        return array('angka' => $k50k,'val' => $kembalian);  
                    }
                }  
        }
        function kembali20k(){
            $a = kembali50k();
            $kembalian = $a['val'];
                for($k20k=0; $k20k<$kembalian; $k20k++){
                    if($kembalian>=20000){
                        $kembalian-=20000;     
                    } else {
                        return array('angka' => $k20k,'val' => $kembalian);  
                    }
                }  
        }
        function kembali10k(){
            $a = kembali20k();
            $kembalian = $a['val'];
                for($k10k=0; $k10k<$kembalian; $k10k++){
                    if($kembalian>=10000){
                        $kembalian-=10000;     
                    } else {
                        return array('angka' => $k10k,'val' => $kembalian);  
                    }
                }  
        }
        function kembali5k(){
            $a = kembali10k();
            $kembalian = $a['val'];
                for($k5k=0; $k5k<$kembalian; $k5k++){
                    if($kembalian>=5000){
                        $kembalian-=5000;     
                    } else {
                        return array('angka' => $k5k,'val' => $kembalian);  
                    }
                }  
        }
        function kembali2k(){
            $a = kembali5k();
            $kembalian = $a['val'];
                for($k2k=0; $k2k<$kembalian; $k2k++){
                    if($kembalian>=2000){
                        $kembalian-=2000;     
                    } else {
                        return array('angka' => $k2k,'val' => $kembalian);  
                    }
                }  
        }
        function kembali5(){
            $a = kembali2k();
            $kembalian = $a['val'];
                for($k5=0; $k5<$kembalian; $k5++){
                    if($kembalian>=500){
                        $kembalian-=500;     
                    } else {
                        return array('angka' => $k5,'val' => $kembalian);  
                    }
                }  
        }
          
        
        $nilai50k = kembali50k();
        echo $nilai50k['angka']." 50.000"."<br>";
        $nilai20k = kembali20k();
        echo $nilai20k['angka']." 20.000"."<br>";
        $nilai10k = kembali10k();
        echo $nilai10k['angka']." 10.000"."<br>";
        $nilai5k = kembali5k();
        echo $nilai5k['angka']." 5.000"."<br>";
        $nilai2k = kembali2k();
        echo $nilai2k['angka']." 2.000"."<br>";
        $nilai5 = kembali5();
        echo $nilai5['angka']." 500"."<br>";
        
       
     
?>
