<?php
	// Task 1 
	$current_row = 1;
	$numbers_in_row = 1;
	
	for ($i = 1; $i <= 100; $i++){
		$stairs .= "<span>" . $i . "</span>";
		$numbers_in_row--;
		if (!$numbers_in_row) {
			$stairs .= "<br>";
			$current_row++;
			$numbers_in_row = $current_row;
		}
	}

	// Task 2
	$rows = 5;
	$cols = 7;

	$available_values = range(1, 1000);
	shuffle($available_values);

	$values_for_array = array_slice($available_values, 0, $rows * $cols);

	$array = [];

	for ($i = 0; $i < $rows; $i++){
		$array[$i] = [];
		$table .= "<tr>";
		for ($j = 0; $j < $cols; $j++){
			$array[$i][$j] = $values_for_array[$j + $i * $cols];
			$table .= "<td>" . $array[$i][$j] . "</td>";
		}
		$table .= "</tr>";
	}
?>
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Тестовое задание: Tilda</title>
    <style>
			h1 {
				font-size: 24px;
				font-weight: 500;
			}
			.stairs span{
				width: 25px;
				height: 20px;
				display: inline-block;
			}
		</style>
</head>

<body>
	<h1>Тестовое задание: Tilda</h1>

	<h2>Задача 1: лесенка</h2>
	<div class="stairs"><?= $stairs ?></div>

	<h2>Задача 2: массивы</h2>
	<table><?= $table ?></table>

	<h2>Задача 3: фронт</h2>
	<p>На бэк-энде:<br>
	С помощью ip-адреса пользователя из $_SERVER['REMOTE_ADDR'] надо определить его геолокацию, в зависимости от которой будем передавать на фронт тот или иной номер телефона.<br>
	В случае отсутствия номера телефона под город, в котором находится пользователь, отдавать на фронт - 8-800-DIGITS.</p>
	<p>На фронт-энде:<br>
	В случае если на бэк-энде не удалось определить город посетителя через ip, при заходе на страницу показываем модальное окно с выбором городов и просим выбрать нужный город, который в js будет связан с номером.<br>
	Если клиент закроет окно, не выбрав город, оставляем - 8-800-DIGITS.</p>
</body>

</html>