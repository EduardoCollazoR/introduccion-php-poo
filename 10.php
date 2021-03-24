<?php include 'includes/header.php';

//conectar ala base de datos con pdo

$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', '');


//creamos el query
$query = "SELECT titulo from propiedades";

//consultar la bd
// $propiedades = $db->query($query)->fetch();
// lo preparamos
$stmt = $db->prepare($query);
//lo ejecutamos
$stmt->execute();

//obtener resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
//iterar
foreach ($resultado as $propiedad) :
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;
// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

include 'includes/footer.php';
