<?php

namespace Brain\Games\AutoloaderGames;

function autoloadGames($dir)
{
    $autoloadPath1 = $dir . '/../../../autoload.php';
    $autoloadPath2 = $dir . '/../vendor/autoload.php';

    if (file_exists($autoloadPath1)) {
        return $autoloadPath1;
    } else {
        return $autoloadPath2;
    }
}