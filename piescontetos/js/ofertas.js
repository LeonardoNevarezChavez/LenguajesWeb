/* Se  muestra una oferta aleatoria, de 4 opciones  */

function generar_oferta(){
    /* Obtener un número aleatorio entre 0..3  */
    let numero = Math.floor(Math.random() * 4);
    // alert("Número: " + numero);

    const textos_ofertas = [
        "Sandalias para dama con 10% de descuento",
        "Bota de excursión para niñ@s con 15% de descuento",
        "Tenis Nike talla de 28 o más con 17% de descuento",
        "Productos de limpieza para calzado gratis en la compra mínima de $300"
    ];

    const recursos_imagen = [
        "../imagenes/77817-negro-lateral.avif",
        "../imagenes/88515-negro-lateral.avif",
        "../imagenes/88515-negro-lateral.jpg",
        "../imagenes/410904-chocolate-lateral.avif",

    ];

    /* Acceder al elemento div para texto del producto */
    let div_texto1 = document.getElementById("div_texto");
    div_texto1.innerHTML = textos_ofertas[numero];

    /* Acceder al elemento imagen para modificar
    atributo "src"  */
    let imagen_aleatoria1 = document.getElementById("imagen_aleatoria");
    imagen_aleatoria1.src = recursos_imagen[numero];
}
