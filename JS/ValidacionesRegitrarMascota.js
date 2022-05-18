var usuario;
var nombre;
var especie;
var edad;
var genero;
var curp;
var ruac; //Checa lo del Ruac que aun no lo añades

var flag = true;//flag que nos indicara si el form es vallido
var errores;

var anterior;

function validar(){
    usuario = document.getElementById("user").value;
    errores = 0;
    
    validarNombre();
    validarEspecie();
    validarEdad();
    validargenero();
    validarCurp();
    
    if(errores == 0){
        //formulario valido
        desplegarInfo();
    }
}

function validarNombre(){
    //tamaño BD 30 caracteres
    nombre = document.getElementById("name").value;
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(nombre === null || nombre === "" ){
        alert("Por favor ingrese el nombre de la mascota");
        errores++;
        return false;
    }

    if(nombre.length > 30){
        alert("Error: la longitud máxima del nombre es de 30 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(nombre)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el nombre");
        errores++;
        return false;
    }
 
}

function validarEspecie(){
    especie = document.getElementById("especie").value;
    if(especie === null || especie==""){
        alert("Por favor introduzca la especie de la mascota");
        errores++;
        return false;
    }
    return true;

}

function validarEdad(){
    //BD varchar 10
    edad = document.getElementById("Edad").value;


    if(edad === null || edad === "" ){
        alert("Por favor ingrese la edad de la mascota");
        errores++;
        return false;
    }

    var regExp = /^[0-9]*$/;

    if(regExp.test(edad)){
        return true;
    }else{
        alert("La edad solo admite numeros");
        errores++;
        return false;
    }
}

function validargenero(){
    var hombre = document.getElementById("H");
    var mujer = document.getElementById("M");

    if(hombre.checked == false && mujer.checked == false){
        alert("Por favor seleccione el genero de la mascota");
        errores++;
        return false;
    }

    if(hombre.checked){
        //selecciono hombre
        genero = "Hombre";
        return true;
    }

    if(mujer.checked){
        genero = "Mujer";
        return true;
    }

}

function validarCurp(){
    //BD 18 caracteres 
    curp = document.getElementById("curp").value;
    if(curp === null || curp === "" ){
        alert("Por favor ingrese el CURP del dueño");
        errores++;
        return false;
    }

    if(curp.length != 18){
        alert("Error: la longitud del CURP es de 18 caracteres");
        errores++;
        return false;
    }


    var primerosCuatro = curp[0] + curp[1] + curp[2] + curp[3];
    var primerosSeis = curp[4] + curp[5] + curp[6] + curp[7] + curp[8] + curp[9];
    var siguentesSeis = curp[10] + curp[11] + curp[12] + curp[13] + curp[14] + curp[15];
    var ultimosDos = curp[16] + curp[17];

    var regexNumeros = /^[0-9]*$/;
    var regexLetras = /^[A-Za-z]+$/;
    var regexLetrasyNumeros = /^[A-Za-z0-9]+$/;

    if(regexLetras.test(primerosCuatro) && regexNumeros.test(primerosSeis) 
    && regexLetras.test(siguentesSeis) && regexLetrasyNumeros.test(ultimosDos)){
        return true;
    }else{
        errores++;
        alert("Formato de CURP invalido");
        return false;
    }
}

function desplegarInfo(){
    var ventanaFormulario = document.querySelector(".formulario");
    var ventanaDatos = document.querySelector(".verInfo.off");
    ventanaDatos.classList.remove("off");
    ventanaFormulario.classList.add("off");
    
    var contenido = document.querySelector(".des");
    var texto = " Hola, el nombre de su mascota es "+nombre+ ",verifica que los datos que ingresaste sean correctos:<br><br><strong>Edad de la mascota: </strong>"+edad+"<br><strong>Genero: </strong>"+genero+"<br><strong>CURP del dueño: </strong>"+curp;

    contenido.innerHTML = texto;
}

function editarContenido(){
    var ventanaFormulario = document.querySelector(".formulario.off");
    var ventanaDatos = document.querySelector(".verInfo");

    ventanaFormulario.classList.remove("off");
    ventanaDatos.classList.add("off");
}

function aceptarCambios(){
    alert("Usted acepto cambios");

    window.location.href = "phpM/guardarDatos.php?nombre="+nombre+"&especie="+especie+"&edad="+edad+"&genero="+genero+"&curp="+curp+"&user="+usuario;  

}