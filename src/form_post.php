<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test_technique', 'root', '');
} catch (PDOException $e) {
    print "Error: " . $e->getMessage() . "<br/>";
}

$house1 = intval($_POST['house1']);
$house2 = intval($_POST['house2']);

$req = $bdd->prepare("  
                UPDATE house 
                SET house_1_quantity = ?, house_2_quantity = ?
                WHERE id = ? 
            ");

$success = $req->execute(array(
    $house1,
    $house2,
    1
));

$response = $success ? 'La modification a bien été effectuée' : 'Une erreur technique est survenue';

header("Location: ../index.php?response=" . $response);

