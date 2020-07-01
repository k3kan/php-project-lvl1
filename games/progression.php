<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;

function random()
{
    return rand(1, 100);
}

function progression()
{
    line('What number is missing in the progression?');
    global $name;
    $count = 0;
    while ($count !== 3) {
        $step = rand(1, 5);
        $start_number = random();
        $array = [];
        $number = $start_number;
        for ($i = 0; $i < 10; $i++) {
            $number += $step;
            $array[] = $number;
        }
        $close_number = rand(0, 9);
        $temp = $array[$close_number];
        $array[$close_number] = '..';
        $string = implode(' ', $array);
        print_r($string);
        $answer = prompt("\nYour answer");
        if ((int) $temp === (int) $answer) {
            line("Correct!");
            $count++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $temp);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === 3) {
        line("Congratulation, %s!", $name);
    }
}
