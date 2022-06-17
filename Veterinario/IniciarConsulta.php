

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro del cliente</title>

    <link rel="stylesheet" href=" ../CSS/formularios.css">
    <link rel="stylesheet" href=" ../CSS/Botones.css">
</head>

<body>
</head>

<body>
    <header id="encabezado_principal">
        <div class="logo"><img src="../img/logo.png" alt="logo" style="height:100px"></div>
        <a class="Titulo_principal" href="./Inicio-Veterinario.php">
            <span class="nombre_sitio">Veterinaria</span>
            <span class="descripcion_sitio">Buscar mascota</span>
        </a>
        <nav class="navegacion">
            <ul>
                <li><a href="./Inicio-Veterinario.php" id="regresar">Regresar</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section id="principal">
        <article>
            <!--header>
                <h1 class="titulo_encabezado">Nuevo registro</h1>
            </header-->
            
            <div class="contenido" style="background-image: url('http://www.homelesstohousecats.com/wp-content/uploads/2014/06/Cat-with-Vet-Stethascope-1024x1024.jpg') ;  background-size:cover;  ;">
                <form method="post" name="formulario_registro"><br>
                    <table class="formulario">
                        <tr>
                            <td><h2 class="subtitulo">Datos Cliente consulta</h2><hr>
                            </td>
                        </tr>

                        <tr>
                            <td> <br>
                                CURP <br /> <input class="inputText" onkeyup="mayus(this)" type="text" name="curp" id="curp" pattern=" ([A-Z] [4))+([0-9] [6])+([H|M] (1])+([A-Z] [5])+([0-9] [2]) "
                                    maxlength="18" placeholder="ejemplo MAW8981212MAYWTSZO" required />
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre
                                <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="nombre_cliente" id="nombre_cliente" placeholder="Nombre"
                                    required="" />
                            </td>
                        </tr>
                            <td>
                                <br>
                                Primer apellido <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="primer_apellido" id="primer_apellido" placeholder="Primer apellido"
                                    required="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Segundo apellido <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="segundo_apellido" id="segundo_apellido"
                                    placeholder="Segundo apellido" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Fecha de consulta <br />
                                <input class="inputText" type="date" name="fecha_consulta" id="fecha_consulta" value="" required="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Sintomas: <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="Sintomas" id="Sintomas" value="" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Signos vitales: <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="vitales" id="vitales" value="" required />
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td style="text-align: center;">
                            <div class="btn-Formularios">
                            <button onclick="validar()"  class="boton uno">
                                <span>Enviar</span>
                            </button>
                            <button onclick="location.reload()" class="boton dos">
                                <span>Limpiar</span>
                            </button>        
                        </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </article>
    </section>
    <footer id="pie_pagina" style="text-align: center;">
        <br>
        <p>&copy; 2022 Equipo 3 Todos los derechos reservados | Contacto: <a href="">equipo3@escom.com</a>
            &nbsp;&nbsp;&nbsp;Telefono: <a href="">07700900461 </a></p>
    </footer>

    <script src="../JS/Validar-Cliente.js"></script>
    <script src="../JS/formularios.js"></script>
</body>

</html>