<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=168DB_23;charset=utf8", "168DB23", "vzR2XLd0");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}
?>
