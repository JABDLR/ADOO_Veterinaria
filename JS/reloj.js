let ObtenerHora = () => {
    /*Indico donde se colocaran los datos*/
    let reloj = document.getElementById('reloj')
    let fec_Datos = document.getElementById('fec_Datos')

    /*Creo un objeto tipo Date() y obtengo los datos que necesito*/
    let fecha = new Date();
    let hora= fecha.getHours()
    let minutos = fecha.getMinutes()
    let segundos = fecha.getSeconds()
    let mes = fecha.getMonth()
    let dia = fecha.getDate()
    let año = fecha.getFullYear()

    /*Lista*/
    let meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    mes = meses[mes]
    let hr = (hora>12) ? hora-12 : hora
    let am = (hora<12)? 'AM' :'PM'

    /*Ajuste de formate */
    if(hora<10){hora='0'+hora}
    if(minutos<10){minutos='0'+ minutos}
    if(segundos<10){segundos='0'+ segundos}

    /*Coloco datos */
    reloj.textContent = `${hr}:${minutos}:${segundos}:${am}`
    fec_Datos.textContent = `${mes} ${dia} del ${año}`
}

/*Actualización de la función*/
setInterval(ObtenerHora,1000)