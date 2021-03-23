<?php include 'includes/header.php';

declare(strict_types=1);
// definir una clase php < 7 V
// class Producto
// {
//     public $nombre;
//     public $precio;
//     public $disponible;

//     public function __construct(string $nombre, int $precio, bool $disponible)
//     {
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
//     }
// }



//definir clase en php 8
class Producto
{
    //abstraccion
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto()
    {
        echo 'El producto es: ' . $this->nombre . 'y su es precio es ' . $this->precio;
    }
}


$producto = new Producto('Tablet', 200, true);

$producto->mostrarProducto();



echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true);

$producto2->mostrarProducto();
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
