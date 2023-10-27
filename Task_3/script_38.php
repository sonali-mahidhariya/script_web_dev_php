<?php
$colors=array("yellow","red","green");
echo array_shift($colors);
print_r($colors);
echo "<br>";
$number=array(16,11,4);
echo array_unshift($number,"10","30");
print_r($number);
?>