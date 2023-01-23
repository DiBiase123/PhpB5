<?php
    session_start();
    try {
        $db = new PDO('mysql:host=localhost;dbname=we_love_food; charset=utf8', 'xaraton', 'micio1917!');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if(isset($_GET['recipe_id']) && !empty($_GET['recipe_id'])){
        $recipe_id = strip_tags($_GET['recipe_id']);
        $sql = "DELETE FROM `recipes` WHERE `recipe_id`=:recipe_id";

        $query = $db->prepare($sql);

        $query->bindValue(':recipe_id', $recipe_id, PDO::PARAM_INT);
        $query->execute();

        header('Location: table_list_miericette.php');
    }
    // equire_once('close.php');
?>