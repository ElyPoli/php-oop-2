<?php
// Includo i file db con i dati delle istanze
include_once __DIR__ . '/db/foods_db.php';
include_once __DIR__ . '/db/game_db.php';
include_once __DIR__ . '/db/pet_bed_db.php';
include_once __DIR__ . '/db/pet_bed_db.php';
include_once __DIR__ . '/models/category/Cat.php';
include_once __DIR__ . '/models/category/Dog.php';

// Creo le istanze della classe "food"
$foodsList = array_map(function ($singleFood) {
    $food = new Food($singleFood['expiration'], $singleFood['name'], $singleFood['category'],);
    $food->setTypology($singleFood['typology']);
    $food->setImg($singleFood['img']);
    $food->setAllergensy($singleFood['allergens']);
    $food->setPrice($singleFood['price']);

    return $food;
}, $rawFoodsList);

// Creo le istanze della classe "game"
$gamesList = array_map(function ($singleGame) {
    $game = new Game($singleGame['material'], $singleGame['noise'], $singleGame['name'], $singleGame['category'],);
    $game->setColor($singleGame['color']);
    $game->setImg($singleGame['img']);
    $game->setResistant($singleGame['resistant']);
    $game->setPrice($singleGame['price']);

    return $game;
}, $rawGamesList);

// Creo le istanze della classe "pet bed"
$petBedsList = array_map(function ($singlePetBed) {
    $petBed = new PetBed($singlePetBed['material'], $singlePetBed['easyCleaning'], $singlePetBed['name'], $singlePetBed['category'],);
    $petBed->setColor($singlePetBed['color']);
    $petBed->setImg($singlePetBed['img']);
    $petBed->setComfort($singlePetBed['comfort']);
    $petBed->setShape($singlePetBed['shape']);
    $petBed->setPrice($singlePetBed['price']);

    return $petBed;
}, $rawPetBedsList);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 52: PHP OOP 2</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/icon-logo.png">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="bg-primary">
        <div class="container pt-5 pb-5">
            <h1 class="text-center text-uppercase text-white pt-2">Animal products</h1>
            <!-- Sezione cibo -->
            <div class="pt-3">
                <h3 class="text-white fst-italic">Foods</h3>
                <div class="row row-cols-3 row-cols-md-4 justify-content-center gy-4">
                    <?php foreach ($foodsList as $food) { ?>
                        <div class="col">
                            <div class="card">
                                <?php
                                try {
                                    echo '<img class="card-img-top my-card-img" src="' . $food->getImg() . '" alt="' . $food->getName() . '">';
                                } catch (MessageException $e) {
                                    echo '<img class="card-img-top my-card-img" src="' . $food->getImg() . '" alt="' . $food->getName() . '">';
                                    echo '<div class="alert alert-warning" role="alert">' . 'Errore: ' . $e->getMessage() . '</div>';
                                }
                                ?>
                                <div class="card-body">
                                    <?php
                                    echo '<h5 class="card-title">' . $food->getName() . '</h5>';
                                    ?>
                                    <ul class="list-unstyled">
                                        <?php
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Typology</span>:
                                            " . $food->getTypology() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Allergens</span>: 
                                            " . $food->getAllergens() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Food for</span>: ";
                                            if ($food->getCategory() === 'cat') {
                                                $pet = new Cat();
                                                echo $pet->getImg();
                                            } else if ($food->getCategory() === 'dog') {
                                                $pet = new Dog();
                                                echo $pet->getImg();
                                            }
                                        echo "</li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Expiration</span>: 
                                            " . $food->getExpiration() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Price</span>: 
                                            " . $food->getPrice() . "
                                            €
                                            </li>";
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Sezione giochi -->
            <div class="pt-3">
                <h3 class="text-white fst-italic">Games</h3>
                <div class="row row-cols-3 row-cols-md-4 justify-content-center gy-4">
                    <?php foreach ($gamesList as $game) { ?>
                        <div class="col">
                            <div class="card">
                                <?php
                                try {
                                    echo '<img class="card-img-top my-card-img" src="' . $game->getImg() . '" alt="' . $game->getName() . '">';
                                } catch (MessageException $e) {
                                    echo '<img class="card-img-top my-card-img" src="' . $game->getImg() . '" alt="' . $game->getName() . '">';
                                    echo '<div class="alert alert-warning" role="alert">' . 'Errore: ' . $e->getMessage() . '</div>';
                                }
                                ?>
                                <div class="card-body">
                                    <?php
                                    echo '<h5 class="card-title">' . $game->getName() . '</h5>';
                                    ?>
                                    <ul class="list-unstyled">
                                        <?php
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Material</span>:
                                            " . $game->getMaterial() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Color</span>: 
                                            " . $game->getColor() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Resistant</span>: 
                                            " . $game->getResistant() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Noise</span>: 
                                            " . $game->getNoise() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Game for</span>: ";
                                        if ($game->getCategory() === 'cat') {
                                            $pet = new Cat();
                                            echo $pet->getImg();
                                        } else if ($game->getCategory() === 'dog') {
                                            $pet = new Dog();
                                            echo $pet->getImg();
                                        }
                                        echo "</li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Price</span>: 
                                            " . $game->getPrice() . "
                                            €
                                            </li>";
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Sezione cuccie -->
            <div class="pt-3">
                <h3 class="text-white fst-italic">Pet beds</h3>
                <div class="row row-cols-3 row-cols-md-4 justify-content-center gy-4">
                    <?php foreach ($petBedsList as $bed) { ?>
                        <div class="col">
                            <div class="card">
                                <?php
                                try {
                                    echo '<img class="card-img-top my-card-img" src="' . $bed->getImg() . '" alt="' . $bed->getName() . '">';
                                } catch (MessageException $e) {
                                    echo '<img class="card-img-top my-card-img" src="' . $bed->getImg() . '" alt="' . $bed->getName() . '">';
                                    echo '<div class="alert alert-warning" role="alert">' . 'Errore: ' . $e->getMessage() . '</div>';
                                }
                                ?>
                                <div class="card-body">
                                    <?php
                                    echo '<h5 class="card-title">' . $bed->getName() . '</h5>';
                                    ?>
                                    <ul class="list-unstyled">
                                        <?php
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Typology</span>:
                                            " . $bed->getMaterial() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Color</span>: 
                                            " . $bed->getColor() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Comfort</span>: 
                                            " . $bed->getComfort() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Easy to clean</span>: 
                                            " . $bed->getEasyCleaning() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Shape</span>: 
                                            " . $bed->getShape() . "
                                            </li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Pet bed for</span>: ";
                                        if ($bed->getCategory() === 'cat') {
                                            $pet = new Cat();
                                            echo $pet->getImg();
                                        } else if ($bed->getCategory() === 'dog') {
                                            $pet = new Dog();
                                            echo $pet->getImg();
                                        }
                                        echo "</li>";
                                        echo "<li class='card-text'>
                                            <i class='fa-solid fa-star-of-life'></i>
                                            <span>Price</span>: 
                                            " . $bed->getPrice() . "
                                            €
                                            </li>";
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>