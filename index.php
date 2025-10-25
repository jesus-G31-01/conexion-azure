<?php
// ======================================================
// PROYECTO DE PRUEBA: CONEXIÓN A AZURE MYSQL DESDE PHP
// ======================================================

include('config.php');

// Verificar conexión
if ($conn) {
    echo "<h1 style='color: green; text-align: center; font-family: Arial;'>✅ Conexión exitosa a la base de datos de Azure</h1>";
    
    // Puedes hacer una consulta de prueba opcional
    $consulta = "SELECT NOW() AS fecha_actual;";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        echo "<p style='text-align: center;'>Conexión probada correctamente. <br> Fecha actual del servidor SQL: <strong>{$fila['fecha_actual']}</strong></p>";
        mysqli_free_result($resultado);
    }

} else {
    echo "<h1 style='color: red; text-align: center; font-family: Arial;'>❌ No se pudo conectar con la base de datos</h1>";
}

// Cerrar conexión
mysqli_close($conn);
?>
