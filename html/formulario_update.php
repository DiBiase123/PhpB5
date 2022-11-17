<?php
// PERMETTE DI UTILISARE LA SUPERGLOBALE SESSION //
session_start();

$getData = $_GET;

if (!isset($getData['id']) && is_numeric($getData['id'])) {
    echo ('Il faut un identificant de recette pour le modifier.');
}

$retriveRecipeStatment =  $db->prepare('SELECT * FROM recipes WHERE recipe_id = :recipe_id');
$retriveRecipeStatment->execute([
    'id' => $getData['id'],
]);

$recipe = $retriveRecipeStatment->fetch(PDO::FETCH_ASSOC);
?>
