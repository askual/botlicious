<?php 

// $arrayName = array('bbb' => 12, );

// $x =  $arrayName['ddd'] ?? 'ss';
// echo $x;

// $y = [$arrayName['rt']] ?? 'd';

// $r = [];

// $r['dd'] = 'd';

$a = '1';
$b = '2';
$c = '3';
$vv = [$a,$b,$c];
// var_dump(compact('a',$b,$c));
foreach (compact('a','b','c') as $key => $value) {
    echo($key);
}