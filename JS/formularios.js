function mayus(e) {
    e.value = e.value.toUpperCase();
}

function validarRegistro() {
    if ((!document.querySelector('input[name="genero"]:checked')))
        alert('Revise que todos los campos han sido completados');
    //e.preventDefault();    
}

function validarEdicion(){
    if ((!document.querySelector('input[name="genero"]:checked')))
        alert('Revise que todos los campos han sido completados');
}
function validarCambio(){
    if(curp_actual.value=="" || curp_nuevo.value==""){
        alert('Complete los campos');
        event.preventDefault();
    }
    else if(curp_actual.value==curp_nuevo.value){
        alert('Ha ingresado el mismo curp');
        event.preventDefault();
    }
    else if(curp_actual.value.length!=18 || curp_nuevo.value.lenght!=18){
        alert('El curp no tiene el formato correcto');
        event.preventDefault();
    }
    else{
        if (!confirm('¿Desea guardar los cambios?')){
            event.preventDefault();
        }
    }
}
window.onload = function () {

    let $regreso = document.getElementById('regresar');
    $regreso.addEventListener('click', confirmaRegreso);

    function confirmaRegreso() {
        if (!confirm('¿Está seguro?')) {
            event.preventDefault();
        }


    }

    let $limpieza = document.getElementById('boton_limpiar');
    $limpieza.addEventListener('click', confirmaLimpieza);
    function confirmaLimpieza() {
        if (!confirm('¿Está seguro?')) {
            event.preventDefault();
        }
    }
}