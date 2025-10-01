<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nickname = $_POST['nickname'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $country = $_POST['country'] ?? '';
    $region = $_POST['region'] ?? '';
    $city = $_POST['city'] ?? '';
    $street = $_POST['street'] ?? '';

    echo "<h2>Введені дані користувача</h2>";
    echo "<b>Псевдонім:</b> $nickname <br>";
    echo "<b>Пароль:</b> ".str_repeat('*', strlen($password))."<br>";
    echo "<b>Підтвердження пароля:</b> ".str_repeat('*', strlen($confirm_password))."<br>";
    echo "<b>Ім’я:</b> $firstname <br>";
    echo "<b>Прізвище:</b> $lastname <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Країна:</b> $country <br>";
    echo "<b>Область:</b> $region <br>";
    echo "<b>Місто/село:</b> $city <br>";
    echo "<b>Вулиця:</b> $street <br>";

    if ($password !== $confirm_password) {
        echo "<p style='color:red;'><b>Пароль та підтвердження пароля не співпадають!</b></p>";
    } else {
        echo "<p style='color:green;'><b>Пароль підтверджено.</b></p>";
    }
} else {
    echo "<p>Будь ласка, заповніть форму реєстрації.</p>";
}
?>
