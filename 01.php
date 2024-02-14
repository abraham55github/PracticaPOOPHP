<?php include 'includes/header.php';

 //definir una clase
 
 class Producto {
    //forma anterior
/*  public $nombre;
    public $precio;
    public $disponible; */

    //constructor forma anterior
/*  public function __construct( string $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    } */


    //constructor forma nueva
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(){
        echo "el producto es :". $this->nombre . " y su precio es de: ". $this->precio;
    }


 };




 $producto = new Producto('Monitor normal', 200, true);
 $producto->mostrarProducto();


    echo "<pre>";
    var_dump($producto);
    echo "</pre>";

 $producto2 = new Producto('Monitor curvo', 400, false);
 $producto2->mostrarProducto();
 

    echo "<pre>";
    var_dump($producto2);
    echo "</pre>";

include 'includes/footer.php';