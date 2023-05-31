<?php
// C4: In ra các số từ 1 đến 100
function from1To100(){
    $array = [];
    for($i = 1; $i <= 100; $i++){
       $array[$i] = $i;
    }
    return $array;
}
$resultEx4 = from1To100();
foreach($resultEx4 as $number) {
    echo $number . ", ";
}
echo "<br>";
?>

