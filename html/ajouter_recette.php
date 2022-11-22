<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Recette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<?php include '../php/header.php'; ?>

<body class="limiter">
    <div class="container-flex text-center sfondo">
        <div class="row justify-content-center align-items-center">
            <?php include_once('../php/titolo_sito.php'); ?>
            <h1> Ajouter une nouvelle recette :</h1>
            <div class="container col-md-6 mt-3 mb-3">
            <form class="form p-2 text-start" action="../php/post_create.php" method="POST">
          
                <div class="mb-3">
                    <label for="title" class="form-label text-warning"> Titre de la recette :</label>
                    <input name="title" id="title" class="form-control"  cols="10" rows="10" placeholder="Choisisse un titre precutant !"  required>  </input>
                </div>

                <div class="mb-3">
                    <label for="recipe" class="form-label text-secondary">Description de la recette :</label>
                    <textarea class="form-control text-secondary" name="recipe" id="recipe" cols="30" rows="10" required>Quoi mettre dans ma gamelle ...
                    </textarea>
                </div>

                <div class="mb-3 text-start text-dark">
                        <label for="author" class="form-label ">Author :</label>
                        <input disabled class="form-control" name="author" id="author" cols="10" rows="10" values="<?php echo $_SESSION['session_user']; ?>" placeholder="<?php echo $_SESSION['session_user']; ?>">
                        </input>

                    </div>

                <button type="submit" class="btn btn-primary mt-3 mb-5"> Envoyer</button>

             
            </form>

            
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>