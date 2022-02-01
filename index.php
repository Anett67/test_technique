<?php
require_once('src/MyHouse1.php');
require_once('src/MyHouse2.php');

$house1 = new MyHouse1();
$house2 = new MyHouse2();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="assets/style.css">
    <title>Test technique</title>
</head>
<body>
    <div class="container mt-5">

        <form class="w-50" id="house-form">
            <div class="form-group">
                <label for="maison1">Nombre de Maison type 1</label>
                <input type="number" class="form-control" id="maison1" aria-describedby="emailHelp" placeholder="Maison 1">
            </div>
            <div class="form-group">
                <label for="maison2">Nombre de Maison type 2</label>
                <input type="number" class="form-control" id="maison2" placeholder="Maison 2">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Valider</button>
        </form>

        <div class="mt-4">
            <h2>Maison type 1</h2>
            <?php $house1->generate(); ?>

            <h2>Maison type 2</h2>
            <?php $house2->generate(); ?>
        </div>
    </div>

<script src="assets/script.js"></script>
</body>
</html>
