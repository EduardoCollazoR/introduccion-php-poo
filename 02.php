<?php

declare(strict_types=1);
include 'includes/header.php';


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


//encapsulamiento
//definir clase en php 8
class Producto
{
    //Public se puede acceder y modificar en cualquier lugar(clase y objeto)
    //protected se puede acceder/modificar unicamente en la clase
    //private solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(): void
    {
        echo 'El producto es: ' . $this->nombre . 'y su es precio es ' . $this->precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre)
    {
        return $this->nombre = $nombre;
    }
}


$producto = new Producto('Tablet', 200, true);

// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true);

// $producto2->mostrarProducto();
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';
