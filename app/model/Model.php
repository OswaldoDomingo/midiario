<?php

class Model {
    protected $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO(
                'mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre,
                Config::$mvc_bd_usuario,
                Config::$mvc_bd_clave,
                [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function testConexion() {
        return "✅ Conexión establecida con éxito a la base de datos.";
    }
}
