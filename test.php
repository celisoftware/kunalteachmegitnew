Online chnages...
AAAAAAA

DDDDDD

<?php
$arr = [5,2,1,4,3,6];

for($i = 0; count($arr) > $i; $i++){
    for($j = 0; count($arr) - 1 > $j; $j++){
        if($arr[$j] > $arr[$j + 1]){
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

print_r(implode(',',$arr));
