<?php
// PERMETTE DI UTILISARE LA SUPERGLOBALE SESSION //
session_start();
    $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'xaraton', 'micio1917!');

$getData = $_GET;

if (!isset($getData['id']) && is_numeric($getData['id'])) {
    echo ('Il faut un identificant de recette pour le modifier.');
}

$retriveRecipeStatment =  $db->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
$retriveRecipeStatment->execute([
    'id' => $getData['id'],
]);

$recipe = $retriveRecipeStatment->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<?php include '../php/header.php'; ?>

<body class="limiter">
    <div class="container-flex text-center sfondo">
        <div class="row justify-content-center align-items-center">
            <?php include_once('../php/titolo_sito.php'); ?>
            <h1> Mettre à jour <?php echo ($recipe['title']); ?></h1>
            <div class="container col-auto mb-3">
            <form class="form" action="../php/post_update.php" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label"> Identifiant de la recette </label>
                    <input type="hidden" name="id" id="id" class="form-control" aria-describedby="title" value="<?php echo $recipe['id']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label"> Titre de la recette </label>
                    <input type="text" name="title" id="title" class="form-control" aria-describedby="title" value="<?php echo $recipe['title']; ?>" required>
                    <div id="title-help" class="form-text"> <?php echo $recipe['title']; ?></div>
                </div>

                <div class="mb-3">
                    <label for="recipe" class="form-label">Description de la recette</label>
                    <textarea class="form-control text-dark" name="recipe" id="recipe" cols="30" rows="10" required><?php echo $recipe['recipe']; ?> 
                    </textarea>
                </div>

                <div class="mb-3 text-start">
                    <label for="author" class="form-label ">Author :</label>
                    <input class="form-control" name="author" id="author" cols="10" rows="10" placeholder="<?php echo $recipe['author']; ?>">
                    </input>
                </div>

                <button type="submit" class="btn btn-primary mb-5"> Envoyer</button>
            </form>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>