<?php
    class connect
    {
        public $conexion;

        function __construct()
        {
            $this->conexion=new mysqli("localhost","root","12345678","alumnos");
            //var_dump($this->conexion);
            if ($this->conexion->connect_errno)
            {
                echo $this->conexion->connect_error;
            }
            else
            {
                echo "";
            }
        }
    }
?>