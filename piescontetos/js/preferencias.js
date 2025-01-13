
// Función para guardar las preferencias del usuario en localStorage
function guardarPreferencias() {
  var nombre = document.getElementById("nombre").value; 
  var color = document.getElementById("color").value;
  var fontSize = document.getElementById("fontSize").value;

  // Se guarda en localStorage
  localStorage.setItem("nombre", nombre)
  localStorage.setItem("color", color);
  localStorage.setItem("fontSize", fontSize);

  alert("Preferencias guardadas correctamente.");
}

// Función para cargar las preferencias del usuario desde localStorage
function cargarPreferencias() {
  var nombre = localStorage.getItem("nombre"); 
  var color = localStorage.getItem("color");
  var fontSize = localStorage.getItem("fontSize");

  // Si se encuentran preferencias guardadas, se aplican
  if (nombre && color && fontSize) {
    document.body.style.backgroundColor = color;
    document.body.style.fontSize = fontSize;
    document.getElementById("color").value = color;
    document.getElementById("fontSize").value = fontSize;
    document.getElementById("nombre").value = nombre;

    /* Mostrar el nombre del usuario  */
    var div_nombre = 
    document.getElementById("div_nombre");
    div_nombre.innerHTML = "Bienvenido usuario " + 
             nombre;
  }
}

// Se llama a la función para cargar las preferencias cuando se carga la página
window.onload = cargarPreferencias;