<?php
/*
 * Написать калькулятор. Переменная $a = изменяемое число.
 * Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
 */


    $a = 21;
    $b = 0;
    $operator = '/';


//if ($b == 0 && $operator == '/') {
//    echo 'Ошибка, на ноль делить нельзя';
//    }
//
//switch ($operator){
//    case '+': echo $a + $b; break;
//    case '-': echo $a - $b; break;
//    case '/': echo $a / $b; break;
//    case '*': echo $a * $b; break;
//    case '%': echo $a % $b; break;
//    default: echo 'Ошибочный ввод данных';
//}


if ($operator == '+') {
    $result = $a + $b;
}
elseif ($operator == '-') {
    $result = $a - $b;
}
elseif ($operator == '/' && $b == 0) {
    $result = 'Ошибка, на ноль делить нельзя!';
}

elseif ($operator == '/') {
    $result = $a / $b;
}

elseif ($operator == '*') {
    $result = $a * $b;
}

elseif ($operator == '%') {
    $result = $a % $b;
}
    echo $result;