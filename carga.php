<?php
/*
echo $_FILES["fichero"]["name"]."<br>";
echo $_FILES["fichero"]["tmp_name"] . "<br>";
echo $_FILES["fichero"]["type"] . "<br>";
echo $_FILES["fichero"]["error"] . "<br>";
echo $_FILES["fichero"]["size"] . "<br>";
*/
//Limita el tipo de archivo a subir
if(mime_content_type($_FILES["fichero"]["tmp_name"])!="image/jpeg" && mime_content_type($_FILES["fichero"]["tmp_name"])!="image/png"){
    echo "Tipo de fichero no admitido";
    exit();
}

//Limita la carga de archivos que no cumplan con el tamaño especificado
if(($_FILES["fichero"]["size"]/1024 > 3072)){
    echo "El archivo supera el peso permitido";
    exit();
}

//Crea la carpeta donde se va a colocar el archivo a subir
if(!file_exists("archivos")){
    if(!mkdir("archivos", 0777 )){
        echo "Error al crear el directotio";
        exit();
    }
}
chmod("archivos",0777);

//Carga el archivo en la ubicación que especificquemos
if(move_uploaded_file($_FILES["fichero"]["tmp_name"], "archivos/".$_FILES["fichero"]["name"])){
    echo "Archivo subido con exito";
}else{
    echo "Error al subir el archivo";
}


?>