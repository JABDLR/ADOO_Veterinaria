<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Editar estado de mascota</title>
    <link rel="stylesheet" href="../CSS/formularios.css">
    <script src="../JS/formularios.js">    
    </script>
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
            <div class="contenido" style="background-image: url('http://www.homelesstohousecats.com/wp-content/uploads/2014/06/Cat-with-Vet-Stethascope-1024x1024.jpg') ;  background-size:cover; ;">
                <form action="" method="post" name="editar_mascota"><br>
                    <table class="formulario">
                        <tr>
                            <td><h2 class="subtitulo">Actualizar Estado Mascota</h2><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>Sintomas
                                <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="nombre_mascota" id="nombre_mascota"placeholder=""
                                    required="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Signos vitales <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="especie" id="especie" placeholder=""
                                    required="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Diagnostico <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="edad_mascota" id="edad"
                                    placeholder="" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <br>
                                Seleccionar Mascota <br />

                                <select name="categories">
                                <!-- <?php 
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo "<option value='".$row['path']."'>'".$row['name']."'</option>";
                                }
                                ?>         -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                RUAC de la mascota: <br /> <input class="inputText" onkeyup="mayus(this)" type="text" name="ruac" id="ruac" placeholder="RUAC"
                                    required />
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <br>
                            <input type="submit" name="Editar" id="Editar" onblur="validarEdicion()" value="Actualizar" class="boton_submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Reiniciar" class="boton_limpiar" id="boton_limpiar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </article>
    </section>
    <footer style="text-align: center;" id="pie_pagina">
        <br>
        <p>&copy; 2022 Equipo 3 Todos los derechos reservados | Contacto: <a href="">equipo3@escom.com</a>
            &nbsp;&nbsp;&nbsp;Telefono: <a href="">07700900461 </a></p>
    </footer>


</body>

</html>