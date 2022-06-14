function mayus(e) {
    e.value = e.value.toUpperCase();
}

function validarRegistro() {
    if ((!document.querySelector('input[name="genero"]:checked')))
        alert('Revise que todos los campos han sido completados');
    //e.preventDefault();    
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