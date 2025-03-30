<?php
// db.php - Подключение к базе данных

define('DB_HOST', 'localhost'); // Хост (обычно localhost)
define('DB_NAME', 'first_app');   // Имя базы данных
define('DB_USER', 'root');      // Имя пользователя (по умолчанию root)
define('DB_PASS', '');          // Пароль (по умолчанию пустой)

function connectDB() {
    try {
        return new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die("Ошибка подключения: " . $e->getMessage());
    }
}
?>