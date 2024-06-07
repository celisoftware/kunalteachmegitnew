<?php
/** Count individual characters */
$str = "aabbccc";
$arr = str_split($str);
$store = [];
foreach($arr as $data){
    if($store[$data]){
    	$store[$data]++;
    } else {
    	$store[$data] = 1;
    }
}
print_r($store);

$str = 'aabbccc';
$arr = str_split($str);
$output = [];
foreach($arr as $data){
    if(array_key_exists($data , $output)){
        $output[$data]++;
    } else {
        $output[$data] = 1;
    }
}
print_r($output);
echo "<br>";

// Output
/*
Array
(
    [a] => 2
    [b] => 2
    [c] => 3
) */

/** Creating a pyramid pattern right-angled pyramid */
for($i = 0; 5 > $i; $i++){
    $j = $i + 1;
    for($j; $j > 0;$j--){
        echo '*';
    } 
    echo "<br>";
}
echo "<br>";

// Output
/*
*
**
***
****
*****
*/
/** Creating a pyramid pattern left-angled pyramid */
for($i = 5; $i > 0; $i--){
    $j = $i - 1;
    $k = 5 - $j;
    echo str_repeat("&nbsp" , $j);
    for($k; $k > 0; $k--){
       echo '*'; 
    }
    echo "<br>";
}
echo "<br>";
// Output
/*
    *
   **
  ***
 ****
*****
*/
/** Creating a pyramid pattern full-angled pyramid */
for($i = 1; 5 >= $i; $i++){
    $j = 5 - $i;
    echo str_repeat("&nbsp" , $j);
    for($k = 1; $k <= $i; $k++){
        echo '* ';
    }
    echo "<br>";
}
echo "<br>";
// Output
/*
    * 
   * * 
  * * * 
 * * * * 
* * * * * 
*/

/** 
Arrange in asending order 
ex:- 3,5,4,1,2 
output:- 1,2,3,4,5
*/
$array = [3, 5, 2, 1, 4];
for($j = 0; $j < count($array); $j++) {
    for($i = 0; $i < count($array)-1; $i++){
        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }    
}
print_r($array);
echo "<br>";
die;

