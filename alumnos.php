<?php
    class alumnos
    {
        public $id;
        public $nombres;
        public $apellidos;
        public $dni;
        public $sexo;
        private $connect;
        function __construct()
        {
            include "connect.php";
            $this->connect=new connect();
        }
        function guardar()
        {
            $conexion=$this->connect->conexion;
            $q="insert alumnos values(null,?,?,?,?)";
            
            if (!($sentencia=$conexion->prepare($q)))
            {
                echo $conexion->error;
            }
            if(($sentencia->bind_param("ssss",$this->nombres,$this->apellidos,$this->dni,$this->sexo)))
            {
                echo $sentencia->error;
            }
            $sentencia->execute();
        }
        function buscar()
        {

        }
        function listar()
        {
            $conexion=$this->connect->conexion;
            $q="select nombres,apellidos,dni,sexo from alumnos";
        }
        function borrar()
        {

        }
        function editar()
        {

        }
        function actualizar()
        {

        }
    }
?>
