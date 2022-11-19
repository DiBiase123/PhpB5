<?php
// PERMETTE DI UTILISARE LA SUPERGLOBALE SESSION //
session_start() ;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <title>Connexion Char-ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css"> 
   
</head>
<?php include '../php/header.php';?> 

<body class="limiter">
    <div class="container-flex text-center sfondo">
        <div class="row justify-content-center align-items-center">
            <?php include_once('../php/titolo_sito.php'); ?>
                <!-- +++ START CARD CONTACT +++ -->
                
                    <!--  +++ Si utilisateur/trice est non identifié(e), on affiche l'errore' +++ -->
                        <?php if(!isset($_SESSION['session_user'])) : ?>
                            <!-- +++ FORMULARIO +++ -->
                                <form method="POST" action="../php/post_login.php" > 
                                    <legend><strong><b> Bienvenue !<br>
                                        Acceder au compte: </b></strong>
                                    </legend>

                                    <div class="col ">
                                        <input type="text" name="username"  id="username" value="" placeholder="E-mail ou n° de téléphone" maxlength="50" 
                                                required autocorrect="off" spellcheck="false" class="mb-3 mt-3" />
                                        <br>
                                        <input type="password" placeholder="Mot de passe" name="password" required autocorrect="off" 
                                                spellcheck="false" class="mb-3">
                                            <span class="view-password-button">
                                                <i class="show-password fas fa-eye"></i>
                                                <i class="hide-password hide fa-eye-slash"></i>
                                            </span>
                                            <span class="caps-lock-indicatore hide">
                                                <i class="fas fa-arrow-alt-square-up"></i>
                                            </span>
                                        <br>
                                        <button type="submit" class="btn btn-primary gradient border boder-1 mt-3 mb-3"> Log In</button>                
                                        <br>
                                        
                                    </div>       
                                </form>
                                </div>        

                            <!-- /// FORMULARIO /// -->

                            <!-- +++ si message d'erreur on l'affiche  +++ -->
                                <?php if(isset($errorMessage)) : ?>
                                    <div class="alert alert-warning text-dark" role="alert">
                                        <?php echo $errorMessage; ?>
                                    </div>
                                <?php endif; ?>
                            <!-- /// si message d'erreur on l'affiche  /// -->

                    <!-- /// Si utilisateur/trice est non identifié(e), on affiche l'errore' /// -->

                    <!-- +++ CHECK OK -- REDIRECT STAR +++ -->
                    <div>
                        <h5>
                        <?php else:
                            echo ('Bonjour et Bienvenue sur le site : ' . $_SESSION['session_user_fullname'] );
                            header('Refresh: 5; URL=../php/home.php'); 
                        ?>
                        </h5>
                    </div>
                        

                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden"> Loading... </span>
                        </div>
                      
                    <!-- /// CHECK OK -- REDIRECT FIN /// -->
                    <?php endif; ?>
                <!--  /// FIN /// -->
        <br>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</body>
</html>

