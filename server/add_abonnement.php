<?php
date_default_timezone_set('UTC');
if(isset($_GET["user_id"]) && isset($_POST["abonnement"])){
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $online = true;
    if ($online == true) {
        $bdd = new PDO('mysql:host=localhost;dbname=id15371027_datab;charset=utf8', 'id15371027_user', '&l()!Qa#6fF!w]0q', $pdo_options);
    } else {
        $bdd = new PDO('mysql:host=localhost;dbname=innovation_prototype_2;charset=utf8', 'root', '', $pdo_options);
    }
    try{
        $req = $bdd->prepare('INSERT INTO pre_inscription SET abonnement = :abonnement WHERE user_id= :user_id');
        $req->execute(array(
            'abonnement' => $_POST["abonnement"],
            'user_id' => $_POST["user_id"]
        ));
    }catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    header("Location: ../joined.php");
}
?>
