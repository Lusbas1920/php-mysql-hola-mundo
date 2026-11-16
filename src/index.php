<?php
$host = "db";
$user = "root";
$password = "root123";
$database = "hola_mundo";

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $user,
        $password
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p>Aplicación PHP conectada correctamente a MySQL.</p>";
    echo "<p>Base de datos: " . $database . "</p>";
    echo "<p>Estado: Conexión exitosa.</p>";

} catch (PDOException $e) {
    echo "<h1>Error de conexión</h1>";
    echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
