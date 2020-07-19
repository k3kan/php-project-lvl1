<?php

namespace Games\Prime;

use Brain\Games\Structure;

function getBrainPrime()
{
    $randomNumber = Structure\randomNumber();
    for ($divider = 2; $divider <= $randomNumber; $divider++) {
        if ($divider * $divider <= $randomNumber && $randomNumber % $divider === 0) {
            $answer = 'no';
            break;
        }
        $answer = 'yes';
    }
    if ($randomNumber < 2) {
        $answer = 'no';
    }
    $question = "Question: {$randomNumber}";
    $questionAnswer = [$question, $answer];
    return $questionAnswer;
}
