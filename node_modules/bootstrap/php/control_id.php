<?php
$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
$session_user_fullname = htmlspecialchars( $_SESSION['session_user_fullname'], ENT_QUOTES, 'UTF-8');
$session_id = htmlspecialchars(session_id());
$session_name = htmlspecialchars(session_name());
$session_status = htmlspecialchars(session_status());
?>
<!-- +++ widget contol_id +++ -->
<div class="col-auto text-start shadow">
    <ul class="list-group bg-transparent bg-gradient text-white">
        <li class="list-group-item d-flex justify-content-between align-items-start bg-transparent">
            <div class="me-auto bg-transparent">
                <div class="fw-bold bg-transparent text-white">Bienvenue : <?php printf("%s<br> ", $session_user_fullname) ?></div>
                <?php printf("%s<br> ", $session_user) ?>
                

                
            </div>
            <span class="badge bg-transparent rounded-pill">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bell-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                </svg>
            </span>
        </li>

        </li>
        <li class="list-group-item bg-transparent text-wrap text-white"> ID session : <span class="text-dark"><?php printf("%s", $session_id); ?> </span></li>
        <li class="list-group-item bg-transparent text-wrap text-white"> Name session : <span class="text-dark"> <?php printf("%s", $session_name); ?> </span></li>
        <li class="list-group-item bg-transparent text-wrap text-white"> Status session : <span class="text-dark"> <?php printf("%s", $session_status); ?> </span></li>
    </ul>
</div>
<!-- /// widget contol_id /// -->