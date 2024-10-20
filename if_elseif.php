<!DOCTYPE html>
<html>
<body>

<?php
$angka = 1; 
echo "<p>Angka " . $angka . " merupakan angka yang ";

if ($angka < 5) {
    echo "bernilai kurang dari 5";
} elseif ($angka < 10) {
    echo "bernilai kurang dari 10";
} else {
    echo "bernilai lebih dari 10";
}
?>

</body>
</html>
