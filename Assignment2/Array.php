<?php

#example 1
$alphabets = array("apple", "ball", "cat");
echo "List is " . $alphabets[0] . ", " . $alphabets[1] . " and " . $alphabets[2] . ".";
echo "</br>";
echo "count is ".count($alphabets);
echo "</br>";

#example 2
$alphamap = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" =>5);
echo "map for a is " . $alphamap["a"];
echo "</br>";
echo "map for b is " . $alphamap["b"];
echo "</br>";
echo "map for c is " . $alphamap["c"];
echo "</br>";
echo "map for d is " . $alphamap["d"];
echo "</br>";


#example3
print_r(array_keys($alphamap));
?>