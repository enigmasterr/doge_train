<pre>
<h2> Homework. Sprint #1_1. </h2>
<?php

$employees = [
    'Beth' => 1030,
    'Tamekia' => 1800,
    'Nicolle' => 1200,
    'Stacee' => 2000,
    'Rex' => 1950,
    'Kecia' => 1750,
    'Estela' => 2000,
    'Karly' => 1050,
    'Ciara' => 1500,
    'Christopher' => 1200,
];

$name = '';
$maxValue = -1;
$minValue = 99999999999;
$maxSalaryEmployees = [];
$minSalaryEmployees = [];
$sum = 0;
foreach ($employees as $key => $value) {
	if ($maxValue < $value) {
		$maxValue = $value;
	}
	if ($minValue > $value) {
		$minValue = $value;
	}
	$sum = $sum + $value;
}
foreach ($employees as $key => $value) {
	if ($value == $maxValue){
		$maxSalaryEmployees[] = $key;
	}
	if ($value == $minValue){
		$minSalaryEmployees[] = $key;
	}
}

echo "1) Maximum salary have" ;
foreach ($maxSalaryEmployees as $value){
	echo "<b> $value</b>";
}
echo "<br>2) Minimum salary have" ;
foreach ($minSalaryEmployees as $value) {
	echo "<b> $value </b>";
}
echo "<br>3) Sum salary employees = <b>$sum</b> <br>" ;
echo "4) Sort employees by salary <br><br>";
arsort($employees);
foreach ($employees as $key => $value) {
	echo '   ' . $key . ' salary ' . $value . '<br>';
}
?>