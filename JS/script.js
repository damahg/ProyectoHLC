var icono = document.getElementById('cambiarModo');
var fondo = document.getElementById("myBody");

function cambiarModoOscuro(){
    //Cambiar a modo oscuro
    fondo.style.backgroundColor = "black";
    fondo.style.color = "white";
}

function cambiarModoClaro(){
    //Cambiar colores
    fondo.style.backgroundColor = "white";
    fondo.style.color = "black";
}
