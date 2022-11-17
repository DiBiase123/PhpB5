<?php
// PERMETTE DI UTILISARE LA SUPERGLOBALE SESSION //
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rains.css">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />

    <title>Ajouter Recette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php include '../php/header.php'; ?>

<body class="limiter">
    <div class="container-flex text-center sfondo">
        <div class="row justify-content-center align-items-center">
            <?php include_once('../php/titolo_sito.php'); ?>


            <div class="container col-auto mb-3">
                <form class="form" action="../php/post_create.php" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label"> Titre de la recette </label>
                        <input type="text" name="title" id="title" class="form-control" aria-describedby="title" required>
                        <div id="title-help" class="form-text"> Choisisse un titre precutant !</div>
                    </div>

                    <div class="mb-3">
                        <label for="recipe" class="form-label">Description de la recette</label>
                        <textarea class="form-control" placeholder="Seulement du contenu vous appartenent ou" name="recipe" id="recipe" cols="30" rows="10" required></textarea>

                    </div>

                    <div class="mb-3 text-start">
                        <label for="author" class="form-label ">Author :</label>
                        <input class="form-control" name="author" id="author" cols="10" rows="10" values="<?php echo ($_SESSION['USER_NAME']); ?>" placeholder="<?php echo ($_SESSION['USER_NAME']); ?>">
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