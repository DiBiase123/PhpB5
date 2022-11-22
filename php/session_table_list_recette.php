
  <!-- +++ SE CONNESSO VISUALIZZA +++ -->
                        <div class="col-8 ">
                            <table class="table table-responsive-lg sfondo border rounded shadow table-hover align-middle ">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                
                                <?php                              
                                    if(isset($_SESSION['session_user'])) 
                                    try
                                    {
                                        $db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'xaraton', 'micio1917!');
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
                                            <td class="bg-light bg-gradient"> 
                                                <p class="bg-white">
                                                    <a href="../html/update.php" class="btn btn-outline-warning shadow" role="button" type="button">   
                                                        Editer
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg>
                                                    </a>  
                                                </p>
                                                <p class="bg-white bg-gradient">
                                                    <a href="" class="btn btn-outline-danger shadow" role="button" type="button" onclick="delete_recette()">   
                                                        Effacer
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                        </svg>
                                                    </a>  
                                                </p>
                                            </td>
                                           
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                            </div>
                    <!-- /// SE CONNESSO VISUALIZZA /// -->
