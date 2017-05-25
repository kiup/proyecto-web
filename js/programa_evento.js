/**
 * Created by angel on 23/05/2017.
 */

function cambiarMenu(menu) {
    if (menu == null){
        menu = "conferencias";
    }
    switch (menu) {
        case 'seminario':
            document.getElementById("div-seminario").style.display = "block";
            document.getElementById("div-conferencias").style.display = "none";
            document.getElementById("div-talleres").style.display = "none";

            document.getElementById("conferencias").className = "";
            document.getElementById("talleres").className = "";
            document.getElementById("seminario").className = "activo";
            break;
        case 'conferencias':
            document.getElementById("div-conferencias").style.display = "block";
            document.getElementById("div-seminario").style.display = "none";
            document.getElementById("div-talleres").style.display = "none";

            document.getElementById("seminario").className = "";
            document.getElementById("talleres").className = "";
            document.getElementById("conferencias").className = "activo";
            break;
        case 'talleres':
            document.getElementById("div-talleres").style.display = "block";
            document.getElementById("div-seminario").style.display = "none";
            document.getElementById("div-conferencias").style.display = "none";

            document.getElementById("seminario").className = "";
            document.getElementById("conferencias").className = "";
            document.getElementById("talleres").className = "activo";
            break;
    }
}
window.onload = cambiarMenu;
