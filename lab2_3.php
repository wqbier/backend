<?php
if (isset($_GET['x'])) {
    $x = (float)$_GET['x'];

$result = pow(pow($x, 8) + pow(8, $x), 1/8);

echo "<p><b>Перший вираз</b></p>";
echo "<p>x = $x</p>";
echo "<p>Результат $result</p>";
}
?>
<br>
<br>


<?php
if (isset($_GET['x'], $_GET['y'], $_GET['z'])) {
    $x = (float)$_GET['x'];
    $y = (float)$_GET['y'];
    $z = (float)$_GET['z'];

    $numerator = $x * $y * $z - 3.3 * abs($x + pow($y, 1/4));

    $denominator = pow(10, 7) + sqrt(log10(4 * $y));

    $result = $numerator / $denominator;
    

echo "<p><b>Другий вираз</b></p>";
echo "<p>x = $x</p>";
echo "<p>y = $y</p>";
echo "<p>z = $z</p>";
echo "<p>Результат = $result</p>";
}
?>
