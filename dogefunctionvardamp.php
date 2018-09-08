<!-- Напишите свою реализацию функции var_dump(). Помните, что функция var_dump принимает не только одно значение, а много.
Подсказка:
Как передавать не ограниченное количество аргументов?
Специальный синтаксис … (многоточие) перед названием переменной аргумента. Больше деталей в документации (Пример №13 и №16)-->

<pre>
<h2> Homework. Sprint #1. Functions. var_dump() </h2>
<h3>User function var_d (expression) </h3>
<?php 
function var_d(...$variabl){
	foreach ($variabl as $varbl) {
	
		if (is_string($varbl)){
			$len = strlen($varbl);
			echo "string($len) \"$varbl\"";
		}
		if (is_int($varbl)){
			echo "int($varbl)";
		}
		if (is_float($varbl)){
			echo "float($varbl)";
		}elseif (is_double($varbl)){
			echo "double($varbl)";
		}
		if (is_bool($varbl)){
			echo  $varbl ? "bool(true)" : "bool(false)";
		}	
		if (is_array($varbl)){
			$cnt = count($varbl);
			echo  "array($cnt) { ";

			foreach ($varbl as $key => $value) {
				if (is_int($key)) {
					echo "<br>  [$key]=> <br>" . "  " . gettype($value) . "(" . strlen($value) . ") \"" . $value . "\" ";
				}
				else {
					echo "<br>  [\"$key\"]=> <br>" . "  " . gettype($value) . "(" . strlen($value) . ") \"" . $value . "\" ";
				}
			}
			echo "<br>}";
		}	
		echo "<br>";
	}
}


$art = ['fkj' => 21,
	'allo' => 23,
	'file' => 44,
	];
$arr = ["php", "laravel", "yii", "zend", "cakephp"];
$arrr = ["first" => "php", "second" => "html", "third" => "css"];
var_d($arrr, 'Hello!', 200);
?>

<h3>Standart function var_dump (expression) </h3>
<?php 
echo var_dump($arrr, 'Hello!', 200);

?>