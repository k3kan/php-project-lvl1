<?php

namespace Brain\Games\Structure;

use function cli\prompt;
use function cli\line;

function random()
{
    return rand(1, 100);
}

function autoloadGames($dir)
{
    $autoloadPath1 = $dir . '/../../../autoload.php';
    $autoloadPath2 = $dir . '/../vendor/autoload.php';

    if (file_exists($autoloadPath1)) {
        return require_once $autoloadPath1;
    } else {
        return require_once $autoloadPath2;
    }
}

function askUserName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}


function checkTerms($arrayCalculation, $UserName)
{
    $terms = true;
    $numberOfCorrectAttempts = 0;
    foreach ($arrayCalculation as $question => $answer) {
        line($question);
        $UserAnswer = prompt("You answer");
        if ($UserAnswer !== 'yes' && $UserAnswer !== 'no') {
            $UserAnswer= (int) $UserAnswer;
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

