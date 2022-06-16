<?php 
require("ConexionBD.php");
//Se cre una instancia tipo ConexionBD
$conexion= new ConexionBD();
$conexion-> conectarBD();

$nombre = $_GET["nombre"];
$apellidoP = $_GET["apeP"];
$apellidoM = $_GET["apeM"];
$Fnacimiento = $_GET["fecha"];
$genero = $_GET["genero"];
$curp = $_GET["curp"];
$calleN = $_GET["calleN"];
$colonia = $_GET["col"];
$alcaldia = $_GET["alcaldia"];
$estado = $_GET["estado"];
$CP = $_GET["cp"];
$telefono = $_GET["tel"];
$correo = $_GET["correo"];
$user = $_GET["user"];

try{
    $nuevoUsuario = "INSERT INTO usuario (CURP, contrasena, apellidoPaterno, apellidoMaterno, nombres, fechaNacimineto, genero, telefono, correo)
    VALUES ('$curp', '$curp', '$apellidoP', '$apellidoM', '$nombre', '$Fnacimiento' , '$genero', '$telefono', '$correo' )";

echo "<script>
    alert('$nuevoUsuario');
    </script>";

    $resultado = $conexion->peticionSQL($nuevoUsuario);
}catch(Exception $e){

    echo "<script type='text/javascript'>
            alert('Error, probablemente el CURP este duplicado');
			location.href =' ../Auxiliar/Inicio-Auxiliar.php?user=$user';
			</script>";
}

if($resultado){
    $nuevaDireccion = "INSERT INTO direcion (Estado, Alcaldia, CalleNumero, Colonia, CP, CURPUsuario)
    VALUES ( '$estado', '$alcaldia', '$calleN',  '$colonia', '$CP', '$curp' )";
    $conexion->peticionSQL($nuevaDireccion);
    echo "<script>
    alert('$nuevaDireccion');
    </script>";

    $nuevoCliente = "INSERT INTO cliente (tarjetaPago, CURPCliente)
    VALUES ('', '$curp')";
    $conexion->peticionSQL($nuevoCliente);

    echo "<script>
    alert('$nuevoCliente');
    </script>";

    echo "<script type='text/javascript'>
            alert('Guardado correctamente');
			location.href =' ../Auxiliar/Inicio-Auxiliar.php?user=$user';
			</script>";
}
else{
    echo "<script type='text/javascript'>
            alert('Error, no se logro registrar al usuario');
			location.href =' ../Auxiliar/Inicio-Auxiliar.php?user=$user';
			</script>";
}


$conexion-> desconectarBD();
?>