<?php
include_once __DIR__ . '/data/index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>

     <!-- Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <header class="bg-warning text-white text-center mb-5 p-5">
         <h1>Pet Shop - Products</h1>
     </header>

    <!-- Food -->
    <h2 class="text-center mb-3 fw-bold">FOOD</h2>
    <section id="food" class="container">
        <div class="row">
           <?php foreach($foods as $food) : ?>
            <div class="col-6">
                <div class="card mb-3">
                    <img src="<?=$food->picture?> "class="card-img-top" alt="<?=$food->description?>">
                    <div class="card-body">
                        <div class="card-title"><strong><?=$food->description?></strong></div>
                        <p class="card-text">Per <strong><?=$food->category->name?></strong></p>
                        <p class="card-text">Marca: <strong><?=$food->brand?></strong></p>
                        <p class="card-text">Gusto: <strong><?=$food->ingredients?></strong></p>
                        <p class="card-text"><strong><?=$food->weight?></strong></p>
                    </div>
                </div>
            </div> 
          <?php endforeach; ?>   
        </div>
    </section>

    <!-- Beds -->
    <h2 class="text-center mb-3 fw-bold">BEDS</h2>
    <section id="beds" class="container">
        <div class="row">
           <?php foreach($beds as $bed) : ?>
            <div class="col-6">
                <div class="card mb-3">
                    <img src="<?=$bed->picture?> "class="card-img-top" alt="<?=$bed->description?>">
                    <div class="card-body">
                        <div class="card-title"><strong><?=$bed->description?></strong></div>
                        <p class="card-text">Per <strong><?=$bed->category->name?></strong></p>
                        <p class="card-text">Size: <strong><?=$bed->size?></strong></p>
                        <p class="card-text">Peso: <strong><?=$bed->weight?></strong></p>
                        <p class="card-text"><strong><?=$bed->price?></strong></p>
                    </div>
                </div>
            </div> 
          <?php endforeach; ?>   
        </div>
    </section>

    <!-- Games -->
    <h2 class="text-center mb-3 fw-bold">GAMES</h2>
    <section id="games" class="container">
        <div class="row">
           <?php foreach($games as $game) : ?>
            <div class="col-6">
                <div class="card mb-3">
                    <img src="<?=$game->picture?> "class="card-img-top" alt="<?=$game->description?>">
                    <div class="card-body">
                        <div class="card-title"><strong><?=$game->description?></strong></div>
                        <p class="card-text">Per <strong><?=$game->category->name?></strong></p>
                        <p class="card-text">Peso: <strong><?=$game->size?></strong></p>
                        <p class="card-text">in <strong><?=$game->material?></strong></p>
                        <p class="card-text"><strong><?=$game->price?></strong></p>
                    </div>
                </div>
            </div> 
          <?php endforeach; ?>   
        </div>
    </section>
</body>
</html>