<?php
    include "alumnos.php";
    $objAlum=new alumnos();
    extract($_POST);
    $objAlum->nombres=$name;
    $objAlum->apellidos=$apel;
    $objAlum->dni=$dni;
    $objAlum->sexo=$s;
    $objAlum->guardar();
?>