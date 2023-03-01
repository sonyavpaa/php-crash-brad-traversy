<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello nerd!';

echo strlen($string);
echo strpos($string, 'e');
echo strrpos($string, 'e');
echo strrev($string);
echo strtolower($string);
echo strtoupper($string);
echo ucwords($string);
echo str_replace('Hello', 'Gday', $string);
echo substr($string, 6, 5);
echo substr($string, 6);
 if(str_starts_with($string, 'Hello')) {
  echo 'DILLINGER!';
 };

 if(str_ends_with($string, 'erd!')) {
  echo 'DILLINGER!';
 }

 $string2 = '<h1>Oh no!<h1/>';
 echo htmlspecialchars($string2);

 printf('%s likes %s', 'Banjo', 'birds');
 printf('1+1=%d', 1+1);