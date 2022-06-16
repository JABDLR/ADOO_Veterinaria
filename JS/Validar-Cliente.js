var usuario;
var nombre;
var apellidoP;
var apellidoM;
var Fnacimiento;
var genero;
var curp;
var calleN;
var colonia;
var alcaldia;
var estado;
var CP;
var telefono;
var correo;
var flag = true;//flag que nos indicara si el form es vallido
var errores;

var anterior;

function validar(){
    usuario = document.getElementById("user").value;
    estado = document.getElementById("estado").value;
    errores = 0;

    validarNombre();
    validarApellidoP();
    validarApellidoM();
    validarFnacimiento();
    validargenero();
    validarCurp();
    validarCalleN();
    validarColonia();
    validarAlcaldia();
    validarCP();
    validarTelefono();
    validarCorreo();

    var texto = " Hola ,Verifica que los datos que ingresaste sean correctos:<br><br><strong>Nombre: </strong>"+nombre+"<br><strong>Apellido Paterno: </strong>"+apellidoP+"<br><strong>Apellido Materno: </strong>"+apellidoM+"<br><strong>Fecha de nacimiento: </strong>"+Fnacimiento+"<br><strong>Genero: </strong>"+genero+"<br><strong>CURP: </strong>"+curp+"<br><strong>Calle y número: </strong>"+calleN+"<br><strong>Colonia: </strong>"+colonia+"<br><strong>Alcaldia: </strong>"+alcaldia+"<br><strong>Estado: </strong>"+estado+"<br><strong>Codigo postal: </strong>"+CP+"<br><strong>Teléfono o celular: </strong>"+telefono+"<br><strong>Correo electrónico: </strong>"+correo+"<br>";
    alert(texto);

    if(errores == 0){
        //formulario valido
        aceptarCambios();
    }
    
}

function validarNombre(){
    //tamaño BD 30 caracteres
    nombre = document.getElementById("nombre_cliente").value;
    
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(nombre === null || nombre === "" ){
        alert("Por favor ingrese su nombre");
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

function validarApellidoP(){
    //tamaño BD 20 caracteres
    apellidoP = document.getElementById("primer_apellido").value;
    
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(apellidoP === null || apellidoP === "" ){
        alert("Por favor ingrese su apellido paterno");
        errores++;
        return false;
    }

    if(apellidoP.length > 20){
        alert("Error: la longitud máxima del apellido paterno es de 20 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(apellidoP)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el apellido paterno");
        errores++;
        return false;
    }
}

function validarApellidoM(){
    //tamaño BD 20 caracteres
    apellidoM = document.getElementById("segundo_apellido").value;
    
    var regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúñÑ]+$/g

    if(apellidoM === null || apellidoM === "" ){
        alert("Por favor ingrese su apellido materno");
        errores++;
        return false;
    }

    if(apellidoM.length > 20){
        alert("Error: la longitud máxima del apellido materno es de 20 caracteres y no se admiten espacios");
        errores++;
        return false;
    }

    if(regexLetras.test(apellidoM)){
        return true;
    }else{
        alert("No se admiten números ni caracteres especiales en el apellido materno");
        errores++;
        return false;
    } 
}

function validarFnacimiento(){

    Fnacimiento = document.getElementById("fecha_nacimiento").value;
    
    var ToDate = new Date();
    if(Fnacimiento === null || Fnacimiento === ""){
        alert("Por favor ingrese su fecha de nacimiento");
        errores++;
        return false;
    }

    if (new Date(Fnacimiento).getTime() < ToDate.getTime()) {
        //Su fecha es valida
        return true;
    }
    //Su fecha es invalida
    alert("Error: La fecha ingresada es invalida");
    errores++;
    return false;
}

function validargenero(){
    var hombre = document.getElementById("hombre");
    var mujer = document.getElementById("mujer");
    var noBinario = document.getElementById("no_binario");

    if(hombre.checked == false && mujer.checked == false && noBinario.checked == false){
        alert("Por favor seleccione su genero");
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

    if(noBinario.checked){
        genero = "No Binario";
        return true;
    }

}

function validarCurp(){
    //BD 18 caracteres 
    curp = document.getElementById("curp").value;
    
    if(curp === null || curp === "" ){
        alert("Por favor ingrese su CURP");
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

function validarCalleN(){
    //BD varchar 20
    calleN = document.getElementById("calle_num").value;
    

    if(calleN === null || calleN === "" ){
        alert("Por favor ingrese su calle y numero");
        errores++;
        return false;
    }

    if(calleN.length > 20){
        alert("Error: la longitud maxima de la calle y numero es de 20 caracteres");
        errores++;
        return false;
    }

    return true;
}

function validarColonia(){
    //BD varchar 30
    colonia = document.getElementById("colonia").value;

    if(colonia === null || colonia === "" ){
        alert("Por favor ingrese su colonia");
        errores++;
        return false;
    }

    if(colonia.length > 30){
        alert("Error: la longitud maxima de la colonia es de 30 caracteres");
        errores++;
        return false;
    }

    var regexFormato = /^[A-Za-zÁÉÍÓÚáéíóúñÑ ]+$/g;
    if(regexFormato.test(colonia)){
        return true;
    }else{
        errores++;
        alert("Error: no se admiten numeros ni caracteres especiales en la colonia");
        return false;
    }
}

function validarAlcaldia(){
    alcaldia = document.getElementById("municipio").value;
    
    if(alcaldia === "N"){
        alert("Seleccione una alcaldia");
        errores++;
        return false;
    }
    return true;
}

function validarCP(){
    //BD 5 caracteres
    CP = document.getElementById("codigo_postal").value;

    if(CP === null || CP === "" ){
        alert("Por favor ingrese su codigo postal");
        errores++;
        return false;
    }

    if(CP.length == 5){
        var regEx = /^[0-9]*$/;
        if(regEx.test(CP)){
            return true;
        }else{
            alert("Error: el codigo postal solo debe estar conformado por numeros");
            errores++;
            return false;
        }

    }else{
        alert("Error: la longitud maxima del codigo postal es de 5 caracteres");
        errores++;
        return false;
    }

}

function validarTelefono(){
    //BD varchar 10
    telefono = document.getElementById("telefono").value;

    if(telefono === null || telefono === "" ){
        alert("Por favor ingrese su teléfono");
        errores++;
        return false;
    }

    if(telefono.length > 10 || telefono.length < 10){
        alert("La longitud del número telefonico es de 10 digitos");
        errores++;
        return false;
    }

    var regExp = /^[0-9]*$/;

    if(regExp.test(telefono)){
        return true;
    }else{
        alert("El número telefonico solo admite digitos");
        errores++;
        return false;
    }
}

function validarCorreo(){
    //BD varchar 40
    correo = document.getElementById("correo").value;

    if(correo === null || correo === "" ){
        alert("Por favor ingrese su correo");
        errores++;
        return false;
    }

    if(correo.length > 40){
        alert("La longitud maxima del correo electrónico es de 40 caracteres");
        errores++;
        return false;
    }

    var correoExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    if(correoExp.test(correo)){
        return true;
    }else{
        alert("El formato de correo es incorrecto.");
        errores++;
        return false;
    }
}

function desplegarInfo(){

    var ventanaFormulario = document.querySelector(".form");
    var ventanaDatos = document.querySelector(".verInfo.off");
    ventanaDatos.classList.remove("off");
    ventanaFormulario.classList.add("off");
    
    var contenido = document.querySelector(".des");
    var texto = " Hola ,Verifica que los datos que ingresaste sean correctos:<br><br><strong>Nombre: </strong>"+nombre+"<br><strong>Apellido Paterno: </strong>"+apellidoP+"<br><strong>Apellido Materno: </strong>"+apellidoM+"<br><strong>Fecha de nacimiento: </strong>"+Fnacimiento+"<br><strong>Genero: </strong>"+genero+"<br><strong>CURP: </strong>"+curp+"<br><strong>Calle y número: </strong>"+calleN+"<br><strong>Colonia: </strong>"+colonia+"<br><strong>Alcaldia: </strong>"+alcaldia+"<br><strong>Estado: </strong>"+estado+"<br><strong>Codigo postal: </strong>"+CP+"<br><strong>Teléfono o celular: </strong>"+telefono+"<br><strong>Correo electrónico: </strong>"+correo+"<br>";

    contenido.innerHTML = texto;
}

function editarContenido(){
    var ventanaFormulario = document.querySelector(".form.off");
    var ventanaDatos = document.querySelector(".verInfo");

    ventanaFormulario.classList.remove("off");
    ventanaDatos.classList.add("off");
}

function aceptarCambios(){
    alert("../php/guardarDatos.php?nombre="+nombre+"&apeP="+apellidoP+"&apeM="+apellidoM+"&fecha="+Fnacimiento+"&genero="+genero+"&curp="+curp+"&calleN="+calleN+"&col="+colonia+"&alcaldia="+alcaldia+"&estado="+estado+"&cp="+CP+"&tel="+telefono+"&correo="+correo+"&user="+usuario);

    window.location.href ="../php/Guardar-Cliente.php?nombre="+nombre+"&apeP="+apellidoP+"&apeM="+apellidoM+"&fecha="+Fnacimiento+"&genero="+genero+"&curp="+curp+"&calleN="+calleN+"&col="+colonia+"&alcaldia="+alcaldia+"&estado="+estado+"&cp="+CP+"&tel="+telefono+"&correo="+correo+"&user="+usuario;
}