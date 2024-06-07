<?php

// array_map()
echo "<b>array_pop()</b>";
echo '<br>';
$arr = [5,2,3,4,1,9];
echo "i have array [5,2,3,4,1,9] when use arraypop i get ". array_pop($arr);

echo '<br>';
echo '<br>';


// array_filter()
echo "<b>array_filter()</b>";
echo '<br>';

function matchValue($data){
    if($data != 2){
        return $data;
    }
}

$arr = [1,5,2,3,4];
$array_filter = array_filter($arr, 'matchValue');
echo "array is [1,5,2,3,4] and output array_filter is [". implode(',', $array_filter)."]";

echo '<br>';
echo '<br>';


// array_reverse()
echo "<b>array_reverse()</b>";
echo '<br>';
$arr = ['a', 'b', 'c', 'd'];
$array_reverse = array_reverse($arr);
echo "array  is ['a', 'b', 'c', 'd'] reverse output data is [". implode(',', $array_reverse)."]";
echo '<br>';
$arr = [ 'name' => 'sadik', 'age' => 25];
$array_reverse = array_reverse($arr);
print_r($array_reverse);


echo '<br>';
echo '<br>';


// array_intersect()
echo "<b>array_intersect()</b>";
echo '<br>';

$array1 = ['a', 'b', 'c', 'd'];
$array2 = ['b', 'c', 'e'];

$intersect = array_intersect($array1, $array2);
echo "array one is ['a', 'b', 'c', 'd'] and array two is ['b', 'c', 'e'] so get common data is [". implode(',', $intersect)."]";

echo '<br>';
echo '<br>';


// array_diff()
echo "<b>array_diff()</b>";
echo '<br>';

$arr1 = [2,5,3,6,1,4];
$arr2 = [2,3,1];
$array_diff = array_diff($arr1 , $arr2);
echo "array one is [2,5,3,6,1,4] and array two is [2,3,1] so output is [" . implode(',', $array_diff)."]";
echo '<br>';
$arr1 = [
    'name' => 'sadik',
    'age' => 20
];
$arr2 = [
    'name' => 'sadik',
    'address' => 'bilaspur',
    'age' => 30
];
$array_diff = array_diff_assoc($arr2, $arr1);
print_r($array_diff);
echo '<br>';
echo '<br>';



// in_array
echo "<b>in_array() :- </b> In array [5,3,6,2,1] find  5 is exist in array or not?";
echo '<br>';

$arr = [5,3,6,2,1];
$find = 5;
if(in_array($find, $arr)){
    echo "Exist number $find";
}

echo '<br>';
echo '<br>';

// Array Combine
echo "<b>Array Combine</b>";
echo '<br>';
$arr1 = ['Name','Age','Contact'];
$arr2 = ['Komal',16, '+91 9778 77 8878'];
$arrayCombine = array_combine($arr1, $arr2);
echo "array one = ['Name','Age','Contact']";
echo '<br>';
echo "array two = ['Komal',16, '+91 9778 77 8878']";
echo '<br>';
print_r($arrayCombine);

echo '<br>';
echo '<br>';


// Array Merge
echo "<b>Array Merge</b>";
echo '<br>';
echo "<b>1. Indexed array</b>";
echo '<br>';

$arr1 = ['car','money'];
$arr2 = ['bed'];
$arrayMarge = array_merge($arr1, $arr2);

echo "array one = ['car','money']";
echo '<br>';
echo "array two = ['bed']";
echo '<br>';
echo "array merge output = [". implode(',', $arrayMarge)."]";
echo '<br>';

echo "<b>2. Associative array</b>";
echo '<br>';

$arr1 = ['name' => 'Sadique', 'age' => 25, 'city' => 'Bilaspur'];
$arr2 = ['address' => 'Bilaspur chhattisgarh'];
$arrayMarge = array_merge($arr1, $arr2);

echo "array one = ['name' => 'Sadique', 'age' => 25, 'city' => 'Bilaspur']";
echo '<br>';
echo "array two = ['address' => 'Bilaspur chhattisgarh']";
echo '<br>';
echo "Merge value => ";

print_r($arrayMarge);


echo '<br>';
echo '<br>';


// Que 1:- Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.
// Ans:- 0,1,1,2,3,5,8,13,21,34,55.....

echo "Que 1:- Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.";
echo '<br>';

// Way 1
$num = 10;
$i = 0;
$arr = [];
while($num >= $i){
    if($i <= 1){
        $arr[] = $i;
    } else {
        $arr[] = $arr[$i - 1] + $arr[$i - 2];
    }

    $i++;
}
echo 'Fibonacci Series way1 :- '. implode(',', $arr);
echo '<br>';
// Way 2
echo fibonacciSequence($num);
function fibonacciSequence($num) {
    $i = 0;
    $arr = [];
    $store = [];
    while($num >= $i){
        if($i <= 1){
            $arr[] = $store[] = $i;
        } else {
            $lastNum = array_pop($arr);
            $secondLastNum = array_pop($arr);
            $sum = $lastNum + $secondLastNum;
            $store[] = $sum;
            $arr = $store;
        }

        $i++;
    }
    return 'Fibonacci Series way2 :- '. implode(',', $arr);

}
echo '<br>';
echo '<br>';

// Que 2:- Create a PHP function to check if a given string is a palindrome or not.
// Ans:- if(racecar === racecar)

echo "Que 2:- Create a PHP function to check if a given string is a palindrome or not.";
echo '<br>';

$str = "A man, a plan, a canal, Panama";
echo palidrome($str);
function palidrome($string) {
    $alterStr =  str_replace(',','', strtolower(str_replace(' ', '', $string)));
    $arryString = str_split($alterStr);

    $revStr = '';
    for($i = count($arryString) - 1;  0 <= $i; $i--){
        $revStr .= $arryString[$i];
    }
    if($alterStr === $revStr){
        return "The text `$string` is palindrome.";
    } else {
        return 'Not palindrome';
    }
}

echo '<br>';
echo '<br>';



// Que 3:- Write a PHP function to calculate the factorial of a non-negative integer.
// Ans :- 5! = 5  4 * 3 * 2 * 1 = 120

echo "Que 3:- Write a PHP function to calculate the factorial of a non-negative integer.";
echo '<br>';

$num = 5;
$output = 1;
for($i = 0; $num > $i; $i++){
    $output *= $i +1;
}
echo "The factorial of $num is $output";

echo '<br>';
echo '<br>';

// Que 4:- Create a PHP function to determine whether a given number is prime or not.
// Ans:- 2,3,5,7,11.. all are prime

echo "Que 4:- Create a PHP function to determine whether a given number is prime or not.";
echo '<br>';

$num = 10;
$result = prime($num);
echo $result['message'] . " " . ($result['is_prime'] ? "Yes" : "No");

function prime($num) {
    $result = array();
    if($num <= 1){
        $result['is_prime'] = false;
        $result['message'] = "The $num is not prime.";
    }
    elseif($num <= 3){
        $result['is_prime'] = true;
        $result['message'] = "The $num is prime.";
    }
    else{
        $is_prime = true;
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i === 0){
                $is_prime = false;
                break;
            }
        }
        $result['is_prime'] = $is_prime;
        $result['message'] = $is_prime ? "The $num is prime." : "The $num is not prime.";
    }
    return $result;
}


echo '<br>';
echo '<br>';


// Que 5:- Write a PHP function to remove duplicate values from an array and preserve the original order of elements.
// Ans:- 1,2,2,5,1,3,4,3,5 output:- 1,2,5,3,4  

echo "Que 5:- Write a PHP function to remove duplicate values from an array and preserve the original order of elements.";
echo '<br>';

$arr = [1,2,2,5,1,3,4,3,5];
$replaceDuplicate = [];
foreach($arr as $data){
    if(!in_array($data, $replaceDuplicate)){
        $replaceDuplicate[] = $data;
    }
}

echo "Given value is ".implode(',', $arr) . " and after replace duplicate data we got ". implode(',', $replaceDuplicate);

echo '<br>';
echo '<br>';

// Que 6:- Implement the Bubble Sort algorithm in PHP to sort an array of integers in ascending order.
// Ans :- Given [5,2,1,4,3,6] convert to [1,2,3,4,5,6]

echo "Que 6:- Implement the Bubble Sort algorithm in PHP to sort an array of integers in ascending order.";
echo '<br>';
$array = [5,2,1,4,3,6];
for($i = 0; count($array) > $i; $i++){
    for($j = 0; count($array) - 1 > $j; $j++){
        if($array[$j] > $array[$j + 1]){
            $store = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $store;
        }
    }
}
echo 'Given array is [5,2,1,4,3,6] and the output is ['. implode(',', $array).']';


echo '<br>';
echo '<br>';


// Que 7:- Write PHP code to read a text file line by line and display each line along with its line number.

echo "Que 7:- Write PHP code to read a text file line by line and display each line along with its line number.";
echo '<br>';

$filepath = 'zFile.txt';
$openFile = fopen($filepath, 'r');
$lineNumber = 1;
while($line = fgets($openFile)){
    echo "$line";
    echo '<br>';
}

echo '<br>';
echo '<br>';


// Que 8:- Create a PHP class representing a car with properties such as make, model, and year. Include methods to set and get these properties.
echo " Que 8:- Create a PHP class representing a car with properties such as make, model, and year. Include methods to set and get these properties.";
echo '<br>';
 
class Car {
    private $make;
    private $model;
    private $year;
    
    function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function setCareDetails($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    function getCareDetails() {
        return "Car Maker is $this->make , its model is $this->model and year is $this->year.";
    }
}

$car = new Car("Toyota", "Camry", 2020);
echo $car->getCareDetails();

echo '<br>';
echo '<br>';


// Que 9:- Get a random number from an array

echo "Que 9:- Get a random number from an array
        array is [1,2,3,4,5,6,7,8,9,10] get any 5 random number from given array.";
echo "<br>";

$i = 1;
$output = [];
$arr = [1,2,3,4,5,6,7,8,9,10];
while(5 >= $i){
    $randomIndex = rand(0, 10 - 1);
    // $output[] = $arr[$randomIndex]; // using rand you might get duplicate numbers in your output.
    $output[] = $arr[array_rand($arr)]; // To fix this issue, you can use the array_rand() function to get random keys from the array without duplicates.
    // Remove the selected element from the array
    array_splice($arr, $randomIndex, $i);

    $i++;
}
echo 'So output of random array is [' .implode(',', $output) . '].';

echo '<br>';
echo '<br>';


echo 'Que 10:- You have  two variable $a = 10 and $b = 2 now get 5 without using / and * but you can use  + and -.';
echo '<br>';

$a = 10;
$b = 2;
$a++;
$c = $a - $b - $b - $b;
echo $c;


echo '<br>';
echo '<br>';

// Que 11:- Implement the FizzBuzz problem in PHP. 
//         Write a program that prints the numbers from 1 to 100, 
//         but for multiples of three, print "Fizz" instead of the number, and for multiples of five, print "Buzz". 
//         For numbers that are multiples of both three and five, print "FizzBuzz".


echo 'Que 11:- Implement the FizzBuzz problem in PHP. 
        Write a program that prints the numbers from 1 to 100, 
        but for multiples of three, print "Fizz" instead of the number, and for multiples of five, print "Buzz". 
        For numbers that are multiples of both three and five, print "FizzBuzz".';

echo '<br>';

$i = 1;
$j = 100;
for($i; $j >= $i; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo "$i = FizzBuzz";
    } else if($i % 3 === 0){
        echo "$i = Fizz";
    } else if($i % 5 === 0){
        echo "$i = Buzz";
    } else {
        echo $i;
    }
    echo "<br>";
}