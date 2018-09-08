<!-- Домашнее задание: прием данных от пользователя
1. Доделайте калькулятор, чтоб он умел выполнять умножение, деление, вычитание, сумму.
-->
<h2> Homework. Sprint #1. Get data from user.</h2>
<form action="http://localhost:8000/dogeuser.php" method = "GET">
	<h5> Число №1 </h5>
	<input type = "text" name="Number1">
	<select name='action'>
		<option value="sum">Сложить</option>
		<option value="subtract">Вычисть</option>
		<option value="multiply">Умножить</option>
		<option value="divide">Разделить</option>
	</select>
	<h5> Число №2 </h5>
	<input type = "text" name="Number2">

	<button type="submit"> Вычислить </button>
</form>

<pre>

<?php
if (isset($_GET['result'])){
	echo '<h3>Результат = ' . $_GET['result'] . '</h3>';
}
?>