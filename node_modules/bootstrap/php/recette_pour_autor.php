<?php  
$query = "SELECT recipe_id, title, recipe, author  FROM recipes WHERE author = :author";
        $check = $pdo->prepare($query);
        $check->bindParam(':author', $author, PDO::PARAM_STR);
        $check->execute();

       
        $user = $check->fetch(PDO::FETCH_ASSOC);
        ?>