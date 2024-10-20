<!DOCTYPE html>
<html>
<body>
    <pre>
<?php

$a = "HAI"; // String
$b = 8;       // Integer
$c = false;    // Boolean
$d = 135.8;    // Float
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>
</body>
</html>