<?php

// La fábrica gestiona las instancias compartidas de ProductFlyweight. Si una instancia ya existe para una combinación de categoría, descripción e imagen, la fábrica devuelve esa instancia en lugar de crear una nueva.

namespace Flyweight;

class ProductFlyweightFactory
{
    private $flyweights = [];

    public function getFlyweight(string $category, string $description, string $image): ProductFlyweight
    {
        $key = md5($category . $description . $image);

        if (!isset($this->flyweights[$key])) {
            echo "Creando nuevo Flyweight para la categoría: $category\n";
            $this->flyweights[$key] = new ProductFlyweight($category, $description, $image);
        } else {
            echo "Reutilizando Flyweight existente para la categoría: $category\n";
        }

        return $this->flyweights[$key];
    }

    public function getTotalFlyweights(): int
    {
        return count($this->flyweights);
    }
}
