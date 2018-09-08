<!-- Напишите функцию, которая возводит число в степень, без использования оператора **
Первый аргумент, число, которое возводим в степень.
Второй аргумент – степень в которую возводим.
Пример: echo pow(2, 10); // 1024
-->
<pre>
<h2> Homework. Sprint #1. Functions. </h2>
<?php
function powr($value, $power){
	if ($power == 0) return 1;
	return powr($value, $power - 1) * $value;
}
// a^x - a in power of x
$number = 2;
$powx = 10;
$ans = powr($number, $powx);
echo  "<h3>  Answer $number^$powx = $ans</h3>";

?>
