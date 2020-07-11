<?php

namespace Games\Prime;

function getBrainPrime()
{
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        for ($divider = 2; $divider <= $number; $divider++) {
            if ($divider * $divider <= $number & $number % $divider === 0) {
                $answer = 'no';
                break;
            }
            $answer = 'yes';
        }
        if ($number < 2) {
            $answer = 'no';
        }
        $question = "Question: {$number}";
        $arrayAllOperations[$question] = $answer;
    }
    return $arrayAllOperations;
}
