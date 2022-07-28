function Login(document.getElementById('submit')){

 var nombre= document.getElementsByName('usuario').value;
 var contraseña= document.getElementsByName('clave').value;
 var tipou= document.getElementsByName('TipoU').value;
 if (contraseña=="123456" && nombre=="Alexandra" && tipou=="AdminAcademico"){ 	
  	alert("Bienvenido a nuestro sistema académico");
  	
}
  
  else {	
  alert("No has podido ingresar,verifica tus datos.");
  }
  window.close("iniciar sesion.html");

}

if (Username=="" || Password=="") {
		alert("todos los campos son obligatorios");
	}

	else if (Username=="andres" && Password=="123456") {
		document.write(A); 
	}

	else {
		alert("usuario o contraseña incorrectos");
	}