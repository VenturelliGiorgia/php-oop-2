<?php
require_once "./classes/Category.php";
require_once "./classes/Product.php";
require_once "./classes/Food.php";
require_once "./classes/Game.php";


$catCategory = new Category("Gatti");
$dogCategory = new Category("Cani", "fa-dog");

$products = [];

$products1 = new Product("cuccia", "https://picsum.photos/300", $catCategory, "29.99$", false);
$products2 = new Food("cibo in scatola", "https://picsum.photos/300", $catCategory, "1.5$", 250);
$products3 = new Game("palla", "https://picsum.photos/300", $dogCategory, "2.99$", ["plastica"]);
$products4 = new Game("tiragraffi", "https://picsum.photos/300", $catCategory, "30.99$", ["plastica", "cotone"]);
$products5 = new Product("spazzola", "https://picsum.photos/300", $catCategory, "24.99$");
$products6 = new Food("Crochette per gatti", "https://picsum.photos/300", $catCategory, "3.99$", "300");
$products7 = new Product("collare", "https://picsum.photos/300", $dogCategory, "5.50$");
$products8 = new Product("coperta", "https://picsum.photos/300", $dogCategory, "15$");

array_push($products, $products1, $products2, $products3, $products4, $products5, $products6, $products7, $products8);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center m-4">Petshop</h1>
        <div class="row g-3">
            <?php foreach ($products as $prodotto) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-img">
                            <img class="img-fluid" src=" <?php echo $prodotto->getImg() ?>" alt="">
                        </div>
                        <div class="p-2">
                            <span class="d-block">
                               Categoria: <i class="fa-solid  <?php echo $prodotto->getCategory()->getIcon(); ?> "></i>
                            </span>
                            <span class="d-block"><?php echo $prodotto->getName() ?></span>
                            <span class="fw-bold d-block"><?php echo $prodotto->getPrice() ?> </span>
                            <?php if (method_exists($prodotto, "getCalories")) {
                                echo "<span>Calorie: {$prodotto->getCalories()}</span>";
                            } ?>

                            <?php if (method_exists($prodotto, "getMaterials")) { ?>
                                <span>Materiali: <?php echo implode("<br> ", $prodotto->getMaterials()) ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</body>

</html>