<?php include 'includes/header.php';


require 'vendor/autoload.php';
/* require 'clases/Clientes.php';
require 'clases/Detalles.php'; */

//incluir las otras clases

use App\Clientes;
use App\Detalles;

$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();
echo "<br>";

/* function mi_autoload($clase){
    echo $clase;
    
    $partes = explode('\\', $clase);

    echo "<br>";
    require __DIR__ . '/clases/' . $partes[1] . ".php";
}

spl_autoload_register('mi_autoload'); */

/* class Clientes {
    public function __construct()
    {
        echo "Desde 08.php que contiene los clientes";
    }
}
 */


/* $clientes2 = new Clientes(); */


include 'includes/footer.php';