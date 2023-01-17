<?php
require_once "./classes/Category.php";
require_once "./classes/Product.php";

$catCategory = new Category("Gatti");
$dogCategory = new Category("Cani", "fa-dog");
echo $catCategory->getIconHTML();
$products = [];

$products0 = new Product("cuccia", "https://picsum.photos/300", $catCategory, "29.99$", false);
$products2 = new Product("cibo in scatola", "https://picsum.photos/300", "cibo", "2.99$");
$products3 = new Product("palla", "https://picsum.photos/300", "gioco", "3.50$");
$products4 = new Product("tiragraffi", "https://picsum.photos/300", "gioco", "30.99$");
$products5 = new Product("spazzola", "https://picsum.photos/300", "cura e benessere", "24.99$");
$products6 = new Product("erba gatta", "https://picsum.photos/300", "cura e benessere", "6.99$");
$products7 = new Product("collare", "https://picsum.photos/300", "accessori", "5.50$");
$products8 = new Product("coperta", "https://picsum.photos/300", "cura e benessere", "15$");
var_dump($products0);
array_push($products, $products2, $products3, $products4, $products5, $products6, $products7, $products8);

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
            <?php foreach ($products as $prodotti) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-img">
                            <img class="img-fluid" src=" <?php echo $prodotti->getImg() ?>" alt="">
                        </div>
                        <div class="p-2">
                            <span class="d-block"> <?php echo $prodotti->getName() ?></span>
                            <span class="fw-bold d-block"> <?php echo $prodotti->getPrice() ?></span>
                            <span> <?php echo $prodotti->getCategory() ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>