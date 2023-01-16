<?php
require_once "./classes/Category.php";
require_once "./classes/Product.php";

$products = [];

$products1 = new Product("cuccia", "https://picsum.photos/300", "cuccia rettangolare in cotone", "letto", "29.99$");
$products2 = new Product("umido", "https://picsum.photos/300", "cibo in scatola per cani", "cibo", "2.99$");
$products3 = new Product("palla", "https://picsum.photos/300", "cuccia rettangolare in cotone", "gioco", "3.50$");
$products4 = new Product("tiragraffi", "https://picsum.photos/300", "tiragraffi per gatti", "gioco", "30.99$");
$products5 = new Product("spazzola", "https://picsum.photos/300", "spazzola per animali", "cura e benessere", "24.99$");
$products6 = new Product("erba gatta", "https://picsum.photos/300", " ", "cura e benessere", "6.99$");
$products7 = new Product("collare", "https://picsum.photos/300", " collari per cani e catti", "accessori", "5.50$");
$products8 = new Product("coperta", "https://picsum.photos/300", "coperta in pile", "cura e benessere", "15$");

array_push($products, $products1, $products2, $products3, $products4, $products5, $products6, $products7, $products8);
