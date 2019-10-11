<?php
    /*include "alumnos.php";
    $objAlumb=new alumnos();
    $objAlumb->nombres="zahovic";
    $objAlumb->apellidos="saravia";
    $objAlumb->dni="12345678";
    $objAlumb->sexo="m";
    $objAlumb->guardar();
    $objAlumb->listar();*/
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="#" id="active">Registro</a></li>
                <li><a href="#">Buscar</a></li>
                <li><a href="#">Listar</a></li>
                <li><a href="#">Editar</a></li>
            </ul>
        </nav>
        <div class="content">
            <form method="post" action="proceso.php" class="formulario" id="form">
                <label for="">Nombre</label>
                <input type="text" name="name" id="">
                <label for="">Apellidos</label>
                <input type="text" name="apel" id="">
                <label for="">dni</label>
                <input type="text" name="dni" id="">
                <label for="" class="s">Sexo:</label>
                <label for="m" class="s">Hombre</label>
                <input type="radio" name="s" value="m" id="m" class="sexo">            
                <label for="f" class="s">Mujer</label>
                <input type="radio" name="s" value="f" id="f" class="sexo">
                <button type="submit">Guardar</button>          
            </form>
        </div>
        <script>
            let active=document.querySelector("#active");
            form.addEventListener("submit",(e)=>
            {
                e.preventDefault();
                let frm=new FormData(form);
                let Ajax=new XMLHttpRequest();
                Ajax.addEventListener("load",(i)=>
                {
                    if(Ajax.status==200 & Ajax.readyState==4)
                    {
                        alert("Registro Guardado Correctamente")
                        form.reset();
                    }
                });
                Ajax.open("post","proceso.php");
                Ajax.send(frm);
            });
            active.className+="active";
        </script>
    </body>
    </html>