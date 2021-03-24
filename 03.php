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


//Metodos estaticos
//definir clase en php 8
class Producto
{

    public $imagen;

    public static $imagenPlaceHolder = "imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if ($imagen) {
            self::$imagenPlaceHolder = $imagen;
        }
    }
    public static function obtenerImagenProducto()
    {
        return self::$imagenPlaceHolder;
    }
    public static function obtenerProducto()
    {
        echo "obteniendo datos del producto...";
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





$producto = new Producto('Tablet', 200, true, '');

// $producto->mostrarProducto();

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor', 300, true, 'monitorcurvo.jpg');
echo $producto2->obtenerProducto();

// $producto2->mostrarProducto();
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';
