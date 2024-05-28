/*
-------------
Javascript personalizado
-------------
*/

/* Cambio fuente texto barra de busqueda */
document.addEventListener('DOMContentLoaded', function(){
    const searchform = document.getElementById('search');

    searchform.addEventListener('input', function(){
        if (searchform.value.length <= 0) {
            searchform.classList.remove('mplusr1c', 'mplusr1c--contenida');
            searchform.classList.add('fa-solid', 'fa-magnifying-glass'); 
        } else {
            searchform.classList.remove('fa-solid', 'fa-magnifying-glass');
            searchform.classList.add('mplusr1c', 'mplusr1c--contenida'); 
        }
    });
});

/* Randomizador de paleta de colores */

window.addEventListener("load", function() {
    //Definimos paletas
    const paletas = [
        {primario:'#EE7674', secundario: '#EDB2B1', terciario: '#FACECD'},
        {primario:'#68B0AB', secundario: '#95CBC7', terciario: '#BBDDDB'},
        {primario:'#589D7D', secundario: '#8FC0A9', terciario: '#B1D3C3'},
        {primario:'#F4C766', secundario: '#F5DEAD', terciario: '#F8E9C9'}
    ];

    //Randomizamos
    const random = Math.floor(Math.random()* paletas.length);
    const paletaSeleccionada = paletas[random];

    //Modificamos las variables
    document.documentElement.style.setProperty('--palette-main-color', paletaSeleccionada.primario);
    document.documentElement.style.setProperty('--palette-secondary-color', paletaSeleccionada.secundario);
    document.documentElement.style.setProperty('--palette-tertiary-color', paletaSeleccionada.terciario);

});