
-- Base de datos
CREATE DATABASE IF NOT EXISTS diario CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE diario;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(100) NOT NULL,
    correo_usuario VARCHAR(150) NOT NULL UNIQUE,
    pass_usuario VARCHAR(255) NOT NULL -- almacenará el hash generado con password_hash()
);

-- Tabla de notas personales (diario)
CREATE TABLE nota_diario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    nota_diario TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabla de apuntes de clase
CREATE TABLE nota_apunte (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    asignatura VARCHAR(100),
    tema VARCHAR(100),
    sub_tema VARCHAR(100),
    nota_apunte TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabla de notas de libros
CREATE TABLE nota_libro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    libro VARCHAR(150),
    autor VARCHAR(100),
    pagina INT,
    nota_libro TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabla de reflexiones personales
CREATE TABLE nota_reflexion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    tipo_reflexion VARCHAR(100),
    nota_reflexion TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabla de frases célebres
CREATE TABLE nota_frase (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    fecha DATE NOT NULL,
    tipo_frase VARCHAR(100),
    nota_frase TEXT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
