<!-- Создайте интерпретатор HTML.

Пользователь вводит в текстовое поле HTML и нажимает кнопку “Показать”.
Страница перезагружается и у него выводиться под тестовым полем HTML, который он ввел в текстовое поле. И также, HTML введенный в текстовое поле в нем остается (то есть, оно не опустошается).
-->
<h2> Homework. Sprint #1. Interpreter HTML.</h2>
<form method="POST">
    <p><b>Введите HTML-код</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><button type="submit">Показать</button></p>
</form>

<?php

echo $_POST['text'];

?>