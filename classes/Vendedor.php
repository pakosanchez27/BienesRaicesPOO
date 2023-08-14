<?php

namespace App;

class Vendedor extends ActiveRecord
{
    protected static $tabla = 'vendedores';

    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar()
    {
        if(!$this->nombre) {
            self::$errores[] = "El nombre es Obligatorio";
        }
        if(!$this->apellido) {
            self::$errores[] = "El apellido es Obligatorio";
        }
        if(!$this->telefono) {
            self::$errores[] = "El telefono es Obligatorio";
        }

        if(!preg_match('/^\d{1,4}\s?\d{4,}$/', $this->telefono)){
            self::$errores[] = "Formato No valido ";
        }

        return self::$errores;
    }
   


}
