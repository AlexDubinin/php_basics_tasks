<?php
/*
 * 7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии,
 * что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).
 */

$age = 16;
if (18 < $age && $age <=59) {
    echo "Вам еще работать и работать";
}
elseif ($age > 59) {
    echo "Вам пора на пенсию";
}
elseif ($age > 0 && $age <= 18) {
    echo "Вам еще рано работать";
}