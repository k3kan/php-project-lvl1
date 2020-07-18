<?php

namespace Games\Prime;

function getBrainPrime()
{
    $randomNumber = rand(1, 100);
    for ($divider = 2; $divider <= $randomNumber; $divider++) {
        if ($divider * $divider <= $randomNumber & $randomNumber % $divider === 0) {
            $answer = 'no';
            break;
        }
        $answer = 'yes';
    }
    if ($randomNumber < 2) {
        $answer = 'no';
    }
    $question = "Question: {$randomNumber}";
    $arrayOperations = [$question, $answer];
    return $arrayOperations;
}
