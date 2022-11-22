<?php
session_start();
require_once('database.php');
require_once('connexion_base.php');




$title = strip_tags($_POST['title']);
$recipe = strip_tags($_POST['recipe']);
$author = strip_tags($_SESSION['session_user']);
$recipe_id = strip_tags($_GET['recipe_id']);

$recipe = $recipes[$recipe_id];

echo "zozzaTitle_" . $_POST['title'];
echo "zozzizziomoRecipe_" . $_POST['recipe'];
echo "zozzizziomoAutore_" . $_SESSION['session_user'];
echo "zozzizziomoRecipe_id_" . $recipe_id ;
echo "zozzizziomoRecipe" . $recipe;





     
      


            $sql = "UPDATE `recipes` SET `title` = 'Cannelloni+++', `recipe` = 'Orso Coin+++' WHERE (`recipe_id` = '33')";

            $query = $pdo->prepare($sql);
            $query->bindValue(':recipe_id', $recipe_id, PDO::PARAM_STR);

            $query->bindValue(':recipe', $recipe, PDO::PARAM_STR);
            $query->bindValue(':title', $title, PDO::PARAM_STR);
            $query->execute();

            header('Location: table_list_miericette.php');


?>