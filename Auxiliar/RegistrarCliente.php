<?php    
    require("../php/consultas.php");

    $usuario= $_GET["user"];
    
    $consulta = new Consultas();
    $consulta -> validarUser($usuario);
    $nombre = $consulta -> getNombre($usuario);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Registro del cliente</title>

    <link rel="stylesheet" href=" ../CSS/formularios.css">
    <link rel="stylesheet" href=" ../CSS/Botones.css">
</head>

<body>
    <header id="encabezado_principal">
        <div class="logo"><img src="./IMG/logo.png" alt="logo" style="height:100px"></div>
        <a class="Titulo_principal" href="#">
            <span class="nombre_sitio">Veterinaria</span>
            <span class="descripcion_sitio">Registro de nuevo cliente</span>
        </a>
        <nav class="navegacion">
            <ul>
<<<<<<< HEAD:Auxiliar/RegistrarCliente.php
                <li><a href="./Inicio-Auxiliar.php?user=<?php echo $usuario?>" id="regresar">Regresar </a></li>
=======
                <li><a href="./Inicio-Auxiliar.php" id="regresar">Regresar </a></li>
>>>>>>> 9de550ab9ba9a11912ce6de9f5c1d1b51421d224:Auxiliar/RegistrarCliente.html
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
            
            <div class="contenido" style="background-image: url('http://www.homelesstohousecats.com/wp-content/uploads/2014/06/Cat-with-Vet-Stethascope-1024x1024.jpg') ;  background-size:contain; ;">
                <form method="post" name="formulario_registro"><br>
                    <table class="formulario">
                        <tr>
                            <td><h2 class="subtitulo">Datos personales</h2><hr>
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre
                                <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="nombre_cliente" id="nombre_cliente" placeholder="Nombre"
                                    required="" />
                            </td>
                        </tr>
                        <tr>
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
                                Fecha de nacimiento <br />
                                <input class="inputText" type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="" required="" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Género: <br/>
                                <input type="radio" name="genero" id="hombre" />
                                <label for="hombre">Hombre</label> &nbsp;
                                <input type="radio" name="genero" id="mujer" />
                                <label for="mujer">Mujer</label>
                                <input type="radio" name="genero" id="no_binario"/>
                                <label for="mujer">No binario</label>
                            </td>
                        </tr>
                        <tr>
                            <td> <br>
                                CURP <br /> <input class="inputText" onkeyup="mayus(this)" type="text" name="curp" id="curp" pattern=" ([A-Z] [4))+([0-9] [6])+([H|M] (1])+([A-Z] [5])+([0-9] [2]) "
                                    maxlength="18" placeholder="ejemplo MAW8981212MAYWTSZO" required />
                            </td>
                        </tr>
                        <tr>
                            <td><br>
                                <h2 class="subtitulo">Información de contacto</h2>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Calle y número: <br /> <input class="inputText" onkeyup="mayus(this)" type="text" name="calle_num" id="calle_num" value=""
                                    required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Colonia: <br />
                                <input class="inputText" onkeyup="mayus(this)" type="text" name="colonia" id="colonia" value="" required />
                            </td>
                        </tr>
                        <tr>
                            <td>Alcaldia: 
                                <select name="municipio" id="municipio" required>
                                    <option value="">Selecciona una...<una class=""></una></option>
                                    <option value="alvaro_obregon">ÁLVARO OBREGÓN</option>
                                    <option value="azcapotzalco">AZCAPOTZALCO</option>
                                    <option value="benito_juarez">BENITO JUÁREZ</option>
                                    <option value="coyoacan">COYOACÁN</option>
                                    <option value="cuajimalpa">CUAJIMALPA DE MORELOS</option>
                                    <option value="cuauhtemos">CUAUHTEMOC</option>
                                    <option value="gustavo_a_madero">GUSTAVO A. MADERO</option>
                                    <option value="iztacalco">IZTACALCO</option>
                                    <option value="iztapalapa">IZTAPALAPA</option>
                                    <option value="magdalena_contreras">MAGDALENA CONTRERAS</option>
                                    <option value="miguel_hidalgo">MIGUEL HIDALGO</option>
                                    <option value="milpa_alta">MILPA ALTA</option>
                                    <option value="tlahuac">TLÁHUAC</option>
                                    <option value="tlalpan">TLALPAN</option>
                                    <option value="venustiano_carranza">VENUSTIANO CARRANZA</option>
                                    <option value="xochimilco">XOCHIMILCO</option>
                                </select> &nbsp;&nbsp;
                                Estado: 
                                <select name="estado" id="estado">
                                    <option value="cdmx" selected>CDMX</option>
                                </select> &nbsp;&nbsp;
                                C.P.: <input type="text" id="codigo_postal" class="inputText" style="width: 10%;" required>
    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Teléfono: <br>
                                <input type="text" name="telefono" id="telefono" class="inputText" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                Correo electrónico: <br>
                                <input type="text" name="correo" id="correo" class="inputText" required><br>
                            </td>                            
                        </tr>

                        <tr>
                            <td>
                            <input type="hidden" id="user" class="form-control" value="<?php echo($usuario);?>">
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