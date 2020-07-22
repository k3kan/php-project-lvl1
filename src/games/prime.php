<?php

namespace Src\Games\Prime;

use Brain\Src\Structure;

use const Brain\Src\Structure\MAX_AMOUNT_SOLUTION;

function getBrainPrime()
{
    for ($solution = 1; $solution  <= MAX_AMOUNT_SOLUTION; $solution++) {
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
        $questionAnswer[$question] = $answer;
    }
    return $questionAnswer;
}

function getResultGames()
{
    $game = getBrainPrime();
    $introduction = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $nameUser = Structure\askUserName($introduction);
    $resultGame = Structure\checkTerms($game, $nameUser);
}
