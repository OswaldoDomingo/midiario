<?php
session_start(); // ✅ Siempre debe ir antes de cualquier salida (echo, HTML, etc.)

// 📄 Archivo: public/index.php
// 🧠 Función: punto de entrada para todas las peticiones; decide qué hacer según la URL.
// Cargar configuraciones y controladores
require_once __DIR__ . '/../config/Config.php';
require_once __DIR__ . '/../app/controller/Controller.php';

// Definir las rutas (mapeo de acciones)
$map = [
    'inicio' => ['controller' => 'Controller', 'action' => 'inicio'],
    // aquí se añadirán más acciones como 'listar', 'insertar'...
];

// Determinar la ruta a ejecutar
$ruta = $_GET['ctl'] ?? 'inicio';

if (!isset($map[$ruta])) {
    header('Status: 404 Not Found');
    echo "<h1>Error 404: No existe la ruta <i>$ruta</i></h1>";
    exit;
}

// Llamar al método del controlador correspondiente
$controlador = $map[$ruta];
if (method_exists($controlador['controller'], $controlador['action'])) {
    call_user_func([new $controlador['controller'], $controlador['action']]);
} else {
    header('Status: 404 Not Found');
    echo "<h1>Error 404: Acción <i>{$controlador['controller']}->{$controlador['action']}</i> no encontrada</h1>";
}
