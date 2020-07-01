<?php

namespace BrainGames\Src\Gcd;

use function cli\line;
use function cli\prompt;

function random()
{
    return rand(1, 100);
}

function gcd()
{
    line('Find the greatest common divisor of given numbers.');
    $count = 0;
    while ($count != 3) {
        global $name;
        $num1 = random();
        $num2 = random();
        $num1 < $num2 ? $least = $num1 : $least = $num2;
        $nod = 1;
        line("Question: %s %s", $num1, $num2);
        $number = prompt('You answer');
        for ($i = 2; $i <= $least; $i++) {
            if ($num1 % $i === 0 && $num2 % $i === 0) {
                $nod = $i;
            }
        }
        if ((int) $number === (int) $nod) {
            line("Correct");
            $count++;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $number, $nod);
            line("Let's try again, %s!", $name);
            break;
        }
    }
    if ($count === 3) {
        line("Congratulation, %s!", $name);
    }
}
