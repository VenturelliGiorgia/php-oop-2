<?php
require_once "./classes/Category.php";
require_once "./classes/Product.php";
require_once "Products.php";
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
                            <span> <?php echo $prodotti->getType() ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>