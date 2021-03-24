<?php include 'includes/header.php';


//conectar a la base de datos Mysqli

$db = new mysqli('localhost', 'root', '', 'bienes_raices');

//creamos el query
$query = "SELECT titulo, imagen from propiedades";

// lo preparamos
$stmt = $db->prepare($query);

//lo ejecutamos
$stmt->execute();

//creamos la variable
$stmt->bind_result($titulo, $imagen);

//asignamos el resultado
// imprimimos resultados
while ($stmt->fetch()) :
    var_dump($titulo);
    var_dump($imagen);
endwhile;

include 'includes/footer.php';
