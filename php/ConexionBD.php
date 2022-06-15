<?php
class ConexionBD{
    //Variable global de la conexión a la base
    public $mysqli;

    //Funcion para conectar a la base
    public function conectarBD(){
        //Pedimos la variable global
        global $mysqli;
        try{
            //Conectamos a la base de datos
            $mysqli = mysqli_connect("localhost", "root", "","veterinaria");
            //echo "BD conectado";
        }catch(Exception $e){
            return FALSE;
        }
    }

    //Funcion para desconectar la base
    public function desconectarBD(){
        
        //Pedimos la variable global
        global $mysqli;
        //Hacemos la desconexión a la bd
        $mysqli = mysqli_close($mysqli);
    }

    //Funcion para hacer cualquier inserción SQL
    public function peticionSQL($sql){
        //Pedimos la variable global
        global $mysqli;
        //Hacemos la petición
        $resultado = mysqli_query($mysqli,$sql);
        //Retornamos el resultado
        return $resultado;
    }
}
?>