<?php
// C5: hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường
function countNumber02(){
    $array = [];
    for($i = 1; $i <= 100; $i++){
        $array[$i] = $i;
    }
    return $array;
}

$resultEx5 = countNumber02();
foreach($resultEx5 as $number){
    if($number % 2 == 0){
        echo "<b> $number </b>";
    } else {
        echo $number;
    } 
}
echo "<br>";

?>