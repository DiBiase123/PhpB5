    <!-- widget contol_id -->
    <div class="container text-start ">
            <p class="p-1 m-1 text-white">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
                    <?php
                    $session_user = htmlspecialchars($_SESSION['USER_NAME'], ENT_QUOTES, 'UTF-8');
                    $session_id = htmlspecialchars(session_id());
                    $session_name = htmlspecialchars(session_name());
                    $session_status = htmlspecialchars(session_status());
                    
                    printf("Benvenuto %s,<br> ", $session_user);
                    echo "<br>";
                    printf("il tuo session ID è: %s" , $session_id);
                    echo "<br>";
                    printf("Session name : %s" , $session_name);
                    echo "<br>";
                    printf("Status: %s" , $session_status);
                    ?>              
            </p>
            </div>
                    
           




