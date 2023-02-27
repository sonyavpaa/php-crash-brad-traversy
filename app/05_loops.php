<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 10; $x++) {
  echo 'Times ' . $x . '<br>';
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x = 1;
// while($x != 5) {
//   echo 'This is not 5' . '<br>';
//   $x++;  
// }



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while($x <= 5); 


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$news = ['Good News', 'Fake News', 'Cake News'];

// for($x = 0; $x < count($news); $x++) {
//   echo $news[$x] . '<br>';
// }

// foreach($news as $single_news) {
//   echo $single_news . '<br>';
// }

foreach($news as $index => $single_news) {
  echo $index . ' - ' . $single_news . '<br>';
}