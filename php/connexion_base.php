<?php 
if(isset($_SESSION['session_user'])) 
echo ('Bonjour et Bienvenue sur le site : ' . $_SESSION['session_user']);    
try
{
    $pdo = Database::connect();
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>