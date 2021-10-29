<!doctype html>
<html>
    <head>
        <title>Crear ficha</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="estilos.css" rel="stylesheet"/>
        
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2"> 
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
        <img src="IMAGENES/banner3.png"> <?php } ?>
        <div id="div3" >
        <?php
            if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
            { 
            ?>
            <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
                <div class="col-md-12">
                <strong class="lgris">crear ficha</strong>
                <br>
                
                    <div class="form-group col-md-6">
                        <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" required/>
                    </div>
                

            <label class="igris">numero ficha: </label>
                  <input class="fora-control" style="text-transforma:uppercase;" type="number" name="numero"> 
                    ?>
                </div>
            </div> 
        </div> 
    </body>
</html>