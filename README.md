# MiDiario

Proyecto web en PHP con arquitectura MVC.  
Su objetivo es ofrecer un espacio personal para almacenar:

- Apuntes de clase
- Notas personales (diario)
- Frases de libros
- Reflexiones

## 📁 Estructura del proyecto

/app/
├── controller/
├── model/
└── view/
/config/
└── Config.php
/public/
├── index.php
├── css/
├── js/
└── images/
/logs/

## 📦 Tecnologías utilizadas

- PHP 8+
- HTML5, CSS3, JS
- MVC puro (sin frameworks)

## 🗄️ Base de datos

- Base de datos `diario` creada en MySQL
- Tabla `usuarios` con control de acceso previsto (administrador y usuarios normales)
- Tablas especializadas para distintos tipos de notas (diario, apunte, libro, reflexión, frase)
- Relaciones entre tablas mediante `usuario_id`
- Soporte para borrado en cascada de notas al eliminar usuario (integridad referencial)
- Contraseñas encriptadas con `password_hash()` (tipo seguro)
- Script SQL disponible en `docs/esquemas/estructura-bd-v2.sql`

## 🚀 En desarrollo...

Este proyecto se encuentra en etapa de construcción paso a paso.

## ⚙️ Estado

- Estructura MVC funcional
- Controlador y vista de inicio
- Base de datos creada y conectada
- Acción de prueba de conexión (`?ctl=testdb`)
- Documentación y control de versiones activos
## 🎨 Diseño e interfaz

- Se ha integrado **Bootstrap 5.3.3** desde CDN en el archivo `layout.php`
- La plantilla principal carga tanto los estilos de Bootstrap como los propios (`css/estilos.css`)
- Se ha dejado preparado el layout para insertar componentes de Bootstrap en las vistas
