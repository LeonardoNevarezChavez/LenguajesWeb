/* Código para mostrar un reloj con la hora local:   */

function obtener_hora(){
   let fecha_hora = Date();

   /* Acceder al elemento div para hora  */
   let div_hora1 = document.getElementById("div_reloj");

   div_hora1.innerHTML = "Hora local: " + fecha_hora;

   /* Actualizar reloj cada segundo */
   let repetir = setTimeout("obtener_hora()", 1000);
}