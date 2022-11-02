<!doctype html>
<html lang="en">
  <head>
    <title>CHAR-ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css"> 
    <link rel="stylesheet" href="../css/boxnuovo.css" >
  </head>
<?php require_once('header.php');?>
<!-- <?/*php include 'header.php';*/?>  -->

<body>
    <div class="container-flex text-center p-2 m-2 ">
    <h1 class="display-2 text-center"> CHAR-ID <span class="badge badge-info"> .1.0.1</span></h1> 
      <div class="row justify-content-center">
        <br/>
        <!-- <div class="col-3" id="sinistra"> -->
        <div class="accordion col-3" id="accordionMYSQL"><!-- GROUP ACCORDING -->
          <!-- +++ CARD PHP+MYSQL START +++ -->
            <div class="card">
              <div class="card-header" id="headingMYSQL">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseMYSQL" aria-expanded="true" aria-controls="collapseMYSQL">
                    APACHE + MYSQL + PHP // PHPMYADMIN
                  </button>
                </h2>
              </div>

            <div id="collapseMYSQL" class="collapse show" aria-labelledby="headingMYSQL" data-parent="#accordionMYSQL">
              <div class="card-body">
                <ul class="list">
                  <li id="sommaire"><a href="./login.html"> Gestionnaire de réservation </a></li>
                </ul>
              </div>
            </div>
            </div>

          <!-- /// CARD PHP+MYSQL END /// -->
                  
          <!-- +++ 2° CARD PHP START +++ -->
            <div class="card">
              <div class="card-header" id="headingPHP">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsePHP" aria-expanded="false" aria-controls="collapsePHP">
                    PHP 
                  </button>
                </h2>
              </div>
            </div> 
          <!-- --- 2° CARD PHP START --- -->
          
          <!-- +++ START CARD PHP +++  -->
            <div id="collapsePHP" class="collapse" aria-labelledby="headingPHP" data-parent="#accordionMYSQL">
                <div class="card-body">
                    <ul>
                      <li id="const"><a href="../PDO/costantes.php">Les Costantes</a></li>
                      <li id="const"><a href="../PDO/variables.php">Les Variables</a></li> 
                    </ul>
                </div>
            </div>
          <!-- /// END CARD PHP /// -->
          
          <!-- +++ CARD WORDPRESS START +++ -->
            <div class="card">
              <div class="card-header" id="headingWORDPRESS">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseWORDPRESS" aria-expanded="false" aria-controls="collapseWORDPRESS">
                      WORDPRESS
                    </button>
                  </h2>
                </div>
              </div>
            </div> 
                
            <div id="collapseWORDPRESS" class="collapse" aria-labelledby="headingWORDPRESS" data-parent="#accordionMYSQL">
              <div class="card-body">
                <ul>
                    <li id="sommaire"><a href="https://espri101it.go.yo.fr/">Esprit</a></li>
                    <li id="sommaire"><a href="https://lepaysanurbain.fr/">Le Paysan Urbain</a></li>
                </ul>
              </div>
            </div>
          <!-- END CARD WORDPRESS  -->

          <!-- +++ CARD JAVSCRIPT START +++ -->                              
            <div class="card">
              <div class="card-header" id="headingJAVASCRIPT">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseJAVASCRIPT" aria-expanded="false" aria-controls="collapseJAVASCRIPT">
                    JAVASCRIPT
                  </button>
                </h2>
              </div>
            </div>  
                    
            <div id="collapseJAVASCRIPT" class="collapse" aria-labelledby="headingJAVASCRIPT" data-parent="#accordionMYSQL">
              <div class="card-body">
                <ul>
                  <li id="sommaire"><a href="./javascript/Esercizi_JavaScript.html">JavaScript</a></li>
                  <li id="sommaire"><a href="./javascript/ex11_pgcd.html">Example coda Java/Javascript</a></li>
                </ul>
              </div>
            </div>
          <!-- /// CARD JAVASCRIPT END ///  -->

          <!-- +++ CARD HTML START +++ -->  
            <div class="card">
              <div class="card-header" id="headingHTML5">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseHTML5" aria-expanded="false" aria-controls="collapseHTML5">
                    HTML 5 - CSS 3
                  </button>
                </h2>
              </div>
            </div>

            <div id="collapseHTML5" class="collapse" aria-labelledby="headingHTML5" data-parent="#accordionMYSQL">
              <div class="card-body">
                <ul class="list">
                  <li id="sommaire"><a href="./html5-css3/Partie9.html"> Les styles pour les fontes - Partie1 - </a></li>
                  <li id="sommaire"><a href="./html5-css3/Partie9_1.html"> Les styles pour les fontes - Partie2 -</a></li>
                  <li id="sommaire"><a href="./html5-css3/Partie10.html"> Les styles pour les conteneurs de text </a></li>
                  <li id="sommaire"><a href="./html5-css3/Partie11.html"> Les styles pour les boites </a></li>
                  <li id="sommaire"><a href="./html5-css3/Partie11_2.html"> Les images </a></li>
                  <li id="sommaire"><a href="./html5-css3/Partie12.html"> Le positionnement des boîte </a></li>
                </ul>
              </div>
            </div>
          <!-- /// CARD HTML END /// -->
                                                                  
        </div>     
      </div>
    </div>
                <!-- 2° COLONNA -->
  </body>
</html>