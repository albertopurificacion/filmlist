function validarFormulario() {
    
    var usuario=document.formulario.campoUsuario.value;
    var password=document.formulario.campoPass.value;
    var passConfirm=document.formulario.campoPassConfirm.value;
    var email=document.formulario.campoEmail.value;

    var valido=validar(usuario,password,passConfirm,email);
    var long=longitud(usuario,password,passConfirm,email);
    
    
    if (valido==true && long==true) {
        document.getElementById("error").innerHTML="";
        return true;
    }else {
        document.getElementById("error").innerHTML="Formulario no valido";
        return false;       
    }
}


function longitud(usuario,password,passConfirm,email) {
    if (usuario.length>3 && usuario.length<50 && password.length>=8 && passConfirm.length>=8 && email.indexOf("@")!=-1) {
        return true;
    } else {
        return false;
    }
}

function confirmacionPass() {
    var password=document.formulario.campoPass.value;
    var passConfirm=document.formulario.campoPassConfirm.value;
    if (password==passConfirm) {
        document.getElementById("confirmacion").innerHTML="Contraseña correcta";
    }else {
        document.getElementById("confirmacion").innerHTML="La contraseña debe coincidir";
    }
}


function validar(usuario,password,passConfirm,email){

    if (usuario.length==0 || password.length==0 || passConfirm.length==0 || password!=passConfirm || email==0) {
        return false;
    }else {
        return true;}
    }

