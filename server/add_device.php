<?php
date_default_timezone_set('UTC');
if(isset($_GET["user_id"]) && isset($_POST["type"]) && isset($_POST["name"])){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = False
    if ($online) {
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    } else {
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    try{
        $req = $bdd->prepare('INSERT INTO stats SET date = :date, name= :name, type= :type, user_id= :user_id');
        $req->execute(array(
            'date' => date(DATE_RFC2822),
            'name' => $_POST["name"],
            'type' => $_POST["type"],
            'user_id' => $_POST["user_id"]
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    header("Location: ../joined.php");
}
?>
