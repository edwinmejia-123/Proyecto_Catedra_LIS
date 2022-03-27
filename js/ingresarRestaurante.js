let agregar = document.querySelector ('#agregar_red_social');
let mostrar_redes = document.querySelector('#mostrar_redes_sociales');
let redes_sociales = document.querySelector('#redes_sociales');
let eliminar_redes_sociales = document.querySelectorAll('#eliminar_red_social');
let txb_red_social = document.querySelector('#red_social');
agregar.addEventListener('click',()=>{
  mostrar_redes.innerHTML +=`<div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <p class="input-group-text">${redes_sociales.options[redes_sociales.selectedIndex].value}</p>
                            </div>
                            <input type="text" readonly name='${redes_sociales.options[redes_sociales.selectedIndex].value}' id="red_social" class="form-control" value="${txb_red_social.value}">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-danger" id='eliminar_red_social'>-</button>
                            </div>
                        </div>`;
eliminar_redes_sociales = document.querySelectorAll('#eliminar_red_social');
botonesEliminar();
})

function botonesEliminar(){
  for (let eliminar_red_social of eliminar_redes_sociales){
    console.log(eliminar_red_social)
    eliminar_red_social.addEventListener('click',function (){
      this.parentNode.parentNode.remove();
  });
}
}