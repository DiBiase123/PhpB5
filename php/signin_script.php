<?php session_start();
//verification formulaire
if 
    (
    !isset($_POST['email'])
    || !isset($_POST['password'])
    ) 
{
    echo ('Il fau un email et un password pou soumettre le formulaire. ');
    return;
}

$full_name =  $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sig In CHAR-ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">

</head>

<style>
    .orsocoin {
        background: linear-gradient(-135deg, #c850c0, #4158d0);
    }
</style>

<?php include '../php/header.php'; ?>

<body>

    <section class="container-flex text-center">
        <div class="row sfondo justify-content-center">
            <h2 class="display-2 mt-3"> <strong> Creation Utilisateur CHAR-ID ! </strong></h2>

            <!-- +++ Content before waves +++ -->
            <section class="orsocoin col-auto mt-3 shadow-3 p-1 rounded">
                <div class="card p-2">
                    <h5 class="card-title text-dark p-2">Rappel des informations</h5>
                    <div class="card-body p-2">
                        <p class="card-text text-start"> <em> Nom & Prénom : <strong class="text-primary"><?php echo htmlspecialchars($_POST['full_name']); ?></strong></em></p>
                        <p class="card-text text-start"> <em> E-mail : <strong class="text-primary"><?php echo htmlspecialchars($_POST['email']); ?></strong></em></p>
                        <p class="card-text text-start"> <em> Password : <strong class="text-primary"><?php echo htmlspecialchars($_POST['password']); ?></strong></em></p>
                    </div>
                </div>
            </section>
            <!-- /// Content before waves ///  -->

            <!-- +++ Waves Container +++ -->
            <div class="mt-5">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
            </div>
            <!-- --- Waves end --- -->

            <div class="content text-dark" id="content">
                <?php

                try {
                    $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'xaraton', 'micio1917!');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }

                // Si tout va bien, on peut continuer
                // Ecriture de la requête
                $sqlQuery = 'INSERT INTO users(full_name, email, password, age ) VALUES (:full_name, :email, :password, :age)';

                // Préparation
                $insertRecipe = $db->prepare($sqlQuery);

                // Exécution ! La recette est maintenant en base de données
                $insertRecipe->execute([
                    'full_name' =>  $_POST['full_name'],
                    'email' =>  $_POST['email'],
                    'password' => $_POST['password'],
                    'age' => 0,
                ]);
                ?>

                       <!-- +++ si message d'erreur on l'affiche  +++ -->
                       <?php if(isset($errorMessage)) : ?>
                                    <div class="alert alert-warning text-dark" role="alert">
                                        <?php echo $errorMessage; ?>
                                    </div>
                            <!-- /// si message d'erreur on l'affiche  /// -->
                

                        <?php else :
                            echo ('Bonjour et Bienvenue sur le site : ' . $_POST['full_name']);
                            header('Refresh: 3; URL=../php/home.php');
                            
                        ?>

                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden"> Loading... </span>
                        </div>
                      
                    <?php endif; ?>
            
        <br>

            </div>

        </div>
        <!--Header ends-->

    </section>
    <!-- --- SECTION WAVE --- -->

</body>

</html>