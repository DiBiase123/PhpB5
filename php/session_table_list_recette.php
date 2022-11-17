  <!-- +++ SE CONNESSO VISUALIZZA +++ -->
                        <div class="col-8 ">
                            <table class="table table-responsive-lg sfondo border rounded shadow table-hover align-middle ">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Author</th>
                                    </tr>
                                </thead>
                                <?php                              
                                    if(isset($_SESSION['LOGGED_USER'])) 
                                    try
                                    {
                                        $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'xaraton', 'micio1917!');
                                        $recipesStatement = $db->prepare('SELECT * FROM recipes');
                                    }
                                    catch (Exception $e)
                                    {
                                            die('Erreur : ' . $e->getMessage());
                                    }
                                        
                                    // Si tout va bien, on peut continuer
                                    // On récupère tout le contenu de la table recipes
                                    $sqlQuery = 'SELECT * FROM recipes';
                                    $recipesStatement = $db->prepare($sqlQuery);
                                    $recipesStatement->execute();
                                    $recipes = $recipesStatement->fetchAll();
                                    // 
                                ?>
                                <tbody class="table bg-gradient" >
                                    <?php // On affiche chaque recette une à une
                                        foreach ($recipes as $recipe) {
                                    ?>
                                        <tr  role="button" onclick="header('URL=../html/selection_recette.php');">
                                            <th scope="row"><?php echo $recipe['recipe_id'];?></th>
                                            <td class="text-center text-white"><?php echo $recipe['title'];?></td>
                                            <td class="text-center"><?php echo $recipe['recipe']; ?></td>
                                            <td class="text-center text-warning"><?php echo $recipe['author']; ?></td>
                                            <td> <button class="btn btn-warning"><a href="../html/selection_recette.php">HELLO</a> </button> </td>
                                           <td> <a role="button" class="btn btn-primary" href="../html/update.php">++ Modifica</a> </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                            </div>
                    <!-- /// SE CONNESSO VISUALIZZA /// -->
