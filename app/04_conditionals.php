<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
// $age = 12;
// if($age >= 18) {
//   echo 'You are old enough to buy luontoarpa';
// } else {
//   echo 'You are young enough to be made money out of as lapsilisä';
// }

// $t = date("H");
// if($t < 12) echo 'Huomenta';
// elseif($t < 17) echo 'Huomenta?';
// else echo 'Hyvästi';

$soul = [];
// if(empty($soul)) echo 'Tyhjä';
// elseif(!empty($soul)) echo 'Ei vielä tyhjä';

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $truth = !empty($soul) ? $soul[0] : 'Tyhjää';
// $truth = $soul[0] ?? 'Tyhjä';
// echo $truth;



/* -------- Switch Statements ------- */

$fav_pizza = 'margherita';

switch($fav_pizza) {
  case 'margherita':
    echo 'yes';
    break;
  case 'tropicana':
    echo 'you dont deserve pizza';
    break;
  default:
    echo 'yes margherita';
}
