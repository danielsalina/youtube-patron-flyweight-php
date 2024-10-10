<?php

require_once 'vendor/autoload.php';

use Flyweight\ProductFlyweightFactory;

// Crear la fábrica de Flyweight
$flyweightFactory = new ProductFlyweightFactory();

// Productos de ejemplo
$flyweight1 = $flyweightFactory->getFlyweight('Electronics', 'High-end laptop', 'laptop.jpg');
$flyweight1->display('Laptop', 1200);

$flyweight2 = $flyweightFactory->getFlyweight('Electronics', 'High-end laptop', 'laptop.jpg');
$flyweight2->display('Gaming Laptop', 1500);

$flyweight3 = $flyweightFactory->getFlyweight('Appliances', 'Powerful vacuum cleaner', 'vacuum.jpg');
$flyweight3->display('Vacuum Cleaner', 200);

// Mostrar cuántos Flyweights fueron creados
echo "Total de Flyweights creados: " . $flyweightFactory->getTotalFlyweights() . "\n";
