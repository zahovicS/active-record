<?php
    include "alumnos.php";
    $objAlumb=new alumnos();
    $objAlumb->nombres="zahovic";
    $objAlumb->apellidos="saravia";
    $objAlumb->dni="12345678";
    $objAlumb->sexo="m";
    $objAlumb->guardar();
?>