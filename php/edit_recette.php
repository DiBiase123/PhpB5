<?php 
session_start();
class Database
{
    private static $dbName = 'we_love_food';
    private static $dbHost = '127.0.0.1:3306';
    private static $dbUsername = 'xaraton';
    private static $dbUserPassword = 'micio1917!';
    private static $cont = null;
    public function __construct()
    {
        die('Init function is not allowed');
    }
    public static function connect()
    {
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
                
            } catch (PDOException $e) {
                echo('Connesso a we_love_food');
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>


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

<?php



$recipe_id = strip_tags($_GET['recipe_id']);


if(isset($_POST)){
    if(isset($_GET['recipe_id']) && !empty($_GET['recipe_id'])
        && isset($_POST['recipe']) && !empty($_POST['recipe'])
        // && isset($_POST['Prenom']) && !empty($_POST['Prenom'])
        // && isset($_POST['Date_de_nais']) && !empty($_POST['Date_de_nais'])
        
        ){
       
        // $recipe_id = strip_tags($_GET['recipe_id']);
        $recipe_id = strip_tags($_GET['recipe_id']);
        $recipe = strip_tags($_POST['recipe']);
        $title = strip_tags($_POST['title']);
        $author = strip_tags($_SESSION['session_user']);
        $is_enabled = 1;
        $id= $recipe_id;


        echo$recipe_id . "<-- start echo";
        echo $recipe ;
        echo $title;
        echo $author;
        echo $is_enabled;
        echo $id;

        
            $sql = " UPDATE `recipes` SET `recipe_id`=:recipe_id, `recipe`=:recipe, `title`=:title, `is_enabled`=:is_enabled, `author`=:author          
             
             WHERE `recipe_id`=:recipe_id";

            $query = $pdo->prepare($sql);

            $query->bindValue(':recipe', $recipe, PDO::PARAM_STR);
            $query->bindValue(':title', $title, PDO::PARAM_STR);
            $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
            $query->bindValue(':author', $author, PDO::PARAM_STR);
          


            $query->bindValue(':recipe_id', $recipe_id, PDO::PARAM_INT);

            $query->execute();

            header('Location: ./table_list_miericette.php');
        }
}

?>