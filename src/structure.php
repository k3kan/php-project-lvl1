<?php

namespace Brain\Src\Structure;

use function cli\prompt;
use function cli\line;
use function Src\Games\Calc\getCalculation;
use function Src\Games\Even\getEvenOrNot;
use function Src\Games\Gcd\getMaxDivider;
use function Src\Games\Prime\getBrainPrime;
use function Src\Games\Progression\getProgression;

const MAX_AMOUNT_SOLUTION = 3;

function randomNumber()
{
    return rand(1, 100);
}

function askUserName(string $introduction)
{
    line('Welcome to the Brain Game!');
    line($introduction);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function checkTerms($arrayCalculation, $UserName)
{
    $numberOfCorrectAttempts = 0;
    foreach ($arrayCalculation as $question => $answer) {
        line($question);
        $UserAnswer = prompt("You answer");
        if ($UserAnswer !== 'yes' && $UserAnswer !== 'no') {
            $UserAnswer = (int) $UserAnswer;
        }
        if ($UserAnswer === $answer) {
            line("Correct!");
            $numberOfCorrectAttempts++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $UserAnswer, $answer);
            line("Let's try again, %s!", $UserName);
            break;
        }
    }
    if ($numberOfCorrectAttempts === 3) {
        line("Congratulation, %s!", $UserName);
    }
}
