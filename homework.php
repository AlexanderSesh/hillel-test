Действия с числами:
<br>
<?php
// Деление с остатком
$str1 = 7;
$str2 = 3;
echo($str1 % $str2)."\n"; // Остаток = 1
?>
<br>
<?php
// Целая часть сложения
$str1 = 7;
$str2 = 7.15;
echo(int)($str1 + $str2)."\n"; // Целая часть = 14
?>
<br>
<?php
// Корень из числа
$str = 25;
echo sqrt($str)."\n"; //Корень = 5
?>
<br>
Действия со строками:
<br>
<?php
// Четвертое слово из фразы
$str = 'Десять негритят пошли купаться в море';
$str = explode(" ", $str); //купаться
echo $str[3]; 
?>
<br>
<?php
// 17й символ из фразы
$str = 'Десять негритят пошли купаться в море';
$str = mb_substr($str, 16, 1); //п
echo $str; 
?>
<br>
<?php
// Заглавная первая буква во всех словах фразы
$string = 'Десять негритят пошли купаться в море';
echo mb_convert_case($string, MB_CASE_TITLE, 'UTF-8'); //Десять Негритят Пошли Купаться В Море
?>
<br>
<?php
// Длинна строки
$string = 'Десять негритят пошли купаться в море';
echo mb_strlen ($string); // 37 ( 32 буквы + 5 пробелов )
?>
<br>
Действия с логическими значениями:
<br>
<?php
//Правильно ли утверждение true равно 1
$str1 = true;
$str2 = 1;
var_dump ($str1 == $str2); //true (равно)
?>
<br>
<?php
//Правильно ли утверждение false тождественно 0
$str1 = false;
$str2 = 0;
var_dump ($str1 === $str2); //false (не тождественно)
?>
<br>
<?php
//Какая строка длиннее three - три
$array = array('three','три',);
usort($array, function ($a, $b) {
    return mb_strlen($a) < mb_strlen($b);
});
echo reset($array); //three
?>
<br>
<?php
//Какое число больше
$str1 = 125 * 13 + 7;
$str2 = 223 + 28 * 2;
var_dump($str1 > $str2); //true (125 * 13 + 7 больше чем 223 + 28 * 2 )
var_dump($str2 > $str1); //false
 ?>
<br>
