<?php
include_once 'form.html';
include_once 'class/ProdVegetables.php';

$pr = new Product(1);
echo 'ProductType:';
echo $pr->getName();
echo '<br>';

$pr->id = 1;
echo 'ProductArt:';
echo $pr->getArt();
echo '<br>';

$w = new Product(2);
echo 'ProductType:';
echo $w->getName();
echo '<br>';

$w->id = 3;
echo 'ProductArt:';
echo $w->getArt();
echo '<br>';


echo 'ProductArt:';
echo $pr->getArt();
echo '<br>';

$e = new ProdVegetables(1);

echo 'ProducVegetArt:';
echo $e->getName();
echo '<br>';





/*

echo $pr->name;
echo '<br>';
echo '<br>';
echo '<br>';

$er = ProductType::random();
echo $er;
$h = ProductType::$hjkk;
echo '<br>';
echo $h;




/*
$product = new Product(1);
var_dump($product->getName());

$product->id=2;
var_dump($product->getName());
