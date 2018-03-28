<?php 
    $mass = [-1,2,3,4,5,-5,6,7,8,3,5,-7,7,4,2,4,5];
    echo 'Исходные данные: '.json_encode($mass);
    $max = $mass[0];
    for ($i = 0; $i < counts($mass); $i++){
        if ($mass[$i] > $max){    
            $j = $i;
            $max = $mass[$i];
        }
        if($mass[$i] < 0){
           $j_2 = $i; 
        }
    }
    $perem = $mass[$j];
    $mass[$j] = $mass[$j_2];
    $mass[$j_2] = $perem;

    echo '<br>Ответ: '.json_encode($mass);

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>