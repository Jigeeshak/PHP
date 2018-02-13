<?php

#example 1
$str1 = 'abcdefghijkl';
echo "String lenth is: " .strlen($str1);
echo "</br>";


#example 2
$str2 = "Welcome to my world";
echo "No Of words in the String: ".str_word_count($str2);
echo "</br>";

#examaple 3
echo str_replace("world", "Country", $str2);
echo "</br>";

#example 4 -- implode(separator,array)
$arr1 = array("first", "second", "third");
echo implode("()", $arr1);
echo "</br>";

#example 4
$str3 = 'cat,dog,rat,pumpkin';
$arr2 = explode(',',$str3,10);
print_r($arr2);

?>