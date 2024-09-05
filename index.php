<?php

if ($argc != 3) {
    fwrite(STDERR, "Кол-во аргументов должно быть два!" . PHP_EOL);
} else if (!is_numeric($argv[1])) {
    fwrite(STDERR, "Первый аргумент не число!" . PHP_EOL);
} else if (!is_numeric($argv[2])) {
    fwrite(STDERR, "Второй аргумент не число!" . PHP_EOL);
} else if ($argv[2] == 0) {
    fwrite(STDERR, "Второй аргумент равен 0. На 0 делить нельзя!" . PHP_EOL);
} else {
    fwrite(STDOUT, "$argv[1] / $argv[2] = " . $argv[1] / $argv[2] . PHP_EOL);
}