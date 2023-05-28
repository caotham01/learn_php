<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEvenNum($number){
    if($number % 2 !== 0) {
        return false;
    } else {
        return true;
    }
}

$numberEx1 = 8;
$resultEx1 = checkEvenNum($numberEx1);
if($resultEx1 == false) {
    echo "$numberEx1 là một số lẻ";
} else {
    echo "$numberEx1 là một số chẵn";
}
echo "<br>";

// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum1toN($number) {
    $sum = 0;
    for ($i = 0; $i <= $number; $i++) {
        $sum += $i;
    }
    return $sum;
}
$numberEx2 = 10;
$resultEx2 = sum1toN(10);
echo "Tổng các số từ 1 đến $numberEx2 là: $resultEx2";
echo "<br>";

// 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i * $j = " . $i*$j;
            echo "<br>";
        }
        echo "<br>";
    }
}

echo "Bảng cửu chương: <br>";
multiplicationTable();

// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkString($string, $subString) {
    $pos = strpos($string, $subString);
    if($pos !==false) {
        echo "Chuỗi \"$string\" chứa từ \"$subString\"";
    } else {
        echo "Chuỗi \"$string\" không chứa từ \"$subString\"";
    }
}

checkString(" Live each day as if it’s your last", "as");
echo "<br>";

// 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function checkMinMax($array) {
    echo "Giá trị lớn nhất trong mảng là: " . max($array);
    echo "<br>";
    echo "Giá trị nhỏ nhất trong mảng là: " . min($array);
}


checkMinMax(array(78,4,1,6,-100,52));
echo "<br>";

// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function arrangeArrayAsc($array) {
    echo "Sắp xếp mảng theo thứ tự tăng dần: ";
    sort($array);
    foreach ($array as $var) {
        echo "$var ";
    }
}

arrangeArrayAsc(array(1,8,2,7,100,-10,-7));
echo "<br>";

// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($number) {
    $fact = 1;
    for($i=1; $i<=$number; $i++) {
        $fact *= $i;
    }
    echo "Giai thừa của số $number là: $fact";
}

factorial(8);
echo "<br>";


// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function primeNumber($min, $max){
    for($i = $min + 1; $i < $max; $i++){
        $count = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $count++;
            } 
        }
        if($count <= 2){
            echo $i . ", ";
        }
    }
}

primeNumber(10,28);
echo "<br>";

// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumArray($array){
    $sum = 0;
    for($i=0;$i<count($array);$i++){
        $sum += $array[$i];
    }
    echo "Tổng của mảng là: $sum";
}

sumArray(array(1,8,3,7,9));
echo "<br>";


// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function printFibonacci($min, $max){
    $array = [0,1];
    for($i = 2; $i < $max; $i++){
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $min && $array[$i] < $max){
            echo $array[$i] . " ";
        }
    }
}
printFibonacci(-2,10);
echo "<br>";

// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function amstrongNumber($number) {
    $array = [];
    $newNum = $number;
    for($i = 0; $i < strlen($newNum); $i++) {
        $array[$i] = $newNum % 10;
        $newNum /= 10;
    }
    $sum = 0;
    foreach($array as $eachNumber) {
        $sum += pow($eachNumber,strlen($number));
    }
    if($sum == $number) {
        echo "Số $number là số amstrong";
    } else {
        echo "Số $number không phải là số amstrong";
    } 
}

amstrongNumber(145);
echo "<br>";

// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array,$element,$position){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
        if($i == $position) {
            // Nếu không chỉ định key cho hàm, php tự động gán chỉ số tiếp theo cho phần tử 
            $newArray[] = $element;
        }
        $newArray[] = $array[$i]; 
    }
    return $newArray;
}
$resultEx12 = insertElement(array(1, 8, 3, 4, 7), 10, 4);

foreach($resultEx12 as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";


// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeElement($array){
    $newArray = [];
    for($i = 0; $i < count($array); $i++){
        if(in_array($array[$i], $newArray) === false){
            $newArray[] = $array[$i];
        }   
    }
    return $newArray;
}
$resultEx13 = removeElement(array(1,2,3,8,5,2,8,3,8,9,7));

foreach($resultEx13 as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";

// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function positionElement($array, $element) {
    $position = [];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $element) {
            $position[] = $i;
        }
    }
    return $position;
}

$resultEx14 = positionElement(array("S","o","m","e","t","i","m","e","s"), "e");
foreach($resultEx14 as $eachPosition) {
    echo $eachPosition . " ";
}
echo "<br>";

// 15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string){
    $reverseString = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reverseString = $reverseString . $string[$i];
    }
    echo $reverseString;
}
echo "Chuỗi đảo ngược: "; 
reverseString("To live is to fight");
echo "<br>";

// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElement($array){
    $count = 0;
    for($i = 0; $i < count($array); $i++){
        $count++;
    }
    return $count;
}

$resultEx16 = countElement([1,4,5]);
echo $resultEx16;
echo "<br>";

// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($string){
    $reverseString = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reverseString = $reverseString . $string[$i];
    }

    if($reverseString == $string) {
        echo "$string là chuỗi Palindrome";
    } else {
        echo "$string không phải là chuỗi Palindrome";
    }
}
checkPalindrome("service");
echo "<br>";

// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] == $element) {
            $count++;
        }
    }
    return [$count, $element];
}

$resultEx18 = countOccurrences(["S","o","m","e","t","i","m","e","s"], "e");
echo "\"$resultEx18[1]\"". " xuất hiện " . $resultEx18[0] . " lần"; 
echo "<br>";

// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function arrangeArrayDesc($array){
    echo "Sắp xếp mảng theo thứ tự giảm dần: ";
    rsort($array);
    foreach ($array as $var) {
        echo "$var, ";
    }
}

arrangeArrayDesc(["y", "b", "c", "d", "a"]);
echo "<br>";

// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function insertToBeginningOrEnd($array, $beginning, $end) {
    if(isset($beginning)) {
        $array = insertToBeginning($array, $beginning);
    }

    if(isset($end)) {
        $array = insertToEnd($array, $end);
    }

    foreach($array as $element){
        echo $element . " ";
    }
}

function insertToBeginning($array, $element){
    array_unshift($array, $element);
    return $array;
}

function insertToEnd($array, $element){
    array_push($array, $element);
    return $array;
}


$array = [1,2,3,4,5,6,7];
$beginning = 100;
$end = null;

insertToBeginningOrEnd($array, $beginning, $end);
echo "<br>";

// 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function the2ndLargestNumber($array) {
    $largest = $array[0];
    $secondLargest = null;
    for($i = 1; $i < count($array); $i++){
        if($array[$i] > $largest){
            $secondLargest = $largest;
            $largest = $array[$i];
        } elseif($array[$i] < $largest && $array[$i] > $secondLargest){
            $secondLargest = $array[$i];
        }
    }
    return $secondLargest;
}

$array = [1,77,100,7,9,4,2,4,6];
echo "Số lớn thứ 2 trong mảng là: ";
echo the2ndLargestNumber($array);
echo "<br>";

// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function  greatestCommonDivisor($number1, $number2){
    $GCD = 1;
    $min = min($number1, $number2);
    for($i = 1; $i <= $min ;$i++){
        if($number1 % $i == 0 && $number2 % $i == 0){
            $GCD = $i;
        }
    }
    return $GCD;
}

function  leastCommonMultiple($number1, $number2){
    $GCD = greatestCommonDivisor($number1, $number2);
    $LCM = ($number1 * $number2)/$GCD;
    return $LCM;
}


$number1 = 4;
$number2 = 6;

$GCD = greatestCommonDivisor($number1,$number2);
$LCM = leastCommonMultiple($number1,$number2);


echo "Ước số chung lớn nhất của $number1 và $number2 là: $GCD <br>";
echo "Bội số chung nhỏ nhất của $number1 và $number2 là: $LCM";
echo "<br>";

// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function perfectNumber($number){
    $array = [];
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0) {
            $array[] = $i;
        }
    }
    $sum = array_sum($array);
    if($sum == $number){
        return $number;
    } else {
        return false;
    }
}

$number = 8;
$result = perfectNumber($number);

if($result !== false){
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
echo "<br>";

// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function largestOddNumber($array){
    $oddNumberArray = [];
    foreach($array as $element){
        if($element % 2 !== 0){
            $oddNumberArray[] = $element;
        }
    }
    $largest = max($oddNumberArray);
    return $largest;
}

$array = [1,45,4,100,999,12];
echo "Số lẻ lớn nhất trong mảng là: ";
echo largestOddNumber($array);
echo "<br>";

// 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function checkPrimeNumber($number){
    $count = 0;
    for($i = 1; $i <= $number; $i++){
        if($number % $i == 0){
            $count++;
        }
    }
    if($count == 2) {
        return true;
    } else {
        return false;
    }
}
$numEx25 = 13;
$resultEx25 = checkPrimeNumber($numEx25);
if($resultEx25 == true){
    echo "Số $numEx25 là số nguyên tố";
} else {
    echo "Số $numEx25 không phải là số nguyên tố";
}
echo "<br>";

// 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function largestPositiveInteger($array) {
    $max = null;
    $checkPositiveInteger = false;
    foreach ($array as $element){
        if($element > 0 && is_numeric($element)){
            if($element > $max){
                $max = $element;
                $checkPositiveInteger = true;
            }
        } 
    }
    return $max;
}
$arrayEx26 = ["A",1, -99, 2, 999, 0];
$resultEx26 = largestPositiveInteger($arrayEx26);
if ($resultEx26 === null) {
    echo "Mảng không chứa số nguyên dương nào";
} else {
    echo "Số nguyên dương lớn nhất là: " . $resultEx26;
}
echo "<br>";

// 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function largestNegativeInteger($array) {
    $max = null;
    $checkNegativeInteger = false;
    foreach ($array as $element){
        if($element < 0 && is_numeric($element)){
            if($element > $max){
                $max = $element;
                $checkNegativeInteger = true;
            }
        } 
    }
    return $max;
}
$arrayEx27 = ["A",-1, -99, 21, 9, 0];
$resultEx27 = largestNegativeInteger($arrayEx27);
if ($resultEx27 === null) {
    echo "Mảng không chứa số nguyên âm nào";
} else {
    echo "Số nguyên âm lớn nhất là: " . $resultEx27;
}
echo "<br>";

// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOdd($number){
    $sumOdd = 0;
    for($i = 1; $i <= $number; $i++){
        if($i % 2 != 0){
            $sumOdd += $i;
        }
    }
    return $sumOdd;
}

$numEx28 = 9;
$resultEx28 = sumOdd($numEx28);
echo "Tổng các số lẻ từ 1 đến $numEx28 là: $resultEx28";

// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function squareNumbers($min, $max){
    $squareNumber = [];
    for($i = $min; $i <= $max; $i++) {
        $sqrt = sqrt($i);
        if($sqrt == floor($sqrt)) {
            $squareNumber[] = $i;
        }
    }
    return $squareNumber;
}

$minEx29 = 1;
$maxEx29 = 100;

$resultEx29 = squareNumbers($minEx29, $maxEx29);

if (empty($resultEx29)) {
    echo "Không có số chính phương trong khoảng từ $minEx29 đến $maxEx29";
} else {
    echo "Các số chính phương trong khoảng từ $minEx29 đến $maxEx29 là: " . implode(", ", $resultEx29);
}

echo "<br>";

// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkSubstringInString($string, $subString){
    $position = strpos($string, $subString);
    if($position !== false) {
        return true;
    } else {
        return false;
    }
}

$stringEx30 = "How are you?";
$subStringEx30 = "I am fine";
$resultEx30 = checkSubstringInString($stringEx30, $subStringEx30);
if($resultEx30 !== false) {
    echo "Chuỗi \"$stringEx30\" chứa chuỗi \"$subStringEx30\"";
} else {
    echo "Chuỗi \"$stringEx30\" không chứa chuỗi \"$subStringEx30\"";
}