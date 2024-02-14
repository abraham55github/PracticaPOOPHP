<?php include 'includes/header.php';


//conectar a la bd con mysqli

$db = new mysqli('localhost', 'root', '1234', 'bienesraices_crud');
 
//creamos el query
$query = "SELECT titulo FROM propiedades";
//sentencias preparads para POO php
$stmt = $db->prepare($query);

//lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($titulo);

// asignamos el resultado
$stmt->fetch();

//imprimir los resultados



while($stmt->fetch()):
    var_dump($titulo);
endwhile;
/* $resultado = $db->query($query);

while($row = $resultado->fetch_assoc()):
    var_dump($row);
endwhile;
 */
include 'includes/footer.php';