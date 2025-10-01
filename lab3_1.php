<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $author = $_POST['author'] ?? '';
    $title = $_POST['title'] ?? '';
    $publisher = $_POST['publisher'] ?? '';
    $pages = $_POST['pages'] ?? '';
    $format = $_POST['format'] ?? '';

    echo "<h2>Інформація про підручник</h2>";
    echo "<b>Автор:</b> $author <br>";
    echo "<b>Назва:</b> $title <br>";
    echo "<b>Видавництво:</b> $publisher <br>";
    echo "<b>Кількість сторінок:</b> $pages <br>";
    echo "<b>Формат:</b> $format <br>";

    if (isset($_FILES['bookfile']) && $_FILES['bookfile']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "books/"; 
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $tmpName = $_FILES['bookfile']['tmp_name'];
        $fileName = basename($_FILES['bookfile']['name']);
        $destination = $uploadDir . $fileName;

        if (move_uploaded_file($tmpName, $destination)) {
            echo "<p><b>Файл збережено у каталозі:</b> $destination</p>";
        } else {
            echo "<p style='color:red;'>Помилка при збереженні файлу!</p>";
        }
    } else {
        echo "<p style='color:red;'>Файл не був завантажений!</p>";
    }
}
?>
