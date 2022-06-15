<?php    
    require("../php/consultas.php");

    $usuario= $_GET["user"];
    
    $consulta = new Consultas();
    $consulta -> validarUser($usuario);
    $nombre = $consulta -> getNombre($usuario);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auxiliar - Inicio</title>

    <!--Hojas de estilo-->
    <link rel="stylesheet" href=" ../CSS/maquetado.css">
    <link rel="stylesheet" href=" ../CSS/Botones.css">
    <link rel="stylesheet" href=" ../CSS/Inicio-Auxiliar.css">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body class="grid-container">
    <!--Heder-->
    <header class="header">
        <div class="Boton-desplegable" id="Boton-desplegable">
            <img src=" ../img/menu.png" alt="Boton menu">
        </div>

        <div class="Logo">
            <img src=" ../img/logo.png" alt="Logo Veterinaria">
        </div>

        <div class="Container-Reloj">
            <div class="Datos-hora" id="reloj"></div>
            <div class="Datos-fecha">
                <span id="fec_Datos"></span>
            </div>
        </div>

        <div class="Container-Btn-CS">
            <button type="button" class="boton dos" onclick="location.href=' ../index.html'">
                <span>Cerrar sesión</span>
            </button>
        </div>
    </header>

    <!--Contenido principal-->
    <main class="main">
        <div class="Bievenida-container">
            <h1 class="Bievenida">
                Bienvenido Auxiliar <?php echo $nombre?>.
            </h1>
        </div>

        <div class="Botones-container">

            <div class="Container-Actividad1">
                <h2 class="nombre-atividad">Registrar cliente</h2>
                <a href="RegistrarCliente.html" class="BotonActividad">
                    <img src=" ../img/RegistrarCliente.png" alt="Registrar cliente">
                </a>
            </div>

            <div class="Container-Actividad2">
                <h2 class="nombre-atividad">Registrar Mascotas</h2>
                <a href="RegistrarMascota.html" class="BotonActividad">
                    <img src=" ../img/RegistrarMascota.png" alt="Registrar Mascota">
                </a>
            </div>

            <div class="Container-Actividad3">
                <h2 class="nombre-atividad">Buscar Clientes</h2>
                <a href="BuscarCliente.html" class="BotonActividad">
                    <img src=" ../img/BuscarCliente.png" alt="Buscar cliente">
                </a>
            </div>

            <div class="Container-Actividad4">
                <h2 class="nombre-atividad">Buscar Mascota</h2>
                <a href="BuscarMascota.html" class="BotonActividad">
                    <img src=" ../img/BuscarMascota.png" alt="Buscar Mascota">
                </a>
            </div>

        </div>
        
        <!--Menu desplegable-->
        <div class="container-menu-desplegable active" id="menu-desplegable">
            <ul>
                <li> <a href="#">Inicio</a> </li>
                <li> <a href="RegistrarCliente.html">Registrar cliente</a> </li>
                <li> <a href="RegistrarMascota.html">Registrar mascotas</a> </li>
                <li> <a href="BuscarCliente.html">Buscar clientes</a> </li>
                <li> <a href="BuscarMascota.html">Buscar mascota</a> </li>
                <li> <a href=" ../index.html">Cerrar sesión</a> </li>
            </ul>
        </div>


    </main>

    <!--pie de página-->
    <footer class="footer">
        <h5 class="Datos-contacto">Datos de contacto</h5>
        <p class="Datos-contacto">Correo:   equipo3@escom.com</p>
        <p class="Datos-contacto">Telefono: 07700900461</p>
    </footer>

    <script src=" ../JS/reloj.js"></script>
    <script src=" ../JS/MenuDesplegable.js"></script>
</body>
</html>