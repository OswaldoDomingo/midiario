<?php
require_once __DIR__ . '/Database.php';

class Usuario {
    private $conn;
    private $errores = [];

    public function __construct() {
        $this->conn = Database::conectar();
    }

    public function getErrores() {
        return $this->errores;
    }

    public function nuevoUsuario($correo, $nombre, $password) {
        $this->errores = []; // Reiniciamos los errores en cada intento

        // 1. Validar correo
        if (!$this->esCorreoValido($correo)) {
            $this->errores['correo'] = "❌ El correo no es válido.";
        }

        // 2. Validar nombre (mínimo 3 caracteres)
        if (!$this->esNombreValido($nombre)) {
            $this->errores['nombre'] = "❌ El nombre debe tener al menos 3 caracteres.";
        }

        // 3. Comprobar si el correo ya existe
        if ($this->existeCorreo($correo)) {
            $this->errores['correo'] = "⚠️ El correo ya está registrado.";
        }

        // 4. Validar el password
        if (!$this->esPasswordSeguro($password)) {
            $this->errores['password'] = "❌ La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un símbolo.";
        }

        // Si hay errores, detenemos
        if (!empty($this->errores)) {
            return false;
        }

        // 5. Encriptar password y guardar
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO usuarios (nombre_usuario, correo_usuario, pass_usuario)
                    VALUES (:nombre, :correo, :password)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':password', $passwordHash);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            $this->errores['general'] = "❌ Error al registrar el usuario: " . $e->getMessage();
            return false;
        }
    }

    private function esCorreoValido($correo) {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    private function existeCorreo($correo) {
        $sql = "SELECT COUNT(*) FROM usuarios WHERE correo_usuario = :correo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    private function esPasswordSeguro($password) {
        return strlen($password) >= 8 &&
               preg_match('@[A-Z]@', $password) &&
               preg_match('@[0-9]@', $password) &&
               preg_match('@[^\w]@', $password);
    }

    private function esNombreValido($nombre) {
        return !empty(trim($nombre)) && strlen(trim($nombre)) >= 3;
    }
}
