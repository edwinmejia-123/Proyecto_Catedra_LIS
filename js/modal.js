var titulo, precio, id;

$(".enlace").on("click", function () {
  id = $(this).val();
  console.log(id);
  var modal_imagen = "";
  var img;
  titulo = document.getElementById(id).getElementsByClassName("titulo").item(0)
    .textContent;
  precio = document.getElementById(id).getElementsByClassName("precio").item(0)
    .textContent;
  img = document
    .getElementById(id)
    .getElementsByClassName("imagen")
    .item(0)
    .getAttribute("src");
  modal_imagen += '<img src="' + img + '" alt="" class="imagen_modal"></img>';
  document.getElementById("modal-img").innerHTML = modal_imagen;
  document.getElementById("titulo").innerHTML = titulo;
  document.getElementById("precio").innerHTML = precio;
});
