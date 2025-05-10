<?php
// 📄 Archivo: app/controller/Controller.php
// 🧠 Función: definir las acciones disponibles (por ahora: solo inicio())

class Controller
{
    // Acción que se ejecuta con ?ctl=inicio o por defecto
    public function inicio()
    {
        // Array con datos que pasamos a la vista
        $params = [
            'mensaje' => 'Bienvenido al Diario MVC',
            'fecha' => date('d/m/Y')
        ];

        // Cargar la vista de inicio
        require __DIR__ . '/../view/inicio.php';
    }


    // Explicación paso a paso:
    // Línea	                                Qué hace
    // class                                    Controller	Define la clase Controller (la que se usa en index.php)
    // public function inicio()	                Este es el método (acción) llamado si visitas ?ctl=inicio
    // $params = [...]	                        Creamos un array asociativo con variables que la vista necesita
    // require __DIR__ . '/../view/inicio.php';	Incluye la plantilla inicio.php (nuestra vista), pasándole $params
    public function testdb()
    {
        require_once __DIR__ . '/../model/Model.php';
        $modelo = new Model();
        $mensaje = $modelo->testConexion();

        $params = [
            'mensaje' => $mensaje,
            'fecha' => date('d/m/Y')
        ];

        require __DIR__ . '/../view/inicio.php';
    }
}
