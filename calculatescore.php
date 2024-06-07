<?php

echo " Que:- Part I (30 minutes)
Write a function to calculate a score for a candidate’s response for an essay type question based on how closely it matches the correct answer.
Assume that the function takes two string arguments:
 Candidate’s response (Response)
 Correct Answer (CorrectAnswer)
The function needs to identify each word in the Candidate’s response that matches with a word in the Correct Answer and assign points based on the following rule:
 Numbers - 4 points
 Words with more than 7 characters - 3 points
 Words with less than 5 characters - 0 points
 All other words - 1 point
Calculate “Maximum Possible Score” as Sum of points for each word in the Correct Response String
Calculate “Points Scored” as Sum of points for each word in the “Candidate Response” that has a match with a word in the Correct Answer string.
After calculating both “Maximum Possible Score” and “Points Scored”, the function should return the percentage ratio of the “Points Score” and the “Maximum Possible Score”
Read through the following example to understand the required outcome of the function
Correct Answer: “There are twenty-four hours in a day, 30 days in a month, and 12 months in the calendar year.”
Candidate Response: “There are Twenty-Four hours in a day. A year has 14 months.”
Correct Answer Scoring:
So the “Maximum Possible Score” (A) is 16.
Candidate Response Scoring:
So the “Points Scored” (B) is 6. The percentage score (B/A %) is 37.5%.
• There is some ambiguity in the above requirement specification. It is expected that you will make necessary assumptions and note these down along with your solution as comments.
• Extra points for spotting any errors with the test data provided above
Evaluation criteria:
• How clearly the code communicates it’s intent
• Maintenability and efficiency
• Correctness
• Eye for detail in the requirement review and solution provided";




// function `calculateScore` is use to calculate the score.
function calculateScore($arr){
    $max_score = 0;
    foreach($arr as $data){
        if(is_numeric($data)){
            $max_score += 4;
        } else {
            $newArr = str_split($data);
            $length = count($newArr);
            if($length > 7){
                $max_score += 3;
            } else if($length < 5){
                $max_score += 0;
            } else {
                $max_score += 1;
            }
        }
    }
    
    return $max_score;
}

function MaximumPossibleScore($CorrectAnswer , $Response){
    // This code is for correct answer and score
    $str_corr =  strtolower(str_replace('.', '',str_replace(',', '',$CorrectAnswer)));
    $corr_ans = explode(' ', $str_corr);
    $MaximumPossibleScore = calculateScore($corr_ans);
    
    // This code is for response answer and score
    $str_res =  strtolower(str_replace('.', '',str_replace(',', '',$Response)));
    $res_ans = explode(' ', $str_res);
    $resOut = [];
    foreach($res_ans as $data){
        if(in_array($data , $corr_ans)){
            $resOut[] = $data;
        }
    }
    $PointsScored = calculateScore($resOut);

    // The percentage score (B/A %) is
    
    $cal_percentage = ($PointsScored / $MaximumPossibleScore) * 100;
    
    $percentage = number_format($cal_percentage, 2);
    
    $output = "Correct Answer Scoring: $MaximumPossibleScore , Candidate Response Scoring: $PointsScored and the percentage score is  $percentage";
    
    return $output;
}



$CorrectAnswer = 'There are twenty-four hours in a day, 30 days in a month, and 12 months in the calendar year.';
$Response = 'There are Twenty-Four hours in a day. A year has 14 months.';
echo MaximumPossibleScore($CorrectAnswer , $Response);

