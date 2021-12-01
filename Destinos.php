<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Destinos</title>
</head>
<body>
    <main>

        <?php include('seccionesInclude/header.php') ?> 
        
        
        <div class="contenedor-video-formulario-destinos">
            <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_Kh7zwStl-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="formulario-destinos">
                    
                    <h1>Busca tu destino!</h1>
                    <form method="POST">
                        <h2>Formulario</h2>
                        <select name="destino" id="">
                            <option>Las Coloradas, Yucatán</option>
                            <option>Puerto Escondido, Oaxaca</option>
                            <option>Mahahual, Quintana Roo</option>
                            <option>Grutas de Tolantongo, Hidalgo</option>
                            <option>Comala, Colima</option>
                            <option>Tapijulapa, Tabasco</option>
                            <option>Mineral de Pozos, Guanajuato</option>
                            <option>Cuetzalán, Puebla</option>
                            <option>Troncones, Guerrero</option>
                            <option>Tequila, Guadalajara</option>
                        </select>
                        <label for="">¿Cuantos viajan?</label>
                        <input type="number" name="pasajeros" id="">
                        <label for="">Ingresa tu nombre</label>
                        <input type="text" name="nombre" id="">
                        <label for="">Ingresa la clase en la que deseas viajar</label>
                        <select name="clase" id="">
                            <option>Turista</option>
                            <option>Premium</option>
                            <option>Primera clase</option>
                        </select>
                        <input type="submit" value="Comprar ya!" name="enviar">


                        <?php 
                            if(isset($_POST['enviar'])){
                                $destino = $_POST['destino'];
                                $pasajeros = $_POST['pasajeros'];
                                $nombre = $_POST['nombre'];
                                $clase = $_POST['clase'];
                                $numeroViaje = rand(172347,84727368);

                                
                                echo "Compra realizada, esta es tu informacion:<br>Destino: $destino<br>Numero de pasajeros:
                                     $pasajeros<br>Tu nombre: $nombre<br>Clase de viaje: $clase<br>Numero de viaje: $numeroViaje";


                            }
                        
                        ?>

                    </form>

                    </div>
                </div>
                
                
                <?php include('seccionesInclude/footer.php') ?>  
            </main>


</body>
</html>