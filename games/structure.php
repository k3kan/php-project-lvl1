<?php

namespace games\Structure;

use function cli\prompt;
use function cli\line;


CONST arrayAllOperations = [];

function random()
{
    return rand(1,100);
}

function greetUser()
{
    line('Welcome to the Brain Game!');
}

function askUserName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}


function checkTerms($arrayCalculation, $nameUser)
{
    $terms = true;
    $numberOfCorrectAttempts = 0;
    do {
        foreach ($arrayCalculation as $question => $answer) {
            line($question);
            $answerUser = prompt("You answer");
            if ($answerUser !== 'yes' && $answerUser !== 'no') {
                $answerUser = (int) $answerUser;
            }
            if ($answerUser === $answer) {
                line("Correct!");
                $numberOfCorrectAttempts++;
                if ($numberOfCorrectAttempts === 3) {
                    line("Congratulation, %s!", $nameUser);
                    $terms = false;
                }
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $answer);
                line("Let's try again, %s!", $nameUser);
                $terms = false;
                break;
            }
        }
    } while ($terms) ;
}

function getCalculation()
{
    for ($i = 0; $i < 3; $i++) {
        $rand1 = random();
        $rand2 = random();
        $result = 0;
        $operation = ['+', '-', '*'];
        $calculation = $operation[rand(0, 2)];
        $question = "Question: {$rand1} {$calculation} {$rand2}";
        if ($calculation === '+') {
            $result = $rand1 + $rand2;
        } elseif ($calculation === '-') {
            $result = $rand1 - $rand2;
        } elseif ($calculation === '*') {
            $result = $rand1 * $rand2;
        }
        $arrayAllOperations[$question] = (int) $result;
    }
    return $arrayAllOperations;
}

function getPatiryCheck()
{
    for ($i = 0; $i < 3; $i++) {
        $rand = random();
        $question = "Question: {$rand}";
        $rand % 2 === 0 ? $answer = 'yes' : $answer = 'no';
        $arrayAllOperations[$question] = $answer;
    }
    return $arrayAllOperations;
}

function getgcd()
{
    for ($i = 0; $i < 3; $i++) {
        $num1 = random();
        $num2 = random();
        $num1 < $num2 ? $least = $num1 : $least = $num2;
        $nod = 1;
        $question = "Question: {$num1} {$num2}";
        for ($i = 2; $i <= $least; $i++) {
            if ($num1 % $i === 0 && $num2 % $i === 0) {
                $nod = $i;
            }
        }
        $arrayAllOperations[$question] = (int) $nod;
    }
    return $arrayAllOperations;
}

function getBrainPrime()
{
    for ($i = 0; $i < 3; $i++) {
        $number = random();
        $simple = 0;
        $array_to_10 = [1, 3, 5, 7];
        for ($j = 2; $j < 9; $j++) {
            if ($number % $i === 0) {
                $simple++;
            }
        }
        $simple === 0 || in_array($number, $array_to_10) ? $answer = 'no' : $answer = 'yes';
        $question = "Question: {$number}";
        $arrayAllOperations[$question] = $answer;
    }
    return $arrayAllOperations;
}

function getprogression()
{
    for ($i = 0; $i < 3; $i++) {
        $step = rand(1, 5);
        $start_number = random();
        $array = [];
        $number = $start_number;
        for ($ten_number = 0; $ten_number < 10; $ten_number++) {
            $number += $step;
            $array[] = $number;
        }
        $close_number = rand(0, 9);
        $temp = $array[$close_number];
        $array[$close_number] = '..';
        $string = implode(' ', $array);
        $arrayAllOperations[$string] = (int) $temp;
    }
    return $arrayAllOperations;
}