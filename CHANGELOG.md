# CHANGELOG


## [0.2.0] - 2025-05-10
### Añadido
- Estructura completa de la base de datos `diario`
- Tabla `usuarios` con soporte para autenticación (incluye campo para contraseñas hasheadas)
- Tablas separadas para cada tipo de entrada: `nota_diario`, `nota_apunte`, `nota_libro`, `nota_reflexion`, `nota_frase`
- Relaciones mediante claves foráneas (`usuario_id`) con `ON DELETE CASCADE`
- Script SQL generado y guardado en `docs/esquemas/estructura-bd-v2.sql`

## [0.1.2] - 2025-05-10
### Añadido
- Integración de Bootstrap 5 desde CDN en `layout.php`
- Inclusión de CSS de Bootstrap y script JS en la plantilla general

## [0.1.1] - 2025-05-10
### Añadido
- Base de datos `diario` creada en MySQL
- Conexión implementada desde el modelo usando PDO
- Acción `testdb()` añadida al controlador para verificar conexión
- Ruta `?ctl=testdb` funcional

## [0.1.0] - 2025-05-10
### Añadido
- Estructura de carpetas MVC (`app/`, `config/`, `public/`)
- Controlador frontal (`index.php`)
- Clase `Config` para configuración global
- Controlador con acción `inicio()`
- Vistas `inicio.php` y `layout.php`
- Archivos base de estilos y JS
- Archivo `.gitignore` inicial
- Documentación inicial (`README.md`, `CHANGELOG.md`)
