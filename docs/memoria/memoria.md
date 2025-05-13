# Memoria del Proyecto: MiDiario

**Autor:** Oswaldo Domingo  
**Curso:** Desarrollo de Aplicaciones Web (DAW)  
**Fecha de inicio:** Mayo 2025  
**Repositorio:** [https://github.com/OswaldoDomingo/midiario](https://github.com/OswaldoDomingo/midiario)

---

## 1. Introducción

Breve descripción del propósito del proyecto.  
Ejemplo:  
Este proyecto consiste en el desarrollo de una aplicación web llamada "MiDiario", donde el usuario podrá almacenar notas personales, apuntes de clase, reflexiones, frases célebres o citas de libros. La aplicación se ha desarrollado siguiendo el patrón de arquitectura MVC usando PHP puro.

---

## 2. Objetivos

- Diseñar una estructura de aplicación escalable y mantenible.
- Aplicar el patrón MVC de forma práctica.
- Gestionar apuntes y entradas personales con una interfaz simple.
- Usar buenas prácticas de desarrollo con Git y GitHub.
- Preparar la base para implementar funcionalidades futuras como búsquedas, filtros, exportaciones, etc.

---

## 3. Tecnologías utilizadas

- Lenguaje de programación: PHP
- Arquitectura: MVC (Modelo-Vista-Controlador)
- Frontend: HTML5, CSS3, JavaScript
- Control de versiones: Git + GitHub
- Editor: Visual Studio Code / IntelliJ IDEA / otro
- Servidor local: Apache

---

## 4. Estructura del proyecto

### 4.1 Estructura de carpetas

```txt
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

/docs/
  └── memoria.md

```
---

### 4.2 Flujo básico MVC

1. El usuario hace una petición (`index.php?ctl=inicio`)
2. El controlador frontal interpreta la acción y la ejecuta
3. El controlador procesa los datos (si es necesario) y pasa a la vista
4. La vista genera el HTML que ve el usuario

---

## 5. Desarrollo paso a paso

### 5.1 Inicio del proyecto y GitHub

Describe cómo iniciaste el repositorio, estructura inicial y primer push.

### 5.2 Implementación inicial

- Creación de carpetas
- Controlador inicial
- Vista de inicio
- Layout general

### 5.3 Integración de Bootstrap

Se ha integrado el framework CSS **Bootstrap 5.3.3** a través de CDN en la plantilla principal `layout.php`.  
Esto permitirá aplicar estilos consistentes y componentes visuales reutilizables a lo largo de toda la aplicación.

### 5.4 Creación de la base de datos

Se ha diseñado y creado la base de datos `diario` en MySQL.  
Contiene una tabla `usuarios` que permite distinguir entre el administrador (id = 0) y usuarios normales.  
Además, se han creado cinco tablas especializadas para distintos tipos de entradas:

- `nota_diario`
- `nota_apunte`
- `nota_libro`
- `nota_reflexion`
- `nota_frase`

Todas están relacionadas con la tabla `usuarios` mediante la clave foránea `usuario_id`.  
La relación tiene activado `ON DELETE CASCADE` para mantener la integridad referencial.  
Las contraseñas se almacenan de forma segura utilizando hash generado por `password_hash()` en PHP.

### 5.5 Despliegue y sincronización

- El proyecto se ha subido al hosting real bajo el dominio `midiario.oswaldo.dev`
- Se ha configurado el subdominio en cPanel para apuntar a la carpeta `public/`
- Se activó el certificado SSL para navegación segura (HTTPS)
- Se utilizó Git™ Version Control para clonar el repositorio desde GitHub
- Ya es posible sincronizar fácilmente desde desarrollo local hasta producción

---

## 6. Funcionalidades implementadas

| Funcionalidad               | Estado |
|-----------------------------|--------|
| Estructura MVC básica       | ✅     |
| Controlador frontal         | ✅     |
| Vista de inicio             | ✅     |
| Estilos base                | ✅     |
| Documentación inicial       | ✅     |

---

## 7. Mejoras previstas / Futuras funcionalidades

- Añadir base de datos para guardar las entradas
- Crear sistema de usuarios y login
- Buscador de notas por palabra clave o fecha
- Exportar entradas a TXT o CSV
- Clasificación por categorías

---

## 8. Conclusión

Resumen del trabajo realizado, lo que has aprendido y cómo valorarías el resultado.

---

## 9. Anexos

- Enlaces al repositorio
- Capturas de pantalla
- Diagramas UML (ver carpeta `docs/esquemas/`)
### 4.2 Flujo básico MVC

1. El usuario hace una petición (`index.php?ctl=inicio`)
2. El controlador frontal interpreta la acción y la ejecuta
3. El controlador procesa los datos (si es necesario) y pasa a la vista
4. La vista genera el HTML que ve el usuario

---
