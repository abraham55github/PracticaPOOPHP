<?php include 'includes/header.php';
//conectar a la bd con poo

$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', '1234');

$query = "SELECT titulo FROM propiedades";

//consultar la bd 
/* $propiedades = $db->query($query)->fetchColumn(); */

$stmt = $db->prepare($query);

$stmt->execute();

$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC);

foreach($resultado as $propiedad):
    echo $propiedad['titulo'];

endforeach;

/* echo "<pre>";
var_dump($resultado);
echo "</pre>"; */

include 'includes/footer.php';