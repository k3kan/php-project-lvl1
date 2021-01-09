<?php

namespace Brain\Src\Structure;

use function cli\prompt;
use function cli\line;

const QUESTIONS = 3;

function randomNumber()
{
    return rand(1, 100);
}

function askUserName(string $introduction)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($introduction);
    return $name;
}

function outputResult($arrayCalculation, $introduction)
{
    $userName = askUserName($introduction);
    $numberOfCorrectAttempts = 0;
    foreach ($arrayCalculation as $question => $answer) {
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== 'yes' && $userAnswer !== 'no') {
            $userAnswer = (int) $userAnswer;
        }
        if ($userAnswer === $answer) {
            line("Correct!");
            $numberOfCorrectAttempts++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            line("Let's try again, %s!", $userName);
            break;
        }
    }
    if ($numberOfCorrectAttempts === QUESTIONS) {
        line("Congratulations, %s!", $userName);
    }
}
