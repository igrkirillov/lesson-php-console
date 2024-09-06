<?php

echo "Введите первое значение: ";
$arg1 = trim(fgets(STDIN));
echo "Введите второе значение: ";
$arg2 = trim(fgets(STDIN));

if (!is_numeric($arg1)) {
    fwrite(STDERR, "Первый аргумент не число!" . PHP_EOL);
} else if (!is_numeric($arg2)) {
    fwrite(STDERR, "Второй аргумент не число!" . PHP_EOL);
} else if ($arg2 == 0) {
    fwrite(STDERR, "Второй аргумент равен 0. На 0 делить нельзя!" . PHP_EOL);
} else {
    fwrite(STDOUT, "$arg1 / $arg2 = " . $arg1 / $arg2 . PHP_EOL);
}