<?php
// C6: Sử dụng vòng lặp for each làm bài
function useForeach(){
    $array = [1990, 1991, 1992, 1993, 1994, 1995];
    return $array;
}


$resultEx6 = useForeach();
foreach($resultEx6 as $number){
    echo $number . " ";
}

?>