<?php
if (isset($_GET['x1'], $_GET['y1'], $_GET['x2'], $_GET['y2'])) {
    $x1 = (float)$_GET['x1'];
    $y1 = (float)$_GET['y1'];
    $x2 = (float)$_GET['x2'];
    $y2 = (float)$_GET['y2'];

    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    echo "<p>Точка 1: ($x1, $y1)</p>";
    echo "<p>Точка 2: ($x2, $y2)</p>";
    echo "<p>Відстань = $distance</p>";
}
?>
