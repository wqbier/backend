<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $author = $_POST['author'] ?? '';
    $description = $_POST['description'] ?? '';
    $journal = $_POST['journal'] ?? '';
    $pages = $_POST['pages'] ?? '';
    $year = $_POST['year'] ?? '';
    $format = $_POST['format'] ?? '';

    echo "<h2>Інформація про статтю</h2>";
    echo "<b>Автор:</b> $author <br>";
    echo "<b>Опис:</b> $description <br>";
    echo "<b>Журнал:</b> $journal <br>";
    echo "<b>Кількість сторінок:</b> $pages <br>";
    echo "<b>Рік видання:</b> $year <br>";
    echo "<b>Формат файлу:</b> $format <br>";

    if (isset($_FILES['articlefile']) && $_FILES['articlefile']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "articles/"; 
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $tmpName = $_FILES['articlefile']['tmp_name'];
        $fileName = basename($_FILES['articlefile']['name']);
        $destination = $uploadDir . $fileName;

        if (move_uploaded_file($tmpName, $destination)) {
            echo "<p style='color:green;'><b>Файл успішно завантажено:</b> $destination</p>";
        } else {
            echo "<p style='color:red;'>Помилка при завантаженні файлу!</p>";
        }
    } else {
        echo "<p style='color:red;'>Файл не був вибраний або сталася помилка!</p>";
    }
} else {
    echo "<p>Будь ласка, заповніть форму і натисніть 'Завантажити статтю'.</p>";
}
?>
