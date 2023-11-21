<?php
$host = 'database';
$user = 'root';
$password = 'root';
$database = 'alsape02';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);

    // Establecer el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión a la base de datos exitosa!";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
