<?php

/**
 * Given a string s containing just the characters ( ), { }, [ ] determine if the input string is valid.

        An input string is valid if:

        1. Open brackets must be closed by the same type of brackets.
        2. Open brackets must be closed in the correct order.
        3. Every close bracket has a corresponding open bracket of the same type
*/

$s = "[{[]}{())]";
    $arr = str_split($s);
    echo checkValidString($arr);
    
    function checkValidString($arr){
        $countArr = [];
        foreach($arr as $data){
            if(!empty($countArr[$data])){
                $countArr[$data]++;
            } else {
                $countArr[$data] = 1;
            }
        }
    
        $outputForBracket = $outputForSquareBracket = $outputForCurlyBracket = 0;
        if(!empty($countArr['(']) && !empty($countArr[')'])){
            if($countArr['('] == $countArr[')']){
                $outputForBracket = 1;
            } else {
                $outputForBracket = 2;
            }
        } else if(!empty($countArr['(']) && empty($countArr[')'])){
            $outputForBracket = 2;
        } else if(empty($countArr['(']) && !empty($countArr[')'])){
            $outputForBracket = 2;
        }
        if(!empty($countArr['[']) && !empty($countArr[']'])){
            if($countArr['['] == $countArr[']']){
                $outputForSquareBracket = 1;
            }else {
                $outputForSquareBracket = 2;
            }
        } else if(!empty($countArr['[']) && empty($countArr[']'])){
            $outputForSquareBracket = 2;
        } else if(empty($countArr['[']) && !empty($countArr[']'])){
            $outputForSquareBracket = 2;
        }
        
        if(!empty($countArr['{']) && !empty($countArr['}'])){
            if($countArr['{'] == $countArr['}']){
                $outputForCurlyBracket = 1;
            }else {
                $outputForCurlyBracket = 2;
            }
        } else if(!empty($countArr['{']) && empty($countArr['}'])){
            $outputForCurlyBracket = 2;
        } else if(empty($countArr['{']) && !empty($countArr['}'])){
            $outputForCurlyBracket = 2;
        }
    
        //echo $outputForBracket .' = '.$outputForSquareBracket . ' = '. $outputForCurlyBracket;
         if($outputForBracket == 2 || $outputForSquareBracket == 2 || $outputForCurlyBracket == 2){
            return "false";     
        }else if($outputForBracket == 1 || $outputForSquareBracket == 1 || $outputForCurlyBracket == 1){
            return "true";
        }
    }
    
    