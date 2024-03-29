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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <?php require_once('header.php'); ?>

    <div class="container-flex text-center sfondo">
        <?php include_once('titolo_sito.php'); ?>

        <div class="row justify-content-evenly ">
            <!-- +++ START ACCORDION +++ -->
            <!-- +++ SE CONNESSO VISUALIZZA +++ -->
            <div class="col-10 ">
                <table class="table table-responsive-lg sfondo border rounded shadow align-middle ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Author</th>
                            <th scope="col">Options</th>
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
                        $sqlQuery = "SELECT * FROM recipes WHERE author = :username ORDER BY recipe_id DESC";
                        

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
                                <td class="col-md-3 viola-boost">  <?php include('../html/group_button_mierecette.php'); ?> 
                                   
                     
                                    
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
            <!-- /// SE CONNESSO VISUALIZZA /// -->

            <!-- +++ Waves Container +++ -->
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                                <defs>
                                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                                </defs>
                                <g class="parallax">
                                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                                </g>
                            </svg>
                        <!-- /// Waves end /// -->  

                        <!-- +++ Content starts +++ -->
                            <div class="content justify-content-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <!-- +++ Impossible de se connecter ? +++ -->
                                    <div class="thirdparty-line mb-3 mt-3">
                                    <?php if(isset($errorMessage)) : ?>
                                        <ul class="list-unstyled" id="help-links">
                                            <li id="loginSupport" rel="internal"> <a href="../php/contact.php" id="a1">Impossible de se connecter ?</li></a>
                                        </ul>
                                        <?php else: ?>
                                            <legend id="a1"> Di Biase</legend>
                                            <?php endif ?>
                                    </div>
                                <!-- /// Impossible de se connecter ? /// -->
                            </div>
                        <!-- /// Content ends /// --> 

        </div>
    </div>
    
</body>

</html>