<!doctype html>
<html lang="en">

<head>
    <title>CHAR-ID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rains.css">
    <!-- <link rel="stylesheet" href="../css/boxnuovo.css" > -->
</head>

<?php require_once('header.php'); ?>

<body class="limiter">
    <div class="container-flex text-center sfondo">
        <div class="row justify-content-evenly ">
            <!-- +++ START ACCORDION +++ -->
                <div class="accordion col-3 p-2 mt-4" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                APACHE + MYSQL + PHP // PHPMYADMIN
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Gestionnaire de réservation</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                PHP Auto-cours
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>
                                    <ul>
                                        <li id="const"><a href="../PDO/costantes.php">Les Costantes</a></li>
                                        <li id="const"><a href="../PDO/variables.php">Les Variables</a></li>

                                    </ul>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                WORDPRESS
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>
                                    <ul>
                                        <li id="sommaire"><a href="https://espri101it.go.yo.fr/">Esprit</a></li>
                                        <li id="sommaire"><a href="https://lepaysanurbain.fr/">Le Paysan Urbain</a></li>
                                    </ul>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingQuattro">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuattro" aria-expanded="false" aria-controls="collapseQuattro">
                                Java & JavaScript
                            </button>
                        </h2>
                        <div id="collapseQuattro" class="accordion-collapse collapse" aria-labelledby="headingQuattro" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>
                                    <ul>
                                        <li id="sommaire"><a href="https://espri101it.go.yo.fr/">Java</a></li>
                                        <li id="sommaire"><a href="https://lepaysanurbain.fr/">JavaScript</a></li>
                                    </ul>
                                </strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCinque">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCinque" aria-expanded="false" aria-controls="collapseCinque">
                                HTML & CSS
                            </button>
                        </h2>
                        <div id="collapseCinque" class="accordion-collapse collapse" aria-labelledby="headingCinque" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>
                                    <ul>
                                        <li id="sommaire"><a href="#">Lein 1</a></li>
                                        <li id="sommaire"><a href="#">Lein 2</a></li>
                                    </ul>
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /// END ACCORDION /// -->

            <!-- +++ START SECONDA COLONNA +++ -->
                <div class="bg-white mt-5 col-6 sfondo border rounded shadow">
        
                    <table class="table p-2">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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
            <div class="content ">
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