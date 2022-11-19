<?php
session_start();
require_once('database.php');
$pdo = Database::connect();

$username = $_POST['username'];
$password = $_POST['password'];


if (empty($username) || empty($password)) 
    {
    $msg = 'Inserisci username e password %s';
    } else 
        {
        $query = "SELECT  full_name, username, password FROM users WHERE username = :username";
        $check = $pdo->prepare($query);
        $check->bindParam(':username', $username, PDO::PARAM_STR);
        $check->execute();
        ?>
        <div>
            <p>Username inserito : <?php echo ($username); ?></p>
            <p>Password inserito : <?php echo ($password); ?></p>
        </div>
        <?php  
        $user = $check->fetch(PDO::FETCH_ASSOC);

        //  Per una sicurezza maggiore esiste passowrd_verify(has)  *** DA ATTIVARE IN FUTURO?
        // if (!$user || password_verify($password, $user['password']) === false) 

        if (!$user ||  ($user['password']) != $password) 
            {
                $msg = 'Credenziali utente errate %s';
            } 
                else 
                    {
                        session_regenerate_id();
                        $_SESSION['session_id'] = session_id();
                        $_SESSION['session_user'] = $user['username'];
                        $_SESSION['session_user_fullname'] = $user['full_name'];
                        // $_SESSION['session_user_pwd'] = $user['password'];
                        echo('GG' );
                        
                        header('Location: home.php');
                    }
                    ?>
       
    <?php }
?>