<?php
$parA = $_GET['parA'] ?? 0;
$parB = $_GET['parB'] ?? 0;

$numA = (int)$parA;
$numB = (int)$parB;
$sum = $numA + $numB;

$concat = $parA . " " . $parB;

echo "<p>parA = $parA</p>";
echo "<p>parB = $parB</p>";
echo "<p>Сума числових значень: $numA + $numB = $sum</p>";
?>
