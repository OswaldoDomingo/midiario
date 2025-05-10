<?php ob_start(); ?>
<!-- 
📄 Archivo: app/view/inicio.php
🧠 Función: mostrar contenido HTML dinámico usando las variables $params['mensaje'] y $params['fecha'].
 -->

    <h2>Inicio</h2>
    <p>Fecha actual: <strong><?= $params['fecha'] ?></strong></p>
    <p><?= $params['mensaje'] ?></p>
<?php $contenido = ob_get_clean(); ?>

<?php require __DIR__ . '/layout.php'; ?>
<!-- 
🧾 Explicación paso a paso:
Bloque	                        Qué hace
ob_start();	                    Activa un buffer de salida. Todo lo que se imprime después no se envía 
                                directamente al navegador, sino que se guarda temporalmente.
<h2>...</h2> ...	            Código HTML que compone la vista, usando datos de $params.
$contenido = ob_get_clean();	Finaliza el buffer y guarda todo el HTML generado en la variable $contenido.
require layout.php              Carga la plantilla base (layout), que usará $contenido para incrustar este 
                                HTML dentro de la estructura general del sitio. -->