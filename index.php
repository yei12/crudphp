<!doctype html>

<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
        <link href="estilos.css" rel="stylesheet"/>
        
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
                 <img src="IMAGENES/banner 1.png" >
            <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris">Ingrese su usuario y contraseña para iniciar sesión</strong>
                        <br>
                        <label class="lgris">Nombre de Usuario:</label>
                        <br>
                        <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                        <br>
                        <label class="lgris">Contraseña:</label>
                        <br>
                        <input type="password" name="clave" value="" required/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Iniciar sesión" >
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>