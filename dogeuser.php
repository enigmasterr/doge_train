<pre>
<?php

if (isset($_GET['Number1']) && isset($_GET['Number2'])){
	$result = (int) $_GET['Number1'] + (int) $_GET['Number2'];
	switch ($_GET['action']) {
		case 'sum':
			$result = (int) $_GET['Number1'] + (int) $_GET['Number2'];
			break;
		case 'subtract':
			$result = (int) $_GET['Number1'] - (int) $_GET['Number2'];
			break;
		case 'multiply':
			$result = (int) $_GET['Number1'] * (int) $_GET['Number2'];
			break;
		case 'divide':
			$result = (int) $_GET['Number1'] / (int) $_GET['Number2'];
			break;
	}
	header('Location: http://localhost:8000/dogegettingdatafromuser.php?result=' . $result);
}
