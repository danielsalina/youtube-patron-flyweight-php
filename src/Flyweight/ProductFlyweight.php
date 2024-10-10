<?php

// Esta clase manejará los datos que son compartidos entre varios productos, como la imagen, la categoría y la descripción.

namespace Flyweight;

class ProductFlyweight
{
  public function __construct(private string $category, private string $description, private string $image){}

  public function display(string $productName, float $price): void
  {
      echo "Producto: $productName\n";
      echo "Categoría: $this->category\n";
      echo "Descripción: $this->description\n";
      echo "Imagen: $this->image\n";
      echo "Precio: $price\n\n";
  }
}
