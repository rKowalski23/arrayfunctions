<?php
//1
$array1 = array('a', 'b', 'c', 'd', 'e');
writeln(array_chunk($array1, 2));
//2
$array_keys = array('0', '1', '2', '3', '4');
writeln(array_combine($array_keys, $array1));
//3
writeln(array_count_values($array1));
//4
writeln(array_diff($array1, $array_keys));
//5
$fill_this_array = array_fill(0, 5, 'value');
writeln($fill_this_array);
//6
$fill_this_array2 = array_fill_keys($array_keys, 'value');
writeln($fill_this_array2);
//7
$fill_this_array3 = array_flip($fill_this_array2);
writeln($fill_this_array3);
//8
writeln(array_key_exists('a', $array1));
//9
writeln(array_keys($fill_this_array2));
//10
$array3 = array_merge($array1, $array2);
writeln($array3);
//11
$array4 = array('zero', 'one', 'two', 'three');
writeln(array_pad($array4, 8, 'padding'));
//12
writeln(array_pop($array4));
//13
$random_value = array_rand($array4);
writeln($random_value);
//14
writeln(array_reverse($array4));
//15
$array_nums = array(1, 2, 4, 5, 7, 8);
writeln(array_sum($array_nums)); 

function writeln($line_in) 
{
  echo $line_in.'<br/>';
}

?>