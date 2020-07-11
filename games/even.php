<?php

namespace Games\Even;

function getPatiryCheck()
{
    for ($i = 0; $i < 3; $i++) {
        $rand = rand(1, 100);
        $question = "Question: {$rand}";
        $rand % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        $arrayAllOperations[$question] = $answer;
    }
    return $arrayAllOperations;
}
