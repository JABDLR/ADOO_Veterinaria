<?php
require("ConexionBD.php");

//Se cre una instancia tipo ConexionBD
$conexion= new ConexionBD();
$conexion-> conectarBD();

$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];

/*
session_start();
$_SESSION['curp'] = $usuario;*/

$query = "SELECT * FROM usuario WHERE correo = '$usuario' AND contrasena ='$contraseña';";
$result = $conexion->peticionSQL($query);
$row = mysqli_num_rows($result);

	if($row == 1)
	{
        $query = "SELECT * FROM usuario WHERE correo = '$usuario';";
        $result = $conexion->peticionSQL($query);
        $row = mysqli_fetch_array($result);
        $curp = $row["CURP"];
		try{
			$query = "SELECT * FROM auxiliar WHERE CURPAuxiliar = '$curp';";
			$result = $conexion->peticionSQL($query);
			$row = mysqli_num_rows($result);
			if($row == 1)
				header("Location: ../Auxiliar/Inicio-Auxiliar.php?user=$curp");
		}catch(Exception $e){}
		try{
			$query = "SELECT * FROM veterinario WHERE CURPVeterinario = '$curp';";
			$result = $conexion->peticionSQL($query);
			$row = mysqli_num_rows($result);
			if($row == 1)
				header("Location: ../Veterinario/Inicio-Veterinario.php?user=$curp");
		}catch(Exception $e){}
		try{
			$query = "SELECT * FROM cliente WHERE CURPCliente = '$curp';";
			$result = $conexion->peticionSQL($query);
			$row = mysqli_num_rows($result);
			if($row == 1)
				header("Location: ../Cliente/Inicio-Cliente.php?user=$curp");
		}catch(Exception $e){}
		
	}else {
		echo "<script type='text/javascript'>
			alert('Usuario o contraseña incorrecta');
			window.location.href=' ../index.html';
			</script>";
		
	}

    $conexion-> desconectarBD();
?>