<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$pizzas = ['margherita', 'special opera', 'tropicana'];

// echo count($pizzas);

// var_dump(in_array('special opera', $pizzas));

$pizzas[] = 'americana';
array_push($pizzas, 'vegetariana');
array_unshift($pizzas, 'pollo americana');
array_pop($pizzas);
unset($pizzas[3]);

$chunk_array = array_chunk($pizzas, 2);

// print_r($chunk_array);
// print_r($pizzas);

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

$a = ['opiskelijatiistai', 'karkkikeskiviikko', 'torstaiolut'];
$b = ['polte', 'amarillo', 'sillansuu'];
$c = array_combine($a, $b);
$keys = array_keys($c);
$flipped = array_flip($c);

// print_r($flipped);

$numbers = range(1, 15);
$new_numbers = array_map(function($number) {
  return "Number $number";
}, $numbers);

$less_than_10 = array_filter($numbers, fn($number) => $number <= 10);

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

print_r($sum);