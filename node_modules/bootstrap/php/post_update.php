<?php 
session_start();

$postData = $_POST;

if (
    !isset($postData['id'])
    || !isset($postData['title'])
    || !isset($postData['recipe'])
    )
    {
        echo('Il manque des information pour permettre l\édition du formulaire/');
        return;
    }

$id = $postData['id'];
$title = $postData['title'];
$recipe = $postData['recipe'];

$inserRecipeStatement = $db->prepare('');
$inserRecipeStatement->execute([
    'title'->$title,
    'recipe'->$recipe,
    'id'->$id,
]);

?>