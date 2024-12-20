<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <!--<div>
            <label for="nombre"> Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br> -->

        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matemàticas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>

        </select>

        <br><br>

        <label for="option-1">
            <input type="checkbox" value="Manzana" id="option-1" name="frutas[]">
            Manzana
        </label>

        <label for="option-2">
            <input type="checkbox" value="Fresa" id="option-2" name="frutas[]">
            Fresa
        </label>

        <label for="option-3">
            <input type="checkbox" value="Uva" id="option-3" name="frutas[]">
            Uva
        </label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>

</html>