<?php
// ======================================================
// CONFIGURACIÓN DE CONEXIÓN A AZURE DATABASE (MySQL)
// ======================================================

// 🔧 Datos de conexión — Reemplaza estos valores con los de tu base de datos de Azure
$host = "tu-servidor.mysql.database.azure.com";  // Ejemplo: mi-servidor.mysql.database.azure.com
$usuario = "tu_usuario@tu-servidor";             // Ejemplo: admin@mi-servidor
$contraseña = "TuContraseñaSegura123!";
$baseDatos = "nombre_de_tu_base";

// ======================================================
// INICIALIZAR CONEXIÓN CON SSL (requerido por Azure)
// ======================================================
$conn = mysqli_init();

// Activar conexión segura SSL
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Intentar conexión al servidor MySQL de Azure
if (!mysqli_real_connect($conn, $host, $usuario, $contraseña, $baseDatos, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("<h2 style='color: red;'>❌ Error de conexión: " . mysqli_connect_error() . "</h2>");
}
?>
