const formularios_ajax=document.querySelectorAll(".FormularioAjax"); //1. Seleccionamos todos los elementos del DOM que tenga la clase "FormularioAjax"

//3. Creamos el evento que se desencadenar cuando asignamos el eventlistener a los formularios
function enviar_formulario_ajax(e){
    e.preventDefault(); //Hace que ya no se redirecciones al archivo que le hemos asignado en html, "carga.php".

    let enviar =confirm("¿Estas seguro que quieres enviar el formulario?"); //Aviso para confirmar si quieren enviar formulario

    if(enviar==true){
        //Código ajax para realizar el envio de los datos del formulario
        let data=new FormData(this);//Variable que va a alamacenar todos los datos que venga en el formulario.
        let method=this.getAttribute("method"); //Recupera el método con else nos va aenvia la información.
        let action= this.getAttribute("action")//Recupera la ruta donde vamos a colocar el archivo.

        let headers=new Headers();//Varaible que va a recibir los encabezados
        let config={ //Array que alamacena todas las configuraciones
            method:method,
            headers:headers,
            mode:"cors",
            cache: "no-cache",
            body: data
        };

        fetch(action, config)
        .then(respuesta=>respuesta.text())
        .then(respuesta=>{ 
            alert(respuesta)
        });


    }

}



//Colocamos un evento para todos los formularios que tengan la clase "FormularioAjax"
formularios_ajax.forEach(formulario=>{
    formulario.addEventListener("submit", enviar_formulario_ajax);
});
