
<?php
// C3: Kiểm tra năm nay là năm chẵn hay lẻ

function checkThisYear(){
    $date = getdate();
    return $date['year'];
}  

$resultEx3 = checkThisYear();
if($resultEx3 % 2 == 0){
    echo "Năm nay là năm chẵn";
} else {
    echo "Năm nay là năm lẻ";
}
echo "<br>";
?>
