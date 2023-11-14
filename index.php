<!-- <?php
// Cau 1
$a = 10; 
if($a % 2 ==0 ){
    echo $a . "là số chẵn";
}else {
    echo $a . "là số lẻ";
}
// Cau 2
$n = 4; 
$sum = 0;
echo " n = ". $n . "<br>";
for($i = 1; $i <= $n; $i++) {
    $sum+=$i;
}
echo "Tong tu 1 den " . $n . "la: " . $sum;
?> -->

<?php
// // Cau 3
// function printMultiplicationTable($start, $end) {
//     for ($i = 1; $i <= 10; $i++) {
//         echo "\nBảng cửu chương $i:\n";
//         for ($j = $start; $j <= $end; $j++) {
//             echo "$i x $j = " . ($i * $j) . "\n";
//         }
//     }
// }

// printMultiplicationTable(1, 10);
// ?>
<?php
// // Cau 4
//     $str1 = "doan quang thang";
//     $str2 = "quang";
//     if(strpos($str1, $str2) !== FALSE) {
//         echo $str1.' có chứa từ '.$str2;
//     }else {
//         echo $str1.' không chứa từ '.$str2;
//     }
// // Cau 5
//     $a = array(2, 4, 5, 1, 7);
//     echo "<pre>";
//     print_r($a);
//     echo "</pre>";
//     echo '<br>';
//     echo 'Giá trị nhỏ nhất của mảng đó là: '. min($a);
//     echo '<br>';
//     echo 'Giá trị lớn nhất của mảng đó là: '. max($a);
// // Cau 6
//     $a = array(2, 3, 4, 1, 5, 7);
//     echo '<pre>';
//     print_r($a);
//     echo '</pre>';
//     sort($a);
//     echo 'Mảng theo thứ tự tăng dần là: ';
//     foreach($a as $value){
//         echo $value." ";
//     }
// // Cau 7
//     $n = 10; 
//     $gt = 1; 
//     for($i = 2; $i <= 10; $i++){
//         $gt = $gt * $i;
//     }
//     echo 'Giai thừa của '.$n.' là: '.$gt;
// // Cau 8
//     $start = 3;
//     $end = 20; 
//     echo "Các số nguyên tố trong khoảng từ ".$start." đến ".$end." là: ";
//     for($i = $start; $i <= $end; $i++) {
//         $flag = 0;
//         for($j = 2; $j <= sqrt($i); $j++){
        
//             if($i % $j == 0){
//                 $flag++;
//             }
        
//         }
//         if($flag == 0){
//             echo $i.' ';
//         }
    
//     }

// // Cau 9
//     $a = array(2, 3, 4, 6, 7);
//     echo '<pre>';
//     print_r($a);
//     echo '</pre>';
//     $sum = 0;
//     foreach($a as $value){
//         $sum += $value;
//     }
//     echo 'Tổng của mảng là: '.$sum;
// // Cau 10
//     function fbnc($start, $end) {
//         $fibonacci = array();
//         $a = 0;
//         $b = 1;
//         while ($a <= $end) {
//             if ($a >= $start) {
//                 $fibonacci[] = $a;
//             }
//             $temp = $a + $b;
//             $a = $b;
//             $b = $temp;
//         }
//         echo "Các số Fibonacci trong khoảng từ $start đến $end: ";
//         foreach ($fibonacci as $number) {
//             echo $number . " ";
//         }
//     }
//     $start = 10;
//     $end = 100;
//     fbnc($start, $end);
// // Cau 11
//     function ast($n){
//         $sum = 0;
//         $n_str = (string) $n;
//         for($i = 0; $i < strlen($n_str); $i++){
//             $sum += $n_str[$i] * $n_str[$i] * $n_str[$i];
//         }
//         if($sum == $n){
//             echo "$n có là số Armstrong";
//         }else {
//             echo "$n không là số Armstrong";
//         }
//     }
//     ast(20);
//     $a = array(3, 4, 5, 8);
//     $length = 0;
//     foreach($a as $value){
//         $length++;
//     }
//     function insert($gt, $vt){
//         global $a, $length;
//         for($i = 0; $i <= $length; $i++){
//             if($vt == $i){
//                 for($j = $length; $j > $i; $j--){
//                     $a[$j] = $a[$j-1];   
//                 }
//                 $a[$i] = $gt;
//             }
        
//         }  
//     }
//     echo "Trước thêm: "."<br>";
//     echo '<pre>';
//     print_r($a);
//     echo '</pre>';
//     insert(2, 2);
//     echo "Sau thêm: "."<br>";
//     echo '<pre>';
//     print_r($a);
//     echo '</pre>';
// // Cau 12
//     function ktratrung($array) {
//         return array_values(array_unique($array));
//     }
//     $arr13 = array(2, 1, 3, 4, 2, 4, 6, 7, 1);
//      $arr13new = ktratrung($arr13);
//     echo "Mảng sau khi loại bỏ các phần tử trùng lặp:"."<br>";
//     echo "<pre>";
//     print_r($arr13new);
//     echo "</pre>";

// // Cau 13
//     $arr14 = array(2, 3, 4, 6, 7, 1);
//     echo '<pre>';
//     print_r($arr14);
//     echo '</pre>';
//     $a = 2;
//     $length = 0;
//     foreach($arr14 as $value){
//         $length++;
//     }
//     $vt = 0;
//     $flag = 0;
//     for($i = 0; $i < $length; $i++) {
//         if($arr14[$i] === $a){
//             $vt = $i;
//             $flag = 1;
//             break;
//         }
//     }
//     if($flag == 1){
//         echo "Vị trí của phần tử ".$a." là ".$vt;
//     }else{
//         echo "Phần tử ".$a." không có trong mảng";
//     }
// // Cau 16
//     $arr16 = array(1, 2, 3, 5, 7);
//     echo '<pre>';
//     print_r($arr16);
//     echo '</pre>';
//     $length = 0;
//     foreach($arr16 as $value) {
//         $length++;
//     }
//     echo "Độ dài của mảng là ".$length." phần tử";
// // Cau 17
//     function checkPalindrome($str){
//         if($str == strrev($str)){
//             echo "Đây là chuỗi Palindrome";
//         }else {
//             echo "Đây không là chuỗi Palindrome";
//         }
//     }
//     checkPalindrome("12321");
// // Cau 18
//     $arr18 = array(2, 3, 5, 1, 7, 3, 1);
//     echo '<pre>';
//     print_r($arr18);
//     echo '</pre>';
//     $length = 0;
//     $a = 1;
//     foreach($arr18 as $value) {
//         $length++;
//     }
//     function solanxuathien($a) {
//         $dem = 0;
//         global $arr18, $length;
//         for($i = 0; $i < $length; $i++){
//             if($arr18[$i] == $a) {
//                 $dem++;
//             }
//         }
//         return $dem;
//     }
//     echo "Số lần xuất hiện của ".$a." là: ".solanxuathien($a);

// // Cau 19
//     $arr19  = array(2, 1, 3, 4, 7, 6);
//     echo '<pre>';
//     print_r($arr19);
//     echo '</pre>';
//     rsort($arr19);
//     echo 'Mảng theo thứ tự giảm dần là: ';
//     foreach($arr19 as $value){
//         echo $value." ";
//     }
// // Cau 20
//     $arr20 = array(2, 3, 1, 4);
//     echo "Mảng ban đầu: "."<br>";
//     echo "<pre>";
//         print_r($arr20);
//     echo "</pre>";
//     function themvaodaumang($arr, $a){
//         array_unshift($arr, $a);
//         return $arr;
//     }
//     function themvaocuoimang($arr, $a){
//         $arr[] = $a;
//         return $arr;
//     }

//     echo "Sau khi thêm vào đầu mảng: "."<br>";
//     $arr20 = themvaodaumang($arr20, 3);
//     echo "<pre>";
//         print_r($arr20);
//     echo "</pre>";
//     echo "Sau khi thêm vào cuối mảng: "."<br>";
//     $arr20 = themvaocuoimang($arr20, 9);
//     echo "<pre>";
//         print_r($arr20);
//     echo "</pre>";
// // Cau 21
//     echo "<br>"."21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng."."<br>";
//     $arr21 = array(2, 1, 4, 6, 5);
//     echo '<pre>';
//     print_r($arr21);
//     echo '</pre>';
//     rsort($arr21);
//     echo "Số lớn thứ 2 trong mảng là: ".$arr21[1];
// // Cau 22
//     $ucln = 0;
//     function ucln($a, $b){
//         global $ucln;
//         if($a == 0 || $b == 0){
//             $ucln = $a + $b;
//         }else {
//             while($a != $b){
//                 if($a > $b){
//                     $a = $a -$b;
//                 }else {
//                     $b = $b - $a;
//                 }
//             }
//             $ucln = $a;
//         }
//         return $ucln;
//     }
//     echo "Ước chung lớn nhất của 4 và 8 là: " .ucln(4, ."<br>";
//     function bcnn($a, $b){
//         return ($a * $b) / ucln($a, $b);
//     }
//     echo "Bội chung nhỏ nhất của 4 và 8 là: " .bcnn(4, 8);

// // Cau 23
//     function sohh($a){
//         $sum = 0;
//         for($i = 1; $i < $a; $i++){
//             if($a % $i == 0){
//                 $sum += $i;
//             }
//         }
//         if($sum == $a) {
//             echo "$a là số hoàn hảo";
//         }else {
//             echo "$a không là số hoàn hảo";
//         }
//     }
//     sohh(28);
// // Cau 24
//     $arr24 = array(2, 3, 4, 1, 5, 7, 6);
//     echo '<pre>';
//     print_r($arr24);
//     echo '</pre>';
//     function solemax($arr) {
//         rsort($arr);
//         foreach($arr as $value){
//             if($value % 2 != 0){
//                 echo "Số lẻ lớn nhất của mảng là: $value";
//                 break;
//             }
//         }
//     }
//     solemax($arr24);

// // Cau 25
//     function kTrasnt($n){
//         if($n <= 1){
//             echo $n.' không phải số nguyên tố';
//         }
//         $flag = null;
//     if($n > 1) {
//             for($i = 2; $i < $n; $i++){
//                 if($n % $i == 0){
//                     $flag++;
//                     break;
//                 }
//             }
//             if($flag == 0) echo $n.' có là số nguyên tố';
//             else echo $n.' không phải số nguyên tố';
//         }
//     }
//     kTrasnt(8);

// // Cau 26
//     $arr26 = array(2, 3, -1, 4, 5, 6);
//     echo "<pre>";
//         print_r($arr26);
//     echo "</pre>";
//     function maxx($arr){
//         rsort($arr);
//         foreach($arr as $value){
//             if($value > 0){
//                 return $value;
//             }
//         }
//     }
//     echo "Số dương lớn nhất của mảng trên là: ".maxx($arr26);

// // Cau 27
//     $arr27 = array(2, 3, -1, -4, -5, 6);
//     echo "<pre>";
//         print_r($arr27);
//     echo "</pre>";
//     function maxxam($arr){
//         rsort($arr);
//         foreach($arr as $value){
//             if($value < 0){
//                 return $value;
//             }
//         }
//     }
//     echo "Số âm lớn nhất của mảng trên là: ".maxxam($arr27);
// // Cau 29
//     function scp($start, $end){
//         echo "Số chính phương trong đoạn từ $start đến $end là: ";
//         for($i = $start; $i <= $end; $i++){
//             if(pow(round(sqrt($i)),2) == $i) {
//                 echo $i." ";
//             }
//         }
//     }
//     scp(1, 10); -->
// Cau 30
function kTrastr($str1, $str2){
    $check30 = strpos($str1, $str2);
    if($check30 !== FALSE){
        echo "Chuỗi $str2 là chuỗi con của $str1";
    }else {
        echo "Chuỗi $str2 không phải là chuỗi con của $str1";
    }
}
kTrastr("huu duc", "huu");
?>