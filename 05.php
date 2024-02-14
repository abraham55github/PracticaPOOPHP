<?php include 'includes/header.php';



abstract class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }
    public function getInfo() : string {
        return "El transporte tiene ". $this->ruedas . " rueda y una capacidad de ". $this->capacidad . " Personas ";    
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }

}


class Bicicleta extends Transporte {

    public function getInfo() : string {
        return "El transporte tiene ". $this->ruedas . " ruedas y una capacidad de ". $this->capacidad . " Personas y no necesita combustibles";    
    }

}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {

    }

    /*  public function getTransmision() : string {
        return $this->transmision;
    } */

    public function getInfo() : string {
        return "El transporte tiene ". $this->ruedas . " ruedas y una capacidad de ". $this->capacidad . " Personas y tiene transmision ". $this->transmision;
    }
}

$transporte = new Transporte(1, 3);
echo $transporte->getInfo();

echo '<hr>';

$bicicleta = new Bicicleta(2, 1);
$automovil = new Automovil(4, 6, 'Manual');
echo $bicicleta->getInfo();
echo '<hr>';
echo $automovil->getInfo();



include 'includes/footer.php';