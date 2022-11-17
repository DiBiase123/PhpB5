<!DOCTYPE html>
<!-- <html lang="ar" dir="rtl"> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge/firefox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css"> 
</head>


<style>
 .bg-secondary {
  --bs-bg-opacity: 0.65;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
  background-image: var(--bs-gradient); 
  background: #26CAEC;
    background: -webkit-linear-gradient(top right, #5966f3, #FFFFFF);
    background: -moz-linear-gradient(top right, #5966f3, #FFFFFF);
    background: linear-gradient(to bottom left, #5966f3 25.7%, #FFFFFF );}

</style>

<?php include 'header.php';?> 
<body class="container-fluid text-center">

    <!-- +++ Header start +++-->
        <div class="header">
            <!-- +++ Content before waves +++ -->
                <div class="row justify-content-center"> 
                    <section class="bg-secondary  col-sm-4 col-10 shadow rounded p-4 mt-4 text-start border border-2 border-white"> 
                    <h2 class="display-2 text-center text-light" > <strong> Contact </strong></h2><br>

                        <form class="form was-validated text-start" action="./submit_contact.php" method="POST" enctype="multipart/form-data">
                            <!-- +++ Votre prénom +++ -->
                                <div>
                                    <label for="prenom"  class="form-label text-black ">Votre prénom</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Required user name" name="prenom" required></input>
                                    <div class="invalid-feedback">
                                    Veuillez entrer votre nom.
                                    </div>
                                </div>
                            <!-- --- Votre prénom --- -->

                            <!-- +++ Votre email +++ -->
                                <div class="mb-3">
                                    <label for="email" class="form-label text-black">Votre email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Required e-mail" required name="email"></input>
                                    <div class="invalid-feedback">
                                    Veuillez saisir votre email.
                                    </div>
                                    <em class="text-primary">We'll never share your email with anyone else.</em>
                                </div>
                            <!-- --- Votre email --- -->

                            <!-- +++ Votre message +++ -->
                                <div class="mb-3">
                                    <label for="message" class="form-label text-black">Votre message</label>
                                    <textarea class="form-control" id="message" placeholder="Required message" required name="message"></textarea>
                                    <div class="invalid-feedback">
                                    Veuillez saisir votre message.
                                    </div>
                                </div>
                            <!-- --- Votre message --- -->
                            <br/>

                            <!-- +++ Sélectionner un fichier +++ -->
                                <div class="mb-3">
                                    <input type="file"  id="screenshot" class="form-control text-black" aria-label="screenshot" required name="screenshot">
                                    <div class="valid-feedback">Nesssun</div>
                                    <div class="invalid-feedback">Selection</div>
                                </div>
                            <!-- --- Sélectionner un fichier --- -->

                            <!-- +++ Check +++ -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required required name="validationFormCheck1">
                                    <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                    <div class="invalid-feedback">reChapta</div>
                                </div>
                            <!-- --- Check --- -->
                            
                            <!-- +++ Submit +++ -->
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            <!-- --- Submit --- -->
                        </form>
                    </section>
                </div>
            <!-- --- Content before waves --- -->

            <!-- +++ Waves Container +++ -->
                <div>
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
                </div>
            <!-- --- Waves end --- -->

            <!--Content starts-->
            <div class="content">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <p>Code du formulaire securisé en bloquant l'execution de code JavaScript contre les attaques de typeXSS</p>   
                <p class="text-dark"><?php echo 'Versione PHP attuale: ' . phpversion();?></p>

            </div>  
        <!--Content ends-->
        </div>
    <!--Header ends-->
                
        <!-- +++ Waves Container +++ -->
            <div >
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
                <!-- +++ Content before waves +++ -->

                </svg>
            </div>
        <!-- --- Waves end --- -->
</body>
</html>