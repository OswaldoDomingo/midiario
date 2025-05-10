<?php
class Config {
    static public $mvc_bd_hostname = "localhost";
    static public $mvc_bd_nombre   = "nombre_bd";
    static public $mvc_bd_usuario  = "usuario";
    static public $mvc_bd_clave    = "clave";
    static public function base_url() {
        return '/';
    }
}
