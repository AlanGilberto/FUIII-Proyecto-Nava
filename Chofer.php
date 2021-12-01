<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Chofer</title>
</head>
<body>
    <main>

        <?php include('seccionesInclude/header.php'); ?>  
        
        <div class="contenedor-text-chofer-formulario">
            <div class="text-chofer">
                <h1>Descripcion</h1>
                <p>Los operadores de autobús trabajan para servicios de autobuses en rutas urbanas, suburbanas y foráneas. Tienen que respetar un horario y proporcionar a los pasajeros información general sobre las posibles rutas de trayecto.
                    Los operadores suelen manejar diferentes distancias, más cortas o más largas, incluidos algunos trayectos por carretera, así como diferentes vehículos a parte del autobús, como puede ser camiones, trolebuses, etc.
                    Si es el caso, deberá estar comunicado con la central de autobuses por si requiere recibir o mandar instrucciones durante el trayecto.</p>
                    <h1>Perfil profesional</h1>
                    <p>Para desempeñar bien este trabajo, se requiere:</p>
                    <ul>
                        <li>Ser hábil en el manejo de autobús, microbús, trolebus, etc, también con mucho tráfico y bajo todo tipo de condiciones meteorológicas</li>
                        <li>Buena concentración en todo momento</li>
                        <li>Ser capaz de mostrarse paciente y de mantener la calma en toda situación</li>
                        <li>Conocer las rutas y el normas de circulación.</li>
                    </ul>
                </div>
                <div class="formulario">
                    <h1>Tenemos vacantes disponibles, apuntate!</h1>
                    <form action="" method='POST'>
                        <h2>Formulario</h2>
                        <label for="">Ingresa tu nombre completo</label>
                        <input type="text" name="nombre" id="">
                        <label for="" >Ingresa tu email para poder contactarte</label>
                        <input type="email" name="correo" id="">
                        <label for="" >Ingresa tu fecha de nacimiento</label>
                        <input type="date" name="fecha" id="">
                        <input type="submit" name="enviar" value="Enviar datos">

                        <?php 
                            if(isset($_POST['enviar'])){

                                $nombre = ($_POST['nombre']);
                                $correo = ($_POST['correo']);
                                $fecha = ($_POST['fecha']);

                                echo "Se han enviado tus siguientes datos:<br>Nombre: $nombre<br>Correo: $correo<br>Fecha de nacimiento: $fecha";
                            }
                        ?>
                    </form>
                </div>
            </div>
            
            
            
            <?php include('seccionesInclude/footer.php'); ?> 
        </main>
</body>
</html>