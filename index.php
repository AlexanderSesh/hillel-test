<?php
//Посчитать длину массива
	$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
	echo $result = count($arr); // 9 элементов массива
?>
<br>
<?php
//Переместить первые 4 элемента массива в конец массива
$arr = [1, 2, 3, 7, 31, 4, 1,8, 6];
	array_push($arr, 1,2,3,7);
	unset ($arr[0], $arr[1], $arr[2], $arr[3]);
	print_r ($arr); //Array ( [4] => 31 [5] => 4 [6] => 1 [7] => 8 [8] => 6 [9] => 1 [10] => 2 [11] => 3 [12] => 7 )
?>
<br>
<?php
//получить сумму 4,5,6 элемента
	function get_sum(array $arr, $n) {
	$sum = 0;
	for ($i = 0; $i <= $n; $i++) {
		$sum += $arr[$i];
	}
	return $sum;
	}

$arr = [1, 2, 3, 7, 31, 4, 1,8, 6]; $n = 3; //13

	echo get_sum($arr, $n);
?>
<br>
<?php
//Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
$firstArr = [
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12,
];
$secondArr = [
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37,
];
	$result = array_diff_key ($secondArr, $firstArr); // Array ( [seven] => 22 [six] => 37 )
	print_r($result);
?>
<br>
<?php
// Найти все элементы которые присутствую в первом и отсутствуют во втором
$firstArr = [
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12,
];
$secondArr = [
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37,
];
	$result = array_diff_key ($firstArr, $secondArr); // Array ( [two] => 2 )
	print_r($result);
?>
<br>
<?php
// Найти все элементы значения которых совпадают 
$firstArr = [
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12,
];
$secondArr = [
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37,
];
	$result = array_intersect_assoc ($firstArr, $secondArr); // Array ( [one] => 1 [foure] => 5 )
	print_r($result);
?>
<br>
<?php
// Найти все элементы значения которых отличается
$firstArr = [
'one' => 1,
'two' => 2,
'three' => 3,
'foure' => 5,
'five' => 12,
];
$secondArr = [
'one' => 1,
'seven' => 22,
'three' => 32,
'foure' => 5,
'five' => 13,
'six' => 37,
];
	$result = array_diff_assoc ($firstArr, $secondArr); // Array ( [two] => 2 [three] => 3 [five] => 12 )
	print_r($result);
?>
<br>
