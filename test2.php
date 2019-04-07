<?php

$a = [1,2,3,4];
$b = array(1,2,3,'blablaeee');
$e = [];

$c = implode('IIIIIIIi', $e);

$arr = array_merge($a,$b);
/**
 * toto
preg_match('ghghfg',$arr);

$s = array_map('bla', $a);
*/

array_push($a,77);
array_pop($a);
$test = array_search('b',$b);

$array1 = array_reverse($b,true);

$array_dif = array_diff($b,$a);
$max_num = max($b);

var_dump($_SESSION);