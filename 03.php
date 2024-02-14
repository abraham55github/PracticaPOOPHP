<?php include 'includes/header.php';

 //definir una clase
 
 class Producto {

    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    //constructor forma nueva
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            $imagenPlaceholder= $imagen;
        }
    }

    public static function obtenerImagenProducto(){
       return self::$imagenPlaceholder;
    }

    public function mostrarProducto(): void{
        echo "el producto es :". $this->nombre . " y su precio es de: ". $this->precio;
    }
    
    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre( string $nombre){
        $this->nombre = $nombre;
    }





 };

 echo Producto :: obtenerImagenProducto();



 $producto = new Producto('Monitor normal', 200, true);
/*  $producto->mostrarProducto(); */
    echo $producto->getNombre();
    $producto->setNombre('nuevo nombre');


 /* echo $producto->nombre; */

    echo "<pre>";
    var_dump($producto);
    echo "</pre>";

 $producto2 = new Producto('Monitor curvo', 400, false);
/*  $producto2->mostrarProducto(); */
echo $producto2->getNombre();

/*  echo "<pre>";
    var_dump($producto2);
    echo "</pre>"; */

include 'includes/footer.php';