<?php
require_once('src/MyHouse1.php');
require_once('src/MyHouse2.php');
require_once('src/M_house.php');

$house1 = new MyHouse1();
$house2 = new MyHouse2();
$requests = new M_house();

$house_quantities = $requests->getHouseQuantity();

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

    <div class="mb-3"><?php echo $_GET['response'] ?? ''; ?></div>

    <form action="src/form_post.php" method="post" class="w-50" id="house-form">
        <div class="form-group">
            <label for="maison1">Maisons bleues</label>
            <input type="number" class="form-control" name="house1" id="maison1" aria-describedby="emailHelp"
                   placeholder="Maison 1" value="<?php echo $house_quantities->house_1_quantity; ?>">
        </div>
        <div class="form-group">
            <label for="maison2">Maisons vertes</label>
            <input type="number" class="form-control" name="house2" id="maison2" placeholder="Maison 2" value="<?php echo $house_quantities->house_2_quantity; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Valider</button>
    </form>

    <div class="mt-4">
        <div class="d-flex flex-wrap">
            <?php
                for ($i = 0; $i < $house_quantities->house_1_quantity; $i++){
                    $house1->generate();
                }
            ?>
        </div>

        <div class="d-flex flex-wrap">
            <?php
                for ($i = 0; $i < $house_quantities->house_2_quantity; $i++) {
                    $house2->generate();
                }
            ?>
        </div>

    </div>

    <button id="btn-red" class="btn btn-danger mt-3">Maisons rouges</button>
</div>

<script src="assets/script.js"></script>
</body>
</html>
