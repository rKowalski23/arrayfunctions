<?php
//1
$array1 = array('a', 'b', 'c', 'd', 'e');
echo array_chunk($array1, 2);
//2
$array_keys = array('0', '1', '2', '3', '4');
echo array_combine($array_keys, $array1);
//3
echo array_count_values($array1);
//4
echo array_diff($array1, $array_keys);
//5
$fill_this_array = array_fill(0, 5, 'value');
echo $fill_this_array;
//6
$fill_this_array2 = array_fill_keys($array_keys, 'value');
echo $fill_this_array2;
//7
$fill_this_array3 = array_flip($fill_this_array2);
echo $fill_this_array3;
//8
echo array_key_exists('a', $array1);
//9
echo array_keys($fill_this_array2);
//10
$array3 = array_merge($array1, $array2);
echo $array3;
//11
$array4 = array('zero', 'one', 'two', 'three');
echo array_pad($array4, 8, 'padding');
//12
echo array_pop($array4);
//13
$random_value = array_rand($array4);
echo $random_value;
//14
echo array_reverse($array4);
//15
$array_nums = array(1, 2, 4, 5, 7, 8);
echo array_sum($array_nums);



?>