<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />

    <title>Contact Char-ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css"> 
</head>
<?php include 'header.php';?> 

<body class="limiter">
<div class="container-flex text-center">
    
    <!-- +++ START CARD CONTACT +++ -->
        <div class="row justify-content-center sfondo">
            <!-- +++ START HEADER CONTACT +++ -->
            <?php include_once('../php/titolo_sito.php'); ?>

                <div class="card-sfondo">                  
                </div>
            <!-- /// END HEADER CONTACT /// -->

            <!-- +++ START BODY CONTACT /// -->
                <div class="card col-lg-6 border-white shadow col-auto bg-card-contact text-start mt-2">
                    <form class="was-validated" action="./submit_contact.php" method="POST" enctype="multipart/form-data">
                        <div class="mt-3 mb-3">
                            <label for="prenom"  class="form-label text-black ">Votre prénom</label>
                            <input type="text" class="form-control" id="prenom" placeholder="Required user name" name="prenom" required value="<?php echo ( $_SESSION['session_user_fullname'] ); ?>"> </input>
                            <div class="invalid-feedback">
                                Veuillez entrer votre nom.
                            </div>
                        </div>

                        <!-- +++ Votre email +++ -->
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label text-black">Votre email</label>
                                <input type="email" class="form-control" id="email" placeholder="Required e-mail" required name="email" value="<?php echo ($_SESSION['session_user']); ?>"></input>
                                <div class="invalid-feedback">
                                Veuillez saisir votre email.
                                </div>
                                <p class="text-white text-center"><strong><em>We'll never share your email with anyone else.</em></strong></p>
                            </div>
                        <!-- --- Votre email --- -->

                        <!-- +++ Votre message +++ -->
                            <div class="mt-3">
                                <label for="message" class="form-label text-black">Votre message</label>
                                <textarea class="form-control" id="message" placeholder="Required message" required name="message"></textarea>
                                <div class="invalid-feedback">
                                Veuillez saisir votre message.
                                </div>
                            </div>
                        <!-- --- Votre message --- -->
                        <br/>

                        <!-- +++ Sélectionner un fichier +++ -->
                            <div class="mt-3 mb-3">
                                <input type="file"  id="screenshot" class="form-control text-black" aria-label="screenshot" required name="screenshot">
                                <div class="valid-feedback">Nesssun</div>
                                <div class="invalid-feedback">Selection</div>
                            </div>
                        <!-- --- Sélectionner un fichier --- -->

                        <!-- +++ Check +++ -->
                            <div class="form-check mt-3 mb-3">
                                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required required name="validationFormCheck1">
                                <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                <div class="invalid-feedback">reChapta</div>
                            </div>
                        <!-- --- Check --- -->

                        <!-- +++ Submit +++ -->
                            <div class="mt-3 mb-3">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        <!-- --- Submit --- -->
                    </form>
                </div>
            <!-- /// END BODY CONTACT /// -->

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
                <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                        <p>Code du formulaire securisé en bloquant l'execution de code JavaScript contre les attaques de typeXSS</p>  
                        <ul>
                            <li><p> htmlspecialchars </p></li>
                        </ul> 
                        <p class="text-dark"><?php echo 'Versione PHP attuale: ' . phpversion();?></p>
                </div>  
            <!-- /// Content ends /// -->
        </div> 
    <!-- /// END CARD CONTACT /// -->
            
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>