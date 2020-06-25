<?php

namespace BrainGames\Src\Cli;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;

/** ask user your name
 * /
function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    return line("Hello, %s!", $name);
}