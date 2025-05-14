<?php
// 📄 app/model/Database.php
require_once __DIR__ . '/../../config/Config.php';

class Database {
    private static $conexion = null;  // 🟡 Propiedad estática: se guarda una única vez y se comparte en toda la aplicación

    public static function conectar() {
        if (self::$conexion === null) {
            try {
                $dsn = 'mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . ';charset=utf8mb4';
                self::$conexion = new PDO($dsn, Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("💥 Error al conectar con la base de datos: " . $e->getMessage());
            }
        }
        return self::$conexion;
    }
}
