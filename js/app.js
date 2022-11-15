var txtUsu=document.getElementById('txtUsu');
var txtPass = document.getElementById('txtPass');
var error= document.getElementById('error');
error.style.color='red';
function enviarFormulario(){
  console.log('enviando formulario..');

    var mensajeError=[];
    if(txtUsu.value===null || txtUsu.value===''){
      mensajeError.push('ingrese su usuario');
    }
    if(txtPass.value===null || txtPass.value===''){
      mensajeError.push('ingrese su contraseña');
    }
   error.innerHTML= mensajeError.join(',');
  return false;
}

