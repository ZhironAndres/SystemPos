const regeEx= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const nombre= document.getElementById("nombre");
const apellidos= document.getElementById("apellidos");
const password= document.getElementById("password");
const email= document.getElementById('email');
const error = document.getElementById('error');
const formulario = document.getElementById('formulario');
const confirmacion = document.getElementById('confirmacion');


formulario.addEventListener("submit",(e)=>{
 
    let warning ="";
    let entrar= false;
    error.innerHTML="";
    
    if(!regeEx.test(email.value)){       
        error.textContent = "El email no es valido"
        error.style.color = "red";
        email.style.border="1px solid red";
        swal("Algo salio mal!", "Tu email no es correcto!", "error");
        warning+=`Tu email no es valido <br />`;
        e.preventDefault();
        entrar=true;
        
    }
    
    else{
      
        email.style.border="1px solid #aaa";
    }
    if(password.value.length < 8) {
        warning+=`Intenta con una contraseña de mas de 8 caracteres  <br />`;
        password.style.border="1px solid red";
        swal("Tu contraseña tiene pocos caracteres!", "Por favor agrega más de 8 caracteres!", "error");
       e.preventDefault();
       entrar= true;
    }  
    
    if(confirmacion.value === password.value && confirmacion.value.length === password.value.length){ 
        swal("tu contraseña coincide!", "la contraseñas son iguales!", "success");
        confirmacion.style.border="1px solid #aaa";
        password.style.border="1px solid #aaa";
        
        
        }
    else{
        swal("Tu contraseña no coincide!", "La contraseñas no son iguales!", "error");
        password.style.border="1px solid red";
        confirmacion.style.border="1px solid red";
        warning+= `La contraseña no coincide!  <br />`;
        e.preventDefault();
        entrar= true; 
    }
         
    if(entrar){
        error.innerHTML = warning;
    }
    else{
        error.innerHTML = "El formulario se ha enviado";
        swal("Exitoso", "El usuario ha sido registrado!", "success");
        password.style.border="1px solid #aaa";
        
         }
});

