# Registro de actividad del proyecto

> Este registro ha sido llevado por el desarrollador como muestra de planificación y control de tiempos, simulando un entorno profesional.
---
## 📅 2025-05-14

**🕒 Horario:**  
Inicio: 16:15  
Fin: 17:45  
**Duración total:** 1 hora y 30 minutos

**✅ Hitos alcanzados:**
- Implementación del modelo `Usuario.php` con:
  - Validación de correo (formato y duplicados)
  - Validación de nombre (mínimo 3 caracteres)
  - Validación de contraseña segura (8+ caracteres, mayúscula, número y símbolo)
  - Encriptado de contraseña con `password_hash()`
  - Sistema de errores con propiedad `$errores` por campo
- Preparación del modelo para integración con formularios (`placeholder` con errores)
- Creación y validación de `tests/test-db.php` y `tests/test-usuario.php` en entorno local
- Confirmación de conexión local a la base de datos funcional
- Preparación de documentación para `CHANGELOG.md` y release `v0.4.0`

---
## 📅 2025-05-13

**🕒 Horario:**  
Inicio: 16:00  
Fin: 18:00  
**Duración total:** 2 horas

**✅ Hitos alcanzados:**
- Subida del proyecto al servidor (producción)
- Creación del subdominio `midiario.oswaldo.dev` con HTTPS activo
- Configuración correcta del `DocumentRoot` a `/public`
- Solución de errores de acceso: 403, 404 y CSS roto
- Activación de SSL con candado verde
- Funcionalidad `testdb()` comprobada en entorno real
- Clonado del repositorio desde GitHub usando Git™ Version Control de cPanel
- Actualización de documentación:
  - `README.md`
  - `CHANGELOG.md`
  - `memoria.md`
  - `docs/presentacion-proyecto.md`
- Creación del Tag `v0.3.0` y publicación de Release en GitHub

---
## 📅 2025-05-12

**🕒 Horario:**  
Inicio: 19:30  
Fin: 20:45  
**Duración total:** 1 hora y 15 minutos

**✅ Hitos alcanzados:**
- Diseño validado de base de datos relacional
- Script SQL generado con tablas relacionadas (`usuarios`, `nota_diario`, etc.)
- Implementación de `FOREIGN KEY` con `ON DELETE CASCADE`
- Preparado campo para contraseñas seguras (`password_hash`)
- Importación de la estructura en phpMyAdmin confirmada
- Documentación actualizada:
  - `README.md`
  - `CHANGELOG.md`
  - `docs/memoria/memoria.md`
- Commit y push realizados
- Tag `v0.2.0` creado
- Release publicada en GitHub

---
## 📅 2025-05-11
**🕒 Horario:**  
Inicio del proyecto sin seguimiento.