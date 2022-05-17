/*Obtengo la dirección de los elemtos*/
const iconoMenu = document.getElementById('Boton-desplegable');
const menu = document.getElementById('menu-desplegable');
console.log("Si entro y icono Menu: " + iconoMenu + " ademas menu: " + menu);

/*Funcion con el metodo escucha */
iconoMenu.addEventListener('click', (e) => {

    // Alternamos estilos para el menu y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
});
