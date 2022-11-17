<?php 
session_start(); 
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'user@exemple.com',
        'age' => 34,
        'password' => "devine",
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
        'password' => "orsetto",
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
        'password' => "orsetto",
    ],
    [
        'full_name' => 'Giuliano',
        'email' => 'giuliano@g.g',
        'age' => 28,
        'password' => "111",
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];



?>

<!doctype html>
<html lang="en">
<head>
    <title>CHAR-ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">
</head>

<body class="limiter">
<?php require_once('header.php'); ?>

    <div class="container-flex text-center sfondo">
        <?php include_once('titolo_sito.php'); ?>
        
            <div class="row justify-content-evenly ">
                <!-- +++ START ACCORDION +++ -->

                <div class="card col-3 sfondo border rounded shadow text-center">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item  border border-white">
                            <a class="nav-link active" href="#">Informations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="#">Link</a>
                        </li>
                        
                            <li class="nav-item">
                                <span class="badge badge-info p-2 m-2">
                                    <?php require_once('control_id.php');?>
                            </span> 
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Menu personelle</h5>
                        <ul>
                            <li class="list-unstyled">
                        <a href="table_list_miericette.php" class="card-text">++ Le mie ricette</a></li>
                        <li class="list-unstyled">
                        <a href="../html/ajouter_recette.php" class="card-text">++ Aggiungere Ricetta</a></li>
                         <p class="card-text">Preferiti</p>
                         <p class="card-text">I miei commenti</p>
                         <li class="nav-item">
                            <a class="nav-link text-warning" href="../html/update.php">++ Update recette</a>
                        </li>
                         </ul>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                <!-- /// END ACCORDION /// -->

                <!-- +++ START SECONDA COLONNA +++ -->
                <?php if
                        (isset($_SESSION['LOGGED_USER']))
                        {
                            include_once('./session_table_list_recette.php');
                        }
                        else
                        {
                            include_once('./table_presentation.php');
                        }
                         ?>
                                                 
                <!-- /// END SECONDA COLONNA /// -->
            </div>

            <!-- +++ Waves Container +++ -->
                <svg class="waves mt-5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
                    <div class="alert alert-success" role="alert">
                        <?php echo ('Bonjour et Bienvenue sur le site ' . $_SESSION['LOGGED_USER']) ?>
                        <a href="../html/ajouter_recette.php">
                        <?php 
                        if 
                            (
                                (isset($_SESSION['LOGGED_USER']))
                            )
        
                                echo('Zona segreta'); ?>
                        </a>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <p>DI BIASE Giuliano</p>
                </div>
            <!-- /// Content ends /// -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>
