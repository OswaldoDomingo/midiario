<?php
// 📄 test-db.php
// 🧪 Prueba de conexión a la base de datos usando la clase Database en local
// http://localhost/midiario/tests/test-db.php


// 1. Incluir la clase Database
require_once __DIR__ . '/../app/model/Database.php';

// 2. Intentar conectar
echo "<h3>Conectando a la base de datos...</h3>";
$conn = Database::conectar();

// 3. Verificar si la conexión es válida
if ($conn) {
    echo "✅ Conexión establecida correctamente.<br>";

    try {
        // 4. Ejecutar una consulta de prueba (cuenta de filas en nota_diario)
        $stmt = $conn->query("SELECT COUNT(*) as total FROM nota_diario");

        // 5. Obtener resultados
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "📄 Número de notas en la tabla 'nota_diario': <strong>{$fila['total']}</strong>";
    } catch (PDOException $e) {
        echo "❌ Error en la consulta: " . $e->getMessage();
    }
} else {
    echo "❌ No se pudo conectar a la base de datos.";
}
