<?php

namespace Src\Games\Even;

use Brain\Src\Structure;

function getEvenOrNot()
{
    $randomNumber = Structure\randomNumber();
    $question = "Question: {$randomNumber}";
    $randomNumber % 2 === 0 ? $answer = 'yes' : $answer = 'no';
    $questionAnswer  = [$question, $answer];
    return $questionAnswer;
}
