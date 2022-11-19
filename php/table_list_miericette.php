<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />

    <title>Mes recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">

</head>
<body class="limiter">
    <?php require_once('header.php'); ?>

    <div class="container-flex text-center sfondo">
        <?php include_once('titolo_sito.php'); ?>

        <div class="row justify-content-evenly ">
            <!-- +++ START ACCORDION +++ -->
            <!-- +++ SE CONNESSO VISUALIZZA +++ -->
            <div class="col-11 ">
            <table class="table table-responsive-lg sfondo border rounded shadow table-hover align-middle ">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Author</th>
                                        <div class="me-auto bg-transparent">
                <div class="fw-bold bg-transparent">Bienvenue</div>
             
            </div>
                                    </tr>
                                </thead>
                                <?php                              
                                    if(isset($_SESSION['session_user'])) 

                                    $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
                                    echo($session_user);
                                    $username = $_SESSION['session_user'];


                                    try
                                    {
                                        $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'xaraton', 'micio1917!');
                                    }
                                    catch (Exception $e)
                                    {
                                            die('Erreur : ' . $e->getMessage());
                                    }
                                    $author =$session_user;

                                    // Si tout va bien, on peut continuer
                                    // On récupère tout le contenu de la table recipes
                                    $sqlQuery = "SELECT * FROM recipes WHERE author = :username";
                                   

                                    $recipesStatement = $db->prepare($sqlQuery);
                                    $recipesStatement->bindParam(':username', $username, PDO::PARAM_STR);
                                    $recipesStatement->execute();

                                    $recipes = $recipesStatement->fetchAll(PDO::FETCH_ASSOC);
                                    // 
                                ?>
                                <tbody class="table bg-gradient" >
                                    <?php // On affiche chaque recette une à une
                                        foreach ($recipes as $recipe) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $recipe['recipe_id'];?></th>
                                            <td class="text-center text-white"><?php echo $recipe['title'];?></td>
                                            <td class="text-center"><?php echo $recipe['recipe']; ?></td>
                                            <td class="text-center text-warning"><?php echo $recipe['author']; ?></td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
            </div>
            <!-- /// SE CONNESSO VISUALIZZA /// -->

        </div>
    </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>