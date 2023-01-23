<?php 

$recipe['recipe_id'];
echo ("ID della ricetta". $recipe['recipe_id']);

  foreach ($recipes as $recipe) {
    
               
?>



      <!-- +++ modal_effacer +++ -->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
          <div class="modal-dialog">
         
            <div class="modal-content">
           
              <!-- +++ HEADER +++ -->
                <div class="modal-header">
                  <svg width="2em" height="2em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                  <h5 class="modal-title" id="exampleModalLabel"> Confirmation </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
              <!-- /// HEADER /// -->
              
              <!-- +++ BODY +++ -->
                <div class="modal-body">
                  Vous êtes sûr de vouloir effacer la recette selectioné ? 
                  
                </div>
              <!-- /// BODY /// -->
      
              <!-- +++ FOOTER +++ -->
                <div class="modal-footer">
                  <!-- +++ ANNULLA BOTTONE +++-->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuller</button>
                  <!-- /// ANNULLA BOTTONE /// -->
                  <!-- +++ DELETE BUTTON +++ -->  
                    <a class="btn btn-danger" type="button" href=""> EFFACER 
                      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash-fill text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                      </svg> 
                      <span class="badge rounded-pill text-bg-primary"><?=  $recipe['recipe_id']; } ?> </span>
                    </a>  
                  <!-- /// DELETE BUTTON /// -->  
                </div>
              <!-- /// FOOTER /// -->
            </div>
          </div>
        </div>
      <!-- /// modal_effacer /// -->
      




