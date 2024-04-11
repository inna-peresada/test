<?php

echo "Дії з числами" . "<br>";

$num1 = 7;
$num2 = 3;
$result = $num1%$num2;
echo "Залишок від ділення: " . $result . "<br>";

$num1 = 7;
$num2 = 7.15;
$result = intdiv($num1, $num2);
echo "Ціла частина від ділення: " . $result . "<br>";

$num1 = 25;
$result = sqrt($num1);
echo "Корінь числа: " . $result . "<br>";
echo "<br>";

echo "Дії зі строками" . "<br>";

$phrase = "Десять негритят пошли купаться в море";
$words = explode(" ", $phrase);
echo "4е слово: " . $words[3] . "<br>";

$phrase = "Десять негритят пошли купаться в море";
$char = mb_substr($phrase, 16, 1);
echo "17й символ: " . $char . "<br>";

$phrase = "Десять негритят пошли купаться в море";
$result = mb_convert_case($phrase, MB_CASE_TITLE, "UTF-8");
echo $result . "<br>";

$phrase = "Десять негритят пошли купаться в море";
$length = mb_strlen($phrase);
echo "Довжина строки: " . $length . "<br>";
echo "<br>";

echo "Дії з логіческими даними" . "<br>";

if (true == 1) {
    echo "true дорівнює 1" . "<br>";
} else echo "true не дорівнює 1" . "<br>";

if (false === 0) {
    echo "false тождественно 0" . "<br>";
} else echo "false нетождественно 0" . "<br>";

if (strlen("three") > mb_strlen("три")) {
    echo "Строка three больше строки три" . "<br>";
} else echo "Строка three меньше строки три" . "<br>";

$num1 = 125*13+7;
$num2 = 223+28*2;
if ($num1 > $num2) {
    echo "125 умножить на 13 плюс 7 больше, чем 223 плюс 28 умножить на 2" . "<br>";
} else "125 умножить на 13 плюс 7 меньше, чем 223 плюс 28 умножить на 2";


?>