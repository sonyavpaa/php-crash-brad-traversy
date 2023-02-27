<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/


// $numbers = [1, 44, 55, 22];

// $list = array('table', 'cola', 'pizza');

// var_dump($list);

// echo $list[1];

// $colors = [
//   1 => 'red',
//   4 => 'pink',
//   10 => 'grey'
// ];

// $hex = [
//   'red' => 'f#00',
//   'white' => '#0f0'
// ];


// echo $hex['white'];

$people = [
  ['first_name' => 'Banjo',
  'last_name' => 'doggy'],
  ['first_name' => 'Benny',
  'last_name' => 'seal']
];

echo $people[1]['first_name'];

var_dump(json_encode($people));
