<?php require_once __DIR__ . '/../../config/Config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Diario MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= Config::base_url() ?>css/<?= Config::$mvc_vis_css ?>">
    <!-- <script src="<?php // Config::base_url() ?>js/app.js" defer></script> -->
</head>
<body>

    <header>
        <h1>Mi Diario Web</h1>
        <nav class = "bg-dark text-light p-3 text-white">
            <a class="" href="index.php?ctl=inicio">Inicio</a>
            <a  class="" href="index.php?ctl=testdb">Test</a>
        </nav>
        <hr>
    </header>

    <main>
        <?= $contenido ?>
    </main>

    <footer>
        <hr>
        <p style="text-align:center;">&copy; <?= date('Y') ?> DiarioWeb</p>
    </footer>
<!-- Bootstrap 5 JS (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-" crossorigin="anonymous"></script>

<!-- Script personalizado -->
<script src="<?= Config::base_url() ?>js/app.js" defer></script>
</body>
<!-- 
    📄 Archivo: app/view/layout.php
    🧠 Función: define la estructura HTML común para todas las páginas. Inserta el contenido dinámico de cada vista en un punto concreto. 
    🧾 Explicación línea a línea:
    Línea	                    Qué hace
    require Config.php	        Se incluye la clase Config, para usar rutas base y config global
    <link rel="stylesheet" ...>	Carga el CSS con ruta dinámica basada en base_url()
    <script src="...">	        Carga el JS principal (aunque esté vacío de momento)
    <nav>	                    Añades enlaces navegables (puedes ampliarlo más adelante)
    <\?\=\ $contenido ?\>\	    Aquí se inserta el HTML generado por cada vista específica (inicio.php, etc.)
-->
</html>
