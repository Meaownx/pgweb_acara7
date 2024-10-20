<!DOCTYPE html>
<html>
<body>

<?php
$foods = array ("Nasi Goreng", "Mie Ayam", "Bakso", "Soto", "Lotek");
$drinks = array("Es Teh", "Es Jeruk", "Kopi", "Jus", "Air Mineral");
$desserts = array("Pisang Goreng", "Es Krim", "Klepon", "Pudding", "Martabak");

echo "<table border='1'>";
echo "<tr><th>Makanan</th><th>Minuman</th><th>Desserts</th></tr>";

for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>$foods[$i]</td><td>$drinks[$i]</td><td>$desserts[$i]</td></tr>";
}

echo "</table>";
?>

</body>
</html>
