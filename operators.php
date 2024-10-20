<!DOCTYPE html>
<html>
<body>

<?php

//identical 
$x = "80";  
$y = "80";

if ($x === $y) {
    echo "nilai x sama dengan y";
} else {
    echo "nilai x tidak sama dengan y";
}

echo "<br>";

//equal
$x = 20;  
$y = "80";

if ($x == $y) {
    echo "nilai x sama dengan y";
} else {
    echo "nilai x tidak sama dengan y";
}

echo "<br>";

//x+=y
$x = 6;  
$x += 8;

echo $x;

echo "<br>";

//X=Y
$x = 81;  
echo $x;

echo "<br>";

//ARITHMETIC
$x = 5;  
$y = 2;
echo $x ** $y;
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
?>  

</body>
</html>